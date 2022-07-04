<?php
   
   //route management
   //No matter user requesting pages. Request must arrive here.
  
   //url
   //base url+  /Student/Report 
   //first word denotes Controller and 
   // second word denotes Method inside controller.

   //getting url
   
   $url="";
   if(empty($_GET["url"])) {
      //depends on your choice
      //which page you want to open at startup
      $url="Students/Index";
   }
   else{
      $url=$_GET["url"];
   }
   
   $url=explode('/', $url);
   //printring after separation of controller and method.
   //print_r($url);
 
   	$controller=$url[0]."Controller";
   	$method=$url[1];

   	//calling the function of controller
  

   	// try {
         require_once 'controllers/'.$controller.'.php';

         $obj = new $controller();
         $obj->$method();

      // } catch(Error $ex) {
         //var_dump($ex);
      //    echo "Not found: 404 page implementation goes here code is running..";
      // }
   


   //while linking files in another file
   //we can use three approach

?>