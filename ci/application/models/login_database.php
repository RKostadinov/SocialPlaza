<?php

	Class Login_Database extends CI_Model {

		// Insert registration data in database
		public function registration_insert($data) {

			// Query to check whether username already exist or not
			$condition = "username =" . "'" . $data['username'] . "'";
			$this->db->select('*');
			$this->db->from('users');
	        		$this->db->where($condition);
			$this->db->limit(1);
			$query = $this->db->get();
			if ($query->num_rows() == 0) {

				// Query to insert data in database
				$this->db->insert('users', $data);
				if ($this->db->affected_rows() > 0) {
					return true;
				}
			} else {
				return false;
			}
		}

        public function check_email($data){
            // Query to check whether email already exist or not
            $condition = "email_value =" . "'" . $data['email_value'] . "'";
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where($condition);
            $this->db->limit(1);
            $query = $this->db->get();
            if ($query->num_rows() == 0) {
                return false;
            } else {
                return true;
            }
        }
        public function confirm($code){
            $data = array('verified' => NULL);
            $this->db->where('verified', $code);
            $str = $this->db->update('users', $data);


            if ($str == TRUE) {
                return true;
            } else {
                return false;
            }
        }


		// Read data using username and password
		public function login($data) {
            $password = do_hash($data['password'], 'md5');
			$condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $password . "'";
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where($condition);
			$this->db->limit(1);
			$query = $this->db->get();

			if ($query->num_rows() == 1) {
				return true;
			} else {
				return false;
			}
		}

        public function is_verified($data){
            $condition = "username =" . "'" . $data['username'] . "' AND " . "verified IS NULL";
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where($condition);
            $query = $this->db->get();

            if ($query->num_rows() == 1) {
                return true;
            } else {
                return false;
            }

        }
		// Read data from database to show data in admin page
		public function read_user_information($sess_array) {

			$condition = "username =" . "'" . $sess_array['username'] . "'";
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where($condition);
			$this->db->limit(1);
			$query = $this->db->get();

			if ($query->num_rows() == 1) {
				return $query->result();
			} else {
				return false;
			}
		}
	}

?>