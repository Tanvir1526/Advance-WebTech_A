<?php   
 class Student 
 {
    private $id;
    private $name;

	function __constructor($id,$name)
	{
		$this->id=$id;
		$this->name=$name;
	}

	function Set_id($id)
	{
		$this->id=$id;
	}
	function Get_id()
	{
		return $this->id;
	}

	function Set_name($name)
	{
		$this->name=$name;
	}
	function Get_name()
	{
		return $this->name;
	}

	function Student_Details()
	{
		echo"Student ID : ".$this->Get_id()."<br>";
		echo"Student Name : ".$this->Get_name()."<br>";

	}
    
 }
 class Department
 {
    private $id;
    private $DeptName;
	private $student=[];

	function __constructor($id,$DeptName)
	{
		$this->id=$id;
		$this->DeptName=$DeptName;
	}
	
	function Set_id($id)
	{
		$this->id=$id;
	}
	function Get_id()
	{
		return $this->id;
	}

	function Set_name($DeptName)
	{
		$this->DeptName=$DeptName;
	}
	function Get_name()
	{
		return $this->DeptName;
	}

	function Add_Student(Student $student)
	{
		$this->student[]=$student;
		
	}

	public function PrintStudent()
	{
		foreach($this->student as $student)
		{
			$student->Student_Details();
		}
	}

 }
	$st1=new student("1","Tanvir");
	$st2=new student("2","Talha");
	$st3=new student("3","hossain");

	$dep1= new Department ("1","CSE");
	$dep2= new Department ("1","EEE");

	$dep1->Add_Student($st1);
	$dep1->Add_Student($st2);

	$dep1->PrintStudent();

?>