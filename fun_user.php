<?php  
$sq="";
$ans="";
$pwd="";
$msg="";
function getQues($uid)
{
    global $sq,$msg;
    $conn=mysql_connect("localhost","root","");
    mysql_select_db("db1");
    $sql="select sq from user where eid='$uid'";
    $result=mysql_query($sql,$conn);
    if($row=mysql_fetch_array($result,MYSQL_BOTH))
    {
        $sq=$row[0];
    }
    else
        $msg="Not registered";
        mysql_close($conn);
}
function getPwd($uid, $ans)
{
    global $pwd,$msg;
     $conn=mysql_connect("localhost","root","");
    mysql_select_db("db1");
    $sql="select pwd from user where eid='$uid' and ans='$ans'";
    $result=mysql_query($sql,$conn);
    if($row=mysql_fetch_array($result,MYSQL_BOTH))
    {
        $msg="1";
    }
    else
        $msg="Wrong Answer.";
        mysql_close($conn);
}
function subPwd($uid, $npwd)
{
    global $msg;
    $conn=mysql_connect("localhost","root","");
    mysql_select_db("db1");
    $sql="update user set pwd='$npwd' where eid='$uid'";
    $row=mysql_query($sql,$conn);
		if($row>0)
			$msg= "<font size=7 color=green>Password Changed</font>";
		else 
			$msg= "<font size=7 color=red>Unsuccessful.</font>";
		mysql_close($conn);
}
function addUser($uid,$name,$add,$mob,$gender,$dob,$eid,$pwd,$sq,$ans,$atype)
	{
     global $msg;
    $conn=mysql_connect("localhost","root","");
    mysql_select_db("db1");
    $sql="INSERT INTO `user`(`uid`, `name`, `add`, `mob`, `gender`, `dob`, `eid`, `pwd`, `sq`, `ans`, `atype`) VALUES ('$uid','$name','$add','$mob','$gender','$dob','$eid','$pwd','$sq','$ans','$atype')";
    $row=mysql_query($sql,$conn);
		if($row>0)
			return "<font size=7 color=green>Added succ.</font>";
		else 
			return "<font size=7 color=red>User ID exists.</font>";
		mysql_close($conn);
}
function newuser()
	{
    $conn=mysql_connect("localhost","root","");
    mysql_select_db("db1");
		$sql="select max(uid)+1 as newuid from user";
		$result=mysql_query($sql,$conn);
		$newuid=10001;
		if($row=mysql_fetch_array($result,MYSQL_BOTH))
		{
            if($row[0]!="")
			$newuid=$row[0];
			
		}
		mysql_close($conn);
		return $newuid;
	}
?>