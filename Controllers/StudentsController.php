<?php
   class StudentsController{
    //         private $student;
  	//    function __construct(){
  	//    	  require_once "Models/Student.php";
    //       $this->student=new Student();
  	//    }
function Index(){
require_once "Views/User/index1.php";
}      

function Home(){
require_once "Views/User/dashboard.php";
}  

function About(){
require_once "Views/User/about.php";
}  
function Borrow(){
require_once "Views/students/borrow.php";
} 

function Request(){
require_once "Views/students/request.php";
} 

function Register(){
require_once "Views/students/register.php";
}    

function Students(){
require_once "Views/students/index.php";
}  

function LoginCheck(){
if(empty($_POST["Semail"]) || empty($_POST["Spassword"]))
{
echo "Enter data in all feild";
}
else
{
     $Semail=$_POST["Semail"];
     $Spassword=$_POST["Spassword"];

     $this->student->setSemail($Semail);
     $this->student->setSpassword($Spassword);

     $result=$this->student->checkStudent();
     $rowcount=mysqli_num_rows($result);
     if($rowcount==0){
         echo "<script> alert ('Login Failed!'); 
           location='/lms/index';  </script>";
        }
        else{
            header('Location: ../user/dashboard');
        }               
}
}

// function RegisterCheck(){
// if(empty($_POST["Semail"]) || empty($_POST["Spassword"]) || empty($_POST["Scpassword"]) || empty($_POST["Susername"]) 
// || empty($_POST["Saddress"]) || empty($_POST["Sphone"]) || empty($_POST["Sgender"]) )
// {
//     echo "Enter data in all feild";
// }
// else{
//     $Spassword=$_POST["Spassword"];
//      $Susername=$_POST["Susername"];
//     $Semail=$_POST["Semail"];
//     $Scpassword=$_POST["Scpassword"];
//     $Saddress=$_POST["Saddress"];
//     $Sphone=$_POST["Sphone"];
//     $Sgender=$_POST["Sgender"];
//     $Simage = $_FILES['Simage'];
    
     
//      if ($Scpassword === $Spassword) {
//     //    $sql="select * from student WHERE (email='$Semail');";
//     //      	  	$conn=new mysqli("localhost","root","","library");
//     //     $res=mysqli_query($conn,$sql);
//     //     if (mysqli_num_rows($res) > 0) {
//     //     // output data of each row
//     //     $row = mysqli_fetch_assoc($res);
//     //     }
//     //           if ($Semail==$row['email'])
//     //     {
      
//     //         echo "Email already exists";
//     //     }
//     //     else{
    
//        $sql="select * from student WHERE (email='$Semail');";
//          	  	$conn=new mysqli("localhost","root","","library");
//         $res=mysqli_query($conn,$sql);
//         if (mysqli_num_rows($res) > 0) {
//         // output data of each row
//         $row = mysqli_fetch_assoc($res);
//         }
//         if ($Semail==$row['email'])
//         {
//             echo "Email already exists";
//         }
//         else{
    
//     //    $sql="select * from student WHERE (email='$Semail');";
//     //      	  	$conn=new mysqli("localhost","root","","library");
//     //     $res=mysqli_query($conn,$sql);
//     //     if (mysqli_num_rows($res) > 0) {
//     //     // output data of each row
//     //     $row = mysqli_fetch_assoc($res);
//     //     }
//     //     if ($Semail==$row['email'])
//     //     {
//     //         echo "Email already exists";
//     //     }
//     //     else{
    
//     //    $sql="select * from student WHERE (email='$Semail');";
//     //      	  	$conn=new mysqli("localhost","root","","library");
//     //     $res=mysqli_query($conn,$sql);
//     //     if (mysqli_num_rows($res) > 0) {
//     //     // output data of each row
//     //     $row = mysqli_fetch_assoc($res);
//     //     }
//     //     if ($Semail==$row['email'])
//     //     {
//     //         echo "Email already exists";
//     //     }
//     //     else{
    
//     print_r($Simage);
// $filename = $Simage['name'];
// // $filepath = $Limage['tmp_name'];
// // $fileerror = $Limage['error'];

// // if($fileerror == 0){

// $destfile = "Images/Student/".$filename;
// if(move_uploaded_file($Simage['tmp_name'], $destfile)){
// echo "successfully";
// }
// else{
//     echo 'failed';
// }

// $Simage = "/lms/views/Images/Student/".$filename;

// // $insertquery = "insert into menu(name, name1, stock, pic) values('$name', '$name1', '$stock', '$image')";

// // $query = mysqli_query($con, $insertquery);
// // }

//        $this->student->setSusername($Susername);
//      $this->student->setSemail($Semail);
//      $this->student->setSpassword($Spassword);
//             //    $this->student->Scpassword=$Scpassword;
//                  $this->student->setSaddress($Saddress);
//           $this->student->setSphone($Sphone);
//            $this->student->setSgender($Sgender);
//                    $this->student->setSimage($Simage);

//                     $result=$this->student->registerstudent();
//                 if($result==TRUE){
//                 	echo "<script>   location='Register';
//                     alert ('Inserted Successfully!'); 
 
//                      </script>";
//                 }else{
//     //             	echo "<script> alert ('Failed to Insert!'); 
//     //   location='Register';
//     //                  </script>";
//                 }
                
// }
        
// }
   
// else{
//     echo 'password incorrect';
// }
        
// }
// // else{
//     // echo 'email id is already in use';
// }


function RegisterCheck(){
if(empty($_POST["Semail"]) || empty($_POST["Spassword"]) || empty($_POST["Scpassword"]) || empty($_POST["Susername"]) 
|| empty($_POST["Saddress"]) || empty($_POST["Sphone"]) || empty($_POST["Sgender"]))
{
    echo "Enter data in all feild";
}
else{
     $Susername=$_POST["Susername"];
    $Semail=$_POST["Semail"];
     $Spassword=$_POST["Spassword"];
     $Scpassword=$_POST["Scpassword"];
     $Saddress=$_POST["Saddress"];
     $Sphone=$_POST["Sphone"];
     $Sgender=$_POST["Sgender"];
     $Simage = $_FILES['Simage'];

if ($Scpassword === $Spassword) {

       $sql="select * from student WHERE (email='$Semail');";
         	  	$conn=new mysqli("localhost","root","","library");
        $res=mysqli_query($conn,$sql);
        if (mysqli_num_rows($res) > 0) {
        // output data of each row
        $row = mysqli_fetch_assoc($res);
        }
        if ($Semail==$row['email'])
        {
            echo "Email already exists";
        }
        else{
    
    print_r($Simage);
$filename = $Simage['name'];
// $filepath = $Limage['tmp_name'];
// $fileerror = $Limage['error'];

// if($fileerror == 0){

$destfile = "Images/Student/".$filename;
if(move_uploaded_file($Simage['tmp_name'], $destfile)){
echo "successfully";
}
else{
    echo 'failed';
}

$Simage = "/lms/views/Images/Student/".$filename;

// $insertquery = "insert into menu(name, name1, stock, pic) values('$name', '$name1', '$stock', '$image')";

// $query = mysqli_query($con, $insertquery);
// }

      $this->student->setSusername($Susername);
     $this->student->setSemail($Semail);
     $this->student->setSpassword($Spassword);
            //    $this->student->Scpassword=$Scpassword;
                 $this->student->setSaddress($Saddress);
          $this->student->setSphone($Sphone);
           $this->student->setSgender($Sgender);
                   $this->student->setSimage($Simage);

                    $result=$this->student->registerstudent();
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