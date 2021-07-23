<?php
class perangkingan{
	
	private $conn;
	private $table_name = "alternatif";
	
	
	public function __construct($db){
		$this->conn = $db;
	}
	
	
	function readAll(){

		$query = "SELECT * FROM ".$this->table_name." ORDER BY hasil_alternatif DESC";
		$stmt3 = $this->conn->prepare($query);
		$stmt3->execute();
		
		return $stmt3;
	}
	
		
	}
	
		
	

?>