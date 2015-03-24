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
	
}

/* End of file timeline_model.php */
/* Location: ./application/models/timeline_model.php */