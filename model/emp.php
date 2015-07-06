<?php
class emp {
	private $id;
	private $name;
	private $email;
	private $grade;
	private $salary;
	
	public function getId(){
		return $this->id;
	}
	public function getName(){
		return $this->name;
	}
	public function getEmail(){
		return $this->email;
	}
	public function getGrade(){
		return $this->grade;
	}
	public function getSalary(){
		return $this->salary;
	}
	public function setId($id){
		$this->id = $id;
	}
	public function setName($name){
		$this->name = $name;
	}
	public function setEmail($email){
		$this->email = $email;
	}
	public function setGrade($grade){
		$this->grade = $grade;
	}
	public function setSalary($salary){
		$this->salary = $salary;
	}
	
}

?>