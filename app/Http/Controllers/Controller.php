<?php

//namespace App\Http\Controllers;
include_once("Account_Classes.php");

class Controller  extends Accounts
{
    public function createAcc($email,$department,$user_name,$pass)
  {
		echo $this->setNewAcc($email,$department,$user_name,$pass);
  }
  public function createDep($department)
  {
		echo $this->setNewDep($department);
  }
  public function getDep($user_name)
  {
		echo $this->getDep($user_name);
  }
  public function makeReq($user_name,$department,$request,$requestor ,$date,$time,$client,$address,$type,$particulars,$amount,$status,$randomCode)
  {
		echo $this->setReq($user_name,$department,$request,$requestor ,$date,$time,$client,$address,$type,$particulars,$amount,$status,$randomCode);
  }
}
