<?php


class Ebook{
    private $Eid;
    private $Ename;
    private $EPublication;
    private $EAuthor;
    private $ECategory;




public function setEid($Eid){
    $this->Eid = $Eid;
}
public function getBisbn(){
    return $this->Eid;
}

public function setEname($Ename){
    $this->Ename=$Ename;
}
public function getEname(){
    return $this->Ename;
}
public function setEPublication($Epublication){
    $this->EPublication=$Epublication;
}
public function getEPublication(){
    return $this->EPublication;
}
public function setEAuthor($EAuthor){
    $this->EAuthor=$EAuthor;
}
public function getEAuthor(){
    return $this->EAuthor;
}
public function setECategory($ECategory){
    $this->ECategory=$ECategory;
}
public function getECategory(){
    return $this->ECategory;
}

}
?>