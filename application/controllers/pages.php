<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {
	
	private $months = NULL;
	
	public function __construct()
	{
		parent::__construct();	
		$this->months = array(
			1 => 'one',
			2 => 'two',
			3 => 'three',
			4 => 'four',
			5 => 'five',
			6 => 'six',
			7 => 'seven',
			8 => 'eight',
			9 => 'nine',
			10 => 'ten',
			11 => 'eleven',
			12 => 'twelve'
		);
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	protected function view($page_name="home", $data)
	{
		$this->load->view('pages/'.$page_name.'_page', $data);		
	}
	
	public function timeline($month=1)
	{
		$data['page_title'] = 'Timeline';
		$data['month'] = $month;
		$data['month_word'] = $this->months[$month];
		
		$this->load->view('common/header', $data);
		$this->view('timeline', $data);
		$this->load->view('common/footer');
	}
	
}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */