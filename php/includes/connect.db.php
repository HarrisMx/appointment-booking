<?php 
	class Database_Connection{
		protected $db_connect;
		public $db_user = 'root';
		public $db_name = 'hospital';
		public $db_password = '';
		public $db_host = 'localhost';

		function connect(){
			try{
				$this->db_connect = mysqli_connect($this->db_host , $this->db_user , $this->db_password , $this->db_name);
				return $this->db_connect;
			}catch(Exception $e){
				return $e->getMessage();
			}
		}
	}
?>