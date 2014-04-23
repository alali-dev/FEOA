<?php
class Staff_Controller extends MY_Controller
{

	function __construct ()
	{
		parent::__construct();
		$this->data['meta_title'] = 'My awesome CMS';
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('staff/staff_m');
		
		// Login check
		$exception_uris = array(
			'staff/user/login', 
			'staff/user/logout'
		);
		if (in_array(uri_string(), $exception_uris) == FALSE) {
			if ($this->staff_m->loggedin() == FALSE) {
				redirect('staff/user/login');
			}
		}
	
	}
}