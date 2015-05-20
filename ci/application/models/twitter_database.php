<?php

class Twitter_database extends CI_Model{

    public function insert_tokens($data){
        $user_id =$this->get_user_id($data['session']);
        $content = array(
                        "user_id"               =>  $user_id,
                        "oauth_token"           =>  $data['access_token'],
                        "oauth_token_secret"    =>  $data['access_token_secret']
                        );
        $this->db->insert('twitter', $content);
        if ($this->db->affected_rows() > 0) {
            return true;
        }

        return false;
    }

    public function get_user_id($data){
        $this->db->select('id');
        $this->db->from('users');
        $condition = "username =" . "'" . $data['username'] . "'";
        $this->db->where($condition);
        $query = $this->db->get();
        $user_id=$query->result_array();

        $user_id = $user_id[0]['id'];
        return $user_id;
    }

     public function get_tokens($data){
         if(isset($data['session'])) {
             $user_id = $this->get_user_id($data["session"]);
             $this->db->select('oauth_token,oauth_token_secret');
             $this->db->from('twitter');
             $condition = "user_id =" . $user_id;
             $this->db->where($condition);
             $query = $this->db->get();
             $tokens = $query->result();
             return $tokens;
         }else{
             return false;
         }
     }


}

?>