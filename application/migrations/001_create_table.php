<?php
class Migration_Create_table extends CI_Migration {
    public function __construct(){
        parent::__construct();
    }
    public function up(){
        $this->dbforge->add_field(array(
            'data_id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'user_name' => array(
                'type' => 'VARCHAR',
            ),
            'modified_date' => array(
                'type' => 'TEXT',
            ),
        ));
        $this->dbforge->add_key('data_id', true);
        $this->dbforge->create_table('user_dt');
    }
    public function down(){
        $this->dbforge->drop_table('user_dt');
    }
}