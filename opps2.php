<?php
class User{
    public $id;
    public $name;
    public $email;
    public $phone;

    function setData($i,$n,$e,$p)
{
    $this-> id=$i;
    $this-> name=$n;
    $this-> email=$e;
    $this-> phone=$p;

    }

    function getData(){
        return "ID: ".$this->id."<br>Name: ".$this->name."<br>Email: ".$this->email."<br>Phone: ".$this->phone;
    }
}
 $obj=new User;
 $obj->setData(1,"John","john@example.com","1234567890");
 echo $obj->getData();
?>