<?PHP
	class Pengguna_M extends CI_Model
	{
		//Property

		private $username;
		private $password;
		private $status;
		private $email;
		private $telp;
		//Method Setter - Mutator

		public function set_username($value)
		{
			$this->username = $value;
		}

		public function set_password($value)
		{
			$this->password = $value;
		}

		public function set_status($value)
		{
			$this->status = $value;
		}
		public function set_email($value)
		{
			$this->email = $value;
		}
		public function set_telp($value)
		{
			$this->telp = $value;
		}
		//Method Getter - Aksesor

		public function get_username()
		{
			return $this->username;
		}

		public function get_password()
		{
			return $this->password;
		}

		public function get_status()
		{
			return $this->status;
		}
		public function get_email()
		{
			return $this->email;
		}
		public function get_telp()
		{
			return $this->telp;
		}
		//Method

		public function view_by_username_password()
		{
			$sql = "SELECT * FROM tbl_user
					WHERE username='".$this->get_username()."' AND
					password='".md5($this->get_password())."'";

			return $this->db->query($sql);
		}

		public function view_by_username()
		{
			$sql = "SELECT * FROM tbl_user
					WHERE username='".$this->get_username()."'";

			return $this->db->query($sql);
		}

		public function insert()
		{
			$sql = "INSERT into tbl_user (username,password,status,email,telp) VALUES('".$this->get_username()."',
			'".md5($this->get_password())."','pengguna','".$this->get_username()."','".$this->get_telp()."')";

			$this->db->query($sql);
		}
	}
