<?php
include_once("connect.php");

class Accounts extends db
{
	public function setNewAcc($email,$department,$user_name,$pass)
    {
		$sql= "INSERT INTO lyco_account(email,user_name,pass,department) VALUES (?,?,?,?)";
		$stmt = $this->db_connect()->prepare($sql);
		$stmt->execute([$email,$user_name,$pass,$department]);
		$results = "<script> alert ('Account was successfully created')</script>";
		return $results;
	}
	public function setNewDep($department)
    {
		$sql= "INSERT INTO departments(name) VALUES (?)";
		$stmt = $this->db_connect()->prepare($sql);
		$stmt->execute([$department]);
	}
	public function getDep($user_name)
	{
		$sql = "SELECT department FROM lyco_account WHERE user_name = ?";
		$stmt = $this->db_connect()->prepare($sql);
		$stmt->execute([$user_name]);
		$results = $stmt->fetchAll();
		return $results;
	}
	public function setReq($user_name,$department,$request,$requestor ,$date,$time,$client,$address,$type,$particulars,$amount,$status,$randomCode)
	{
		$sql = "INSERT INTO requests_tbl (user_name,Department,request,requestor,date,time,client,address,type,particulars,amount,status,code)
		VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$stmt = $this->db_connect()->prepare($sql);
		$stmt->execute([$user_name,$department,$request,$requestor ,$date,$time,$client,$address,$type,$particulars,$amount,$status,$randomCode]);
		$results = "<script> alert ('Request has been sent. Please wait for about 10-20 mins.')</script>";
		return $results;
	}
}
?>