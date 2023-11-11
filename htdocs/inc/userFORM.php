<?php


$firstname= '';
$lastname='';
$email='';
if(isset($_POST['submit'])){

$firstname= mysqli_real_escape_string($conn,$_POST['Fname']);
$lastname=  mysqli_real_escape_string($conn,$_POST['Lname']);
$email=     mysqli_real_escape_string($conn,$_POST['email']);


$sql="INSERT INTO users(fname,lname,email)
VALUES('$firstname','$lastname','$email')";
if(empty($firstname)){
    $errs['firstnameerr']='ادخل الاسم الاول';
   

}
if(empty($lastname)){
    $errs['lastnameerr']='ادخل الاسم الثاني';

}
if(empty($email)){
    $errs['emailnameerr']='ادخل الايميل';

}else{
    mysqli_query($conn,$sql);

}

}
?>