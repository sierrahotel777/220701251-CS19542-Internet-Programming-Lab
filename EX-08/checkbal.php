<?php
$ano=$_POST["ano"];
$conn=new mysqli('localhost','root','','test');
$sql="select balance from account where ano='$ano'";
$result=$conn->query($sql);
while($row=$result->fetch_assoc()){
    $bal=$row['balance'];
}
echo"your balance is:".$bal;
?>
<form action="thank.php">
    <input type="submit" value="OK">
</form>