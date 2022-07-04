<?php
   class HeadController{
         private $admin;
  	   function __construct(){
  	   	  require_once "models/Admin.php";
          $this->admin=new Admin();
  	   }
      
function Index(){
require_once "Views/head/index.php";
}  

function Home(){
require_once "Views/head/home.php";
} 

function Ebooks(){
require_once "Views/Books/head/ebooks.php";
}  

function Pbooks(){
require_once "Views/Books/head/pbooks.php";
} 

function LoginCheck(){

if(empty($_POST["Aemail"]) || empty($_POST["Apassword"]))
{
echo "Enter data in all feild";
}
else
{

            $Aemail=$_POST["Aemail"];
            $Apassword=$_POST["Apassword"];

            $this->admin->setAemail($Aemail);
             $this->admin->setApassword($Apassword);

             $result=$this->admin->CheckAdmin();
              $rowcount=mysqli_num_rows($result);
              if($rowcount==0){
                echo "<script> alert ('Login Failed!'); 
                     location='/lms/head/index';
                     </script>";
              }else{
                 header('Location: ../head/home');
              }

       
}

}
   }
   ?>