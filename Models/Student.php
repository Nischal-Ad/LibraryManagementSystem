<?php

// data members and their getter setter

// data members
class Student{
    private $Sid;
    private $Sname;
    private $Sphone;
      private $Susername;
    private $Semail;
    private $Spassword;
        private $Scpassword;
    private $Saddress;
    private $Simage;
    private $Sgender;
       private $conn;

  function __construct(){
		require_once "service/Config.php";
		$this->conn=Config::getConnection();
	}
    
// publlic getter and setter for privvate data members 
public function setSid($Sid){
    $this->Sid = $Sid;
}
public function getSid(){
    return $this->Sid;
}

public function setSusername($Susername){
    $this->Susername = $Susername;
}
public function getSusername(){
    return $this->Susername;
}

public function setSname($Sname){
    $this->Sname = $Sname;
}
public function getSname(){
    return $this->Sname;
}

public function setSphone($Sphone){
    $this->Sphone = $Sphone;
}
public function getSphone(){
    return $this->Sphone;
}

public function setSemail($Semail){
    $this->Semail = $Semail;
}
public function getSemail(){
    return $this->Semail;
}

public function setSpassword($Spassword){
    $this->Spassword = $Spassword;
}
public function getSpassword(){
    return $this->Spassword;
}

public function setScpassword($Scpassword){
    $this->Scpassword = $Scpassword;
}
public function getScpassword(){
    return $this->Scpassword;
}

public function setSaddress($Saddress){
    $this->Saddress = $Saddress;
}
public function getSaddress(){
    return $this->Saddress;
}

public function setSimage($Simage){
    $this->Simage = $Simage;
}
public function getSimage(){
    return $this->Simage;
}

public function setSgender($Sgender){
    $this->Sgender = $Sgender;
}
public function getSgender(){
    return $this->Sgender;
}


// method 
	function checkStudent(){
        //query
        //username or password matched or not.
        //check.
        $sql="SELECT * FROM student WHERE email='$this->Semail' AND password='$this->Spassword'";
        $result=$this->conn->query($sql);
        return $result;
	}

      public function registerstudent(){
          

    $sql="INSERT INTO student(username,password,email,address,phone,gender,pic) VALUES
          ('$this->Susername','$this->Spassword','$this->Semail','$this->Saddress','$this->Sphone','$this->Sgender','$this->Simage')";
            $result=$this->conn->query($sql);
            return $result;
       }
}


?>