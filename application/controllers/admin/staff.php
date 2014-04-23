<?php
class Staff extends Admin_Controller
{

	public function __construct ()
	{
		parent::__construct();
                $this->load->model("staff_m");
	}

	public function index ()
	{
		// Fetch all staff
		$this->data['staff'] = $this->staff_m->get();
		
		// Load view
		$this->data['subview'] = 'admin/staff/index';
		$this->load->view('admin/_layout_main', $this->data);
	}

	public function edit ($id = NULL)
	{
		// Fetch a staff or set a new one
		if ($id) {
			$this->data['staff'] = $this->staff_m->get($id);
			count($this->data['staff']) || $this->data['errors'][] = 'Staff could not be found';
		}
		else {
			$this->data['staff'] = $this->staff_m->get_new();
		}
		
		// Set up the form
		$rules = $this->staff_m->rules_admin;
		$id || $rules['password']['rules'] .= '|required';
		$this->form_validation->set_rules($rules);
		
		// Process the form
		if ($this->form_validation->run() == TRUE) {
			$data = $this->staff_m->array_from_post(array('name', 'email', 'password'));
			$data['password'] = $this->staff_m->hash($data['password']);
			$this->staff_m->save($data, $id);
			redirect('admin/staff');
		}
		
		// Load the view
		$this->data['subview'] = 'admin/staff/edit';
		$this->load->view('admin/_layout_main', $this->data);
	}

	public function delete ($id)
	{
		$this->staff_m->delete($id);
		redirect('admin/staff');
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