<?php
$emp_id=$_GET["emp_id"];
$conn=new mysqli('localhost','root','','test');
$sql="select*from employee where emp_id='$emp_id'";
$result=$conn->query($sql);
while($row=$result->fetch_assoc())
{
    echo "EMPLOYEE NAME:".$row['emp_name']."<br>";
    echo "EMPLOYEE DESIGNATION:".$row['desig']."<br>";
    echo "EMPLOYEE DEPARTMENT:".$row['dept']."<br>";
    echo "EMPLOYEE SALARY:".$row['salary']."<br>";
    echo "DATE OF JOINING:".$row['doj']."<br>";
}
?>