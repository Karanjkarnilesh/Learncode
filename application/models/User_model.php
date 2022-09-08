<?php
class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->tbl_users = $this->db->dbprefix('users');
    }

    public function add(array $args)
    {
        if(isset($args))
        {
          return  $this->db->insert($this->tbl_users,$args);
        }

    }
    public function getuser($args)
    {
       
        if ($args) {
			$this->db->where($args);
		}

		$result =  $this->db->get($this->tbl_users);

		if ($result) {
            return $result->result();
           
		}
		return array();
    }
}
