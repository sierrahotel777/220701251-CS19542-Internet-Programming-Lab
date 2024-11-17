 

<?php
$emp_id=$_POST["emp_id"];
$emp_name=$_POST["emp_name"];
$desig=$_POST["desig"];
$dept=$_POST["dept"];
$doj=$_POST["doj"];
$salary=$_POST["salary"];
$conn=new mysqli('localhost','root','','test');
$sql="insert into employee(emp_id,emp_name,desig,dept,doj,salary) values('$emp_id','$emp_name','$desig','$dept','$doj','$salary')";
if($conn->query($sql)==TRUE){
   echo"data insertion successful";
}
else{
   echo"Error:".$sql."<br>".$conn->error;
}
$conn->close();
?>