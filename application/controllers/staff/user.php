<?php
class User extends Staff_Controller
{

	public function __construct ()
	{
		parent::__construct();
                $this->load->model("staff/staff_m");
	}

	public function index ()
	{
		// Fetch all staffs
		$this->data['staffs'] = $this->staff_m->get();
		
		// Load view
		$this->data['subview'] = 'staff/staff/index';
		$this->load->view('staff/_layout_main', $this->data);
	}

	public function edit ($id = NULL)
	{
		// Fetch a user or set a new one
		if ($id) {
			$this->data['staff'] = $this->staff_m->get($id);
			count($this->data['staff']) || $this->data['errors'][] = 'User could not be found';
		}
		else {
			$this->data['staff'] = $this->staff_m->get_new();
		}
		
		// Set up the form
		$rules = $this->staff_m->rules_staff;
		$id || $rules['password']['rules'] .= '|required';
		$this->form_validation->set_rules($rules);
		
		// Process the form
		if ($this->form_validation->run() == TRUE) {
			$data = $this->staff_m->array_from_post(array('name', 'email', 'password'));
			$data['password'] = $this->staff_m->hash($data['password']);
			$this->staff_m->save($data, $id);
			redirect('staff/user');
		}
		
		// Load the view
		$this->data['subview'] = 'staff/user/edit';
		$this->load->view('staff/_layout_main', $this->data);
	}

	public function delete ($id)
	{
		$this->staff_m->delete($id);
		redirect('staff/user');
	}

	public function login ()
	{
		// Redirect a user if he's already logged in
		$dashboard = 'staff/dashboard';
		$this->staff_m->loggedin() == FALSE || redirect($dashboard);
		
		// Set form
		$rules = $this->staff_m->rules;
		$this->form_validation->set_rules($rules);
		
		// Process form
		if ($this->form_validation->run() == TRUE) {
			// We can login and redirect
			if ($this->staff_m->login() == TRUE) {
				redirect($dashboard);
			}
			else {
				$this->session->set_flashdata('error', 'That email/password combination does not exist');
				redirect('staff/user/login', 'refresh');
			}
		}
		
		// Load view
		$this->data['subview'] = 'staff/user/login';
		$this->load->view('staff/_layout_modal', $this->data);
	}

	public function logout ()
	{
		$this->staff_m->logout();
		redirect('staff/user/login');
	}

	public function _unique_email ($str)
	{
		// Do NOT validate if email already exists
		// UNLESS it's the email for the current staff
		
		$id = $this->uri->segment(4);
		$this->db->where('email', $this->input->post('email'));
		!$id || $this->db->where('id !=', $id);
		$staff = $this->staff_m->get();
		
		if (count($staff)) {
			$this->form_validation->set_message('_unique_email', '%s should be unique');
			return FALSE;
		}
		
		return TRUE;
	}
}