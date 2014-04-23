<?php
class Estate_M extends MY_Model
{
	
	protected $_table_name = 'estate';
	protected $_order_by = 'location';
	public $rules = array(
		'location' => array(
			'field' => 'location', 
			'label' => 'Location', 
			'rules' => 'trim|required'
		), 
		'slug' => array(
			'field' => 'slug', 
			'label' => 'Slug', 
			'rules' => 'trim|required'
                ),
		'description' => array(
			'field' => 'description', 
			'label' => 'Description', 
			'rules' => 'trim|required'
		)
	);

	function __construct ()
	{
		parent::__construct();
	}

	public function get_new ()
	{
		$estate = new stdClass();
		$estate->location = '';
		$estate->slug = '';
		$estate->description = '';
		$estate->photo_url = 'default.jpg';
		$estate->created = date('Y-m-d');
		return $estate;
	}
	
	public function set_created(){
		$this->db->where('created <=', date('Y-m-d'));
	}
	
	public function get_recent($limit = 3){
		
		// Fetch a limited number of recent articles
		$limit = (int) $limit;
		$this->set_created();
		$this->db->limit($limit);
		return parent::get();
	}

}