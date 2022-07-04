<?php

class Book{
    private $Bisbn;
    private $Bname;
    private $Bpublication;
    private $Bcategory;
    private $Bstock;
    private $Bprice;
    private $Bauthor;


public function setBisbn($Bisbn){
    $this->Bisbn = $Bisbn;
}
public function getBisbn(){
    return $this->Bisbn;
}

public function setBname($Bname){
    $this->Bname = $Bname;
}
public function getBname(){
    return $this->Bname;
}

public function setBpublication($Bpublication){
    $this->Bpublication = $Bpublication;
}
public function getBpublication(){
    return $this->Bpublication;
}

public function setBcategory($Bcategory){
    $this->Bcategory = $Bcategory;
}
public function getBcategory(){
    return $this->Bcategory;
}

public function setBstock($Bstock){
    $this->Bstock = $Bstock;
}
public function getBstock(){
    return $this->Bstock;
}

public function setBprice($Bprice){
    $this->Bprice = $Bprice;
}
public function getBprice(){
    return $this->Bprice;
}

public function setBauther($Bauthor){
    $this->Bauthor = $Bauthor;
}
public function getBauthor(){
    return $this->Bauthor;
}
}
?>