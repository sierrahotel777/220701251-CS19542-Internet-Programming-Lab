<?php
$cname=$_POST["cname"];
$atype=$_POST["atype"];
$conn=new mysqli('localhost','root','','test');
$sql="insert into customer(cname)values('$cname')";
if($conn->query($sql)==TRUE)
echo"you are a new customer of our bank";
else
echo"Error".$sql."<br>".$conn->error;
$sql="insert into account(atype)values('$atype')";
if($conn->query($sql)==TRUE)
echo"successfully updated";
else
echo"Error".$sql."<br>".$conn->error;
$sql="select cid from customer ORDER BY cid DESC LIMIT 1";
$result=$conn->query($sql);
while($row=$result->fetch_assoc()){
    echo"your customer id is:".$row['cid'];
    $cid=$row['cid'];
}
if($conn->query($sql)==true)echo"insertion successful";
else echo"insertion error";
$sql="select ano from account ORDER BY ANO DESC LIMIT 1";
$result=$conn->query($sql);
while($row=$result->fetch_assoc()){
    echo"your account no:".$row['ano'];
    $ano=$row['ano'];
}
$sql="update account set cid='$cid'where ano='$ano'";
if($conn->query($sql)==true)echo"updation of cid successful";
else echo"updation of cid failure";
?>
<form action="thank.php">
    <input type="submit" value="ok">
</form>