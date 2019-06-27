<?php

namespace application\lib;
use PDO;
class Db
{

	protected $db;
	
	public function __construct(){
		$config = require 'application/config/db.php';

		$this->db = new PDO('mysql:host='.$config['host'].';dbname='.$config['name'].'', $config['user'], $config['password']);
	}

	public function query($sql, $params = []){

		$stmt = $this->db->prepare($sql);		

		if(!empty($params)){
			foreach ($params as $key => $value) {
				// $key = 'id'
				// $value = 2
				// $stmt->bindValue(':id', 2);
				$stmt->bindValue(':'.$key,$value);
			}
		}

		$stmt->execute();

		return $stmt;
	}

	public function row($sql, $params = []){
		$result = $this->query($sql,$params);
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}

	public function column($sql, $params = []){

		$result = $this->query($sql,$params);
			
		return $result->fetchColumn();	
	}
}