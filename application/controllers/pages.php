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
		$this->load->view('pages/'.$page_name.'/'.$page_name.'_page', $data);		
	}
	
	public function timeline($month=1,$override="no")
	{
		$this->load->model('timeline_model');
		
		$data['page_title'] = 'Timeline';
		$data['month'] = $month;
		$data['month_word'] = $this->months[$month];
		$data['timeline_data'] = $this->timeline_model->get_topics($month);
		$data['current_step'] = $this->timeline_model->current_step();
		$data['current_month'] = 3;
		
		$this->load->view('common/header', $data);
		$this->view('timeline', $data);
		$this->load->view('common/footer');
	}
	
	public function timeline_topic_details($topic_id)
	{
		$this->load->model('timeline_model');
		
		$data['page_title'] = 'Timeline';
		$data['topic'] = $this->timeline_model->get_topic($topic_id);
		
		$this->load->view('common/header', $data);
		$this->load->view('pages/timeline/topic_view');
		$this->load->view('common/footer');
	}
	
	public function track($topic_id, $chapter_id)
	{
		$this->load->model('timeline_model');
		$this->timeline_model->track($topic_id, $chapter_id);	
	}
	
}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */