<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Timeline_model extends CI_Model {

	public function get_topics($month, $limit=0, $offset=0)
	{
		$this->db->select('topics.topic_id, topics.topic, modules.`name` AS module_name, modules.`month`, modules.module_id, chapters.`name` AS chapter_name, chapters.chapter_id');
		$this->db->from(TABLE_MODULES);
		$this->db->join(TABLE_CHAPTERS, TABLE_MODULES.'.module_id = '.TABLE_CHAPTERS.'.module_id', 'inner');
		$this->db->join(TABLE_TOPICS, TABLE_CHAPTERS.'.chapter_id = '.TABLE_TOPICS.'.chapter_id', 'inner');
		$this->db->where(TABLE_MODULES.'.month', $month);
		$this->db->order_by(TABLE_CHAPTERS.'.chapter_id', 'ASC');
		
		if ($limit > 0) {
			$this->db->limit($limit, $offset);
		}
		
		$query = $this->db->get();
		
		$data = NULL;
		
		foreach($query->result_array() as $row) {
			$data['modules'][ $row['module_id'] ] = $row['module_name'];
			$data['chapters'][ $row['module_id'] ][ $row['chapter_id'] ] = $row['chapter_name'];
			$data['topics'][ $row['chapter_id'] ][] = $row;
		}

		return $data;
		
	}
	
	public function get_topic($topic_id)
	{
		$this->db->where('topic_id', $topic_id);
		$query = $this->db->get(TABLE_TOPICS);
		
		if ($query->num_rows() > 0) {
			return $query->row_array();
		}
		
		return NULL;
	}
	
	public function topic_done($topic_id)
	{
		$ip_address = $this->input->ip_address();	
		
		$this->db->where('ip_address', $ip_address);
		$query = $this->db->get(TABLE_TRACKING);
		$data = '-empty';
		
		if ($query->num_rows() > 0) {
			$topics = $query->row()->topic_done;
			
			$exp = explode(',', $topics);
			
			if ( in_array($topic_id, $exp) ) {
				$data = '';
			}
		}
		
		return $data;
	}
	
	public function track($topic_id)
	{
		$ip_address = $this->input->ip_address();	
		
		$this->db->where('ip_address', $ip_address);
		$query = $this->db->get(TABLE_TRACKING);
		
		if ($query->num_rows() > 0) {
			
			$row = $query->row();
			$data['topic_done'] = trim( $row->topic_done );
			
			if ($data['topic_done'] == '') {
				$data['topic_done'] = $topic_id;
			} else {
				
				$exp = explode(',', $data['topic_done']);
				
				if ( ! in_array($topic_id, $exp) ) {
					$data['topic_done'] .= ',' . $topic_id;	
				}
				
				
			}
			
			$data['last_updated'] = @time();
			
			$this->db->where('track_id', $row->track_id);
			$this->db->update(TABLE_TRACKING, $data);
			
			
		} else {
			
			$data['topic_done'] = $topic_id;
			$data['ip_address'] = $ip_address;
			$data['date_created'] = @time();
			$data['last_updated'] = @time();
			
			$this->db->insert(TABLE_TRACKING, $data);
			
		}
	}
	
}

/* End of file timeline_model.php */
/* Location: ./application/models/timeline_model.php */