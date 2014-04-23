<?php
class Estate extends Staff_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model("staff/estate_m");
        $this->data['recent_estates'] = $this->estate_m->get_recent();
    }

   public function index ()
	{
		// Fetch all estates
                $this->load->helper("form");
		$this->data['estates'] = $this->estate_m->get();
		
		// Load view
		$this->data['subview'] = 'staff/estate/index';
		$this->load->view('staff/_layout_main', $this->data);
	}

	public function edit ($id = NULL)
	{   
            
                $config = array(
                    'upload_path' => 'ns_up_bp_gallery_',
                    'allowed_types' => 'gif|jpg|png',
                    'max_size' => 250,
                    'max_width' => 1920,
                    'max_heigh' => 1080,
                );
                //$this->load->library('upload', $config);
                //$this->load->helper('form');
		// Fetch a estate or set a new one
		if ($id) {
			$this->data['estate'] = $this->estate_m->get($id);
			count($this->data['estate']) || $this->data['errors'][] = 'estate could not be found';
		}
		else {
			$this->data['estate'] = $this->estate_m->get_new();
		}
		
		// Set up the form
                //$this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');
                $check_file_upload = FALSE;
                if (isset($_FILES['photo_url']['error']) && ($_FILES['photo_url']['photo_url'] != 4)) {
                    $check_file_upload = TRUE;
                }
		$rules = $this->estate_m->rules;
		$this->form_validation->set_rules($rules);
		//&& ($check_file_upload && !$this->upload->do_upload('photo_url'))
		// Process the form
		if ($this->form_validation->run() == TRUE ) {
			$data = $this->estate_m->array_from_post(array(
				'location', 
				'slug', 
				'description',
                                'created'
			));
			$this->estate_m->save($data, $id);
			redirect('staff/estate');
		}
		
		// Load the view
		$this->data['subview'] = 'staff/estate/edit';
		$this->load->view('staff/_layout_main', $this->data);
	}

	public function delete ($id)
	{
		$this->estate_m->delete($id);
		redirect('staff/estate');
	}
}