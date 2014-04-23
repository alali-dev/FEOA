<?php
class Customer extends Admin_Controller
{

	public function __construct ()
	{
		parent::__construct();
                $this->load->model("customer_m");
	}

	public function index ()
	{
		// Fetch all customer
		$this->data['customer'] = $this->customer_m->get();
		
		// Load view
		$this->data['subview'] = 'admin/customer/index';
		$this->load->view('admin/_layout_main', $this->data);
	}

	public function edit ($id = NULL)
	{
		// Fetch a customer or set a new one
		if ($id) {
			$this->data['customer'] = $this->customer_m->get($id);
			count($this->data['customer']) || $this->data['errors'][] = 'Customer could not be found';
		}
		else {
			$this->data['customer'] = $this->customer_m->get_new();
		}
		
		// Set up the form
		$rules = $this->customer_m->rules_admin;
		$id || $rules['password']['rules'] .= '|required';
		$this->form_validation->set_rules($rules);
		
		// Process the form
		if ($this->form_validation->run() == TRUE) {
			$data = $this->customer_m->array_from_post(array('name', 'email', 'password'));
			$data['password'] = $this->customer_m->hash($data['password']);
			$this->customer_m->save($data, $id);
			redirect('admin/customer');
		}
		
		// Load the view
		$this->data['subview'] = 'admin/customer/edit';
		$this->load->view('admin/_layout_main', $this->data);
	}

	public function delete ($id)
	{
		$this->customer_m->delete($id);
		redirect('admin/customer');
	}
	public function _unique_email ($str)
	{
		// Do NOT validate if email already exists
		// UNLESS it's the email for the current customer
		
		$id = $this->uri->segment(4);
		$this->db->where('email', $this->input->post('email'));
		!$id || $this->db->where('id !=', $id);
		$customer = $this->customer_m->get();
		
		if (count($customer)) {
			$this->form_validation->set_message('_unique_email', '%s should be unique');
			return FALSE;
		}
		
		return TRUE;
	}
}