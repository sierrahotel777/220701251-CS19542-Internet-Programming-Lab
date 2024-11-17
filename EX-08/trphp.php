<?php
$ano=$_POST["ano"];
$tt=$_POST["tt"];
$tamt=$_POST["tamt"];
$bal;
$conn=new mysqli('localhost','root','','test');
$sql="select balance from account where ano='$ano'";
$result=$conn->query($sql);
while($row=$result->fetch_assoc())
{
    $bal=$row['balance'];
}
if($tt=="d"){
$bal=$bal+$tamt;
echo"DEPOSIT SUCCESSFUL!";
}
if($tt=="w")
{
    if($tamt<$bal){
    $bal=$bal-$tamt;
echo"WITHDRAWAL SUCCESSFUL";
    }
else 
echo"INSUFFICIENT BALANCE!";
}
$sql="update account set balance='$bal'where ano='$ano'";
if($conn->query($sql)==true)echo"balance updated!";
else echo"transaction failed!";
?>
<form action="thank.php">
    <input type="submit" value="OK">
</form>