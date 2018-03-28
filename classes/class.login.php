<?php
/**
* Login
*/
class Login {
	
	protected $connection;
	
	public function __construct() {
		$host_name = 'localhost';
		$user_name = 'root';
		$password = 'Mishuk121122';
		$db_name = 'db_blog';
		$this->connection = mysqli_connect($host_name, $user_name, $password, $db_name);
		if(!$this->connection)
			die('Connection Faild '. mysql_error($this->connection));
	}

	public function admin_login_check($data) {
		$email = $data['email'];
		$password = md5($data['password']);
		$sql = "SELECT * FROM tbl_admin WHERE email_address = '$email' AND password = '$password'";
		$query_result = mysqli_query($this->connection, $sql);
		$admin_info = mysqli_fetch_assoc($query_result);
		
		if ($admin_info) {
			header('Location: dashboard.php');
		} else {
			header('Location: index.php');
		}
	}
}