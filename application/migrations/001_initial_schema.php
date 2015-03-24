<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Initial_schema extends CI_Migration {
  
  public function up() {
    
    /**
     * Remove tables if exists
     */
    $this->dbforge->drop_table(TABLE_MODULES);
    $this->dbforge->drop_table(TABLE_CHAPTERS);
    $this->dbforge->drop_table(TABLE_TOPICS);
    $this->dbforge->drop_table(TABLE_TRACKING);
    
    /**
     * Create 'modules' table
     */
    $this->dbforge->add_key('module_id', TRUE);
    
    $modules = array(
      'module_id' => array(
          'type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE, 'auto_increment' => TRUE 
      ),
      'month' => array(
          'type' => 'int', 'constraint' => 11, 'null' => FALSE
      ),
      'name' => array(
          'type' => 'VARCHAR', 'constraint' => 255, 'null' => FALSE
      ),
      'date_created' => array(
          'type' => 'TEXT', 'null' => FALSE
      ),
      'last_updated' => array(
          'type' => 'TEXT', 'null' => FALSE
      )
    );
    
    $this->dbforge->add_field($modules);
    $this->dbforge->create_table(TABLE_MODULES);
    
    /**
     * Create 'chapters' table
     */
    $this->dbforge->add_key('chapter_id', TRUE);
    
    $chapters = array(
      'chapter_id' => array(
          'type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE, 'auto_increment' => TRUE 
      ),
      'module_id' => array(
          'type' => 'INT', 'constraint' => 11, 'null' => FALSE
      ),
      'name' => array(
          'type' => 'VARCHAR', 'constraint' => 255, 'null' => FALSE
      ),
      'date_created' => array(
          'type' => 'TEXT', 'null' => FALSE
      ),
      'last_updated' => array(
          'type' => 'TEXT', 'null' => FALSE
      )
    );
    
    $this->dbforge->add_field($chapters);
    $this->dbforge->create_table(TABLE_CHAPTERS);
	
	
	/**
     * Create 'topics' table
     */
    $this->dbforge->add_key('topic_id', TRUE);
    
    $topics = array(
      'topic_id' => array(
          'type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE, 'auto_increment' => TRUE 
      ),
      'chapter_id' => array(
          'type' => 'INT', 'constraint' => 11, 'null' => FALSE
      ),
      'topic' => array(
          'type' => 'TEXT', 'null' => FALSE
      ),
      'date_created' => array(
          'type' => 'TEXT', 'null' => FALSE
      ),
      'last_updated' => array(
          'type' => 'TEXT', 'null' => FALSE
      )
    );
    
    $this->dbforge->add_field($topics);
    $this->dbforge->create_table(TABLE_TOPICS);
	
	
	/**
     * Create 'tracking' table
     */
    $this->dbforge->add_key('track_id', TRUE);
    
    $tracking = array(
      'track_id' => array(
          'type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE, 'auto_increment' => TRUE 
      ),
      'ip_address' => array(
          'type' => 'VARCHAR', 'constraint' => 20, 'null' => FALSE
      ),
      'topic_done' => array(
          'type' => 'TEXT', 'null' => TRUE
      ),
      'current_topic' => array(
          'type' => 'TEXT', 'null' => TRUE
      ),
      'date_created' => array(
          'type' => 'TEXT', 'null' => FALSE
      ),
      'last_updated' => array(
          'type' => 'TEXT', 'null' => FALSE
      )
    );
    
    $this->dbforge->add_field($tracking);
    $this->dbforge->create_table(TABLE_TRACKING);
    
    $this->insert_temporary_datas();
  }
  
  public function insert_temporary_datas()
  {
		$time = @time();
		
		$contents = array(
			array(
				'name' => 'MINDSET Program',
				'month' => '1',
				'date_created' => $time,
				'last_updated' => $time
			)
		);
		
		$this->db->insert_batch(TABLE_MODULES, $contents);
		
		$contents = array(
			array(
				'module_id' => 1,
				'name' => 'Introduction',
				'date_created' => $time,
				'last_updated' => $time
			),
			array(
				'module_id' => 1,
				'name' => 'Mind-Body',
				'date_created' => $time,
				'last_updated' => $time
			),
			array(
				'module_id' => 1,
				'name' => 'Nutrition',
				'date_created' => $time,
				'last_updated' => $time
			)
		);
		
		$this->db->insert_batch(TABLE_CHAPTERS, $contents);
		
		
		$contents = array(
			array(
				'chapter_id' => 1,
				'topic' => 'Stop treating symptoms <strong>CURE</strong> the cause.',
				'date_created' => $time,
				'last_updated' => $time
			),
			array(
				'chapter_id' => 1,
				'topic' => 'Mindset Matters:</strong> Fixed Mindset and Growth Mindset',
				'date_created' => $time,
				'last_updated' => $time
			),
			array(
				'chapter_id' => 2,
				'topic' => '<strong>Stress:</strong>  About stress and the body',
				'date_created' => $time,
				'last_updated' => $time
			),
			array(
				'chapter_id' => 2,
				'topic' => '<strong>Stress Management:</strong>  The five Bs',
				'date_created' => $time,
				'last_updated' => $time
			),
			array(
				'chapter_id' => 2,
				'topic' => '<strong>Exercise:</strong>  When you feel stress, get physical.',
				'date_created' => $time,
				'last_updated' => $time
			),
			array(
				'chapter_id' => 3,
				'topic' => 'Stop treating symptoms <strong>CURE</strong> the cause.',
				'date_created' => $time,
				'last_updated' => $time
			),
			array(
				'chapter_id' => 3,
				'topic' => 'Mindset Matters:</strong> Fixed Mindset and Growth Mindset',
				'date_created' => $time,
				'last_updated' => $time
			)
		);
		
		$this->db->insert_batch(TABLE_TOPICS, $contents);
  }
  
  public function down() {
    $this->dbforge->drop_table(TABLE_MODULES);
    $this->dbforge->drop_table(TABLE_CHAPTERS);
    $this->dbforge->drop_table(TABLE_TOPICS);
    $this->dbforge->drop_table(TABLE_TRACKING);
  }
  
}

/* End of file 001_initial_schema.php */
/* Location: ./application/migrations/001_initial_schema.php */