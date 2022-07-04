<?php
   class AdminController{
    //  private $librarian;
  	// function __construct(){
  	//    	  require_once "models/Librarian.php";
    //       $this->librarian=new Librarian();
  	//    }
      

function Index(){
require_once "Views/admin/index.php";
}        

function Home(){
require_once "Views/admin/dashboard.php";
}    

function Register(){
require_once "Views/admin/register.php";
}    

function Details(){
require_once "Views/admin/details.php";
} 

function LoginCheck(){
if(empty($_POST["Lemail"]) || empty($_POST["Lpassword"]))
{
echo "Enter data in all feild";
}
else
{
     $Lemail=$_POST["Lemail"];
     $Lpassword=$_POST["Lpassword"];

     $this->librarian->setLemail($Lemail);
     $this->librarian->setLpassword($Lpassword);

     $result=$this->librarian->CheckLibrarian();
     $rowcount=mysqli_num_rows($result);
     if($rowcount==0){
         echo "<script> alert ('Login Failed!'); 
           location='/lms/admin/index';  </script>";
        }
        else{
            header('Location: ../admin/home');
        }               
}
}

function RegisterCheck(){
if(empty($_POST["Lemail"]) || empty($_POST["Lpassword"]) || empty($_POST["Lcpassword"]) || empty($_POST["Lusername"]) 
|| empty($_POST["Laddress"]) || empty($_POST["Lphone"]) || empty($_POST["Lgender"]) || empty($_POST["Limage"]))
{
    echo "Enter data in all feild";
}
else{
     $Lusername=$_POST["Lusername"];
    $Lemail=$_POST["Lemail"];
     $Lpassword=$_POST["Lpassword"];
     $Lcpassword=$_POST["Lcpassword"];
     $Laddress=$_POST["Laddress"];
     $Lphone=$_POST["Lphone"];
     $Lgender=$_POST["Lgender"];
     $Limage = $_FILES['Limage'];

if ($Lcpassword === $Lpassword) {

       $sql="select * from librarian WHERE (email='$Lemail');";
         	  	$conn=new mysqli("localhost","root","","library");
        $res=mysqli_query($conn,$sql);
        if (mysqli_num_rows($res) > 0) {
        // output data of each row
        $row = mysqli_fetch_assoc($res);
        }
        if ($Lemail==$row['email'])
        {
            echo "Email already exists";
        }
        else{
    
    print_r($Limage);
$filename = $Limage['name'];
// $filepath = $Limage['tmp_name'];
// $fileerror = $Limage['error'];

// if($fileerror == 0){

$destfile = "Images/Admin/".$filename;
if(move_uploaded_file($Limage['tmp_name'], $destfile)){
echo "successfully";
}
else{
    echo 'failed';
}

$Limage = "/lms/views/Images/Admin/".$filename;

// $insertquery = "insert into menu(name, name1, stock, pic) values('$name', '$name1', '$stock', '$image')";

// $query = mysqli_query($con, $insertquery);
// }

      $this->librarian->setLusername($Lusername);
     $this->librarian->setLemail($Lemail);
     $this->librarian->setLpassword($Lpassword);
            //    $this->librarian->Lcpassword=$Lcpassword;
                 $this->librarian->setLaddress($Laddress);
          $this->librarian->setLphone($Lphone);
           $this->librarian->setLgender($Lgender);
                   $this->librarian->setLimage($Limage);

                    $result=$this->librarian->registeradmin();
                if($result==TRUE){
                	echo "<script> alert ('Inserted Successfully!'); 
   location='Register';
                     </script>";
                }else{
                	echo "<script> alert ('Failed to Insert!'); 
      location='Register';
                     </script>";
                }
                
}
        
        }
   
else{
    echo 'password incorrect';
}
        
}
// else{
//     echo 'email id is already in use';
// }
}
}


?>