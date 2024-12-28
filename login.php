<?php 
$Name= $_POST['Name'];
$Email=$_post['Email'];
$Password=$_post['Password']

$conn =new mysqli('localhost','root','','test')
if($_conn->connect_error){
    dioe('ConnectionFailed :'.$conn->connect_error');
else{
$stmt = $conn->prepare("insert into login(Name, Email, Password)
value(?,?,?)");
$stmt->bind_param("sss",$Name,$Email,$Password);
$stmt->execute();
echo "Login successfully...";
$stmt->close();
$conn->close();
}

?>