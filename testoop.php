<?php

	class Connection {
	public function __construct() {
    $this->link = new mysqli("localhost", "root", "mysql", "testdb");		
    }
	
	public function connect() {
	return $this->link;
	}
	
}

class query {
	private $con;
	private $link;
	public function __construct()
	{
		$con = new Connection();
		$this->link = $con->connect();
		
		}
	
	function query1()
	{
	$query = "SELECT * from table1";
	$results = mysqli_query($this->link, $query);	
	$assoc = mysqli_fetch_assoc($results);
	print_r($assoc);
		echo "FUNCTION QUERY 1";
	}	
	
	function query2()
	{
	$query = "SELECT * from table1 order by id asc";
	$results = mysqli_query($this->link, $query);	
	$assoc = mysqli_fetch_assoc($results);
	print_r($assoc);
	echo "FUNCTION QUERY 2";
	}	


}

$query = new query;
echo $query->query1();
echo "<br><br>";
echo $query->query2();
?>