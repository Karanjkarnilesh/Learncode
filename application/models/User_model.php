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
    public function getuser($where=array())
    {
        if(empty($where))
        {
            return array();
        }
        $this->db->where($where);
        $results=$this->db->get($this->tbl_users);
        return ($results->result());
       

    }
}
