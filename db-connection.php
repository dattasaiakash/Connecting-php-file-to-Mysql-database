<?php
$con = mysqli_connect('127.0.0.1','root','1234','tomandjerry');
if(!$con)
{
 echo 'not connect to the server'; }
if(!mysqli_select_db($con,'tomandjerry'))
{
 echo 'database not selected'; }
$Comment = $_POST['Comment'];
$sql = "INSERT INTO comment (Comment) VALUES ('$Comment')";
if(!mysqli_query($con,$sql))
{
 echo 'Not inserted'; }
else
{
 echo 'Data Inserted';
}
header("refresh:3; url=Comments.html")
?>