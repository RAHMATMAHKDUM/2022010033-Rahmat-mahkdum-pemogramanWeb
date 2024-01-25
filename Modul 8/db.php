<?php
$koneksi = mysqli_connect("localhost","root","","tugasmodul8");

$name = $_POST['name'];
$email = $_POST['email'];
$website = $_POST['website'];
$comment = $_POST['comment'];
$gender = $_POST['gender'];
$submit = $_POST['submit'];

$query = "INSERT INTO tugasmodul8 VALUES('$name','$email','$website','$comment','$gender','$submit')";

mysqli_query($koneksi,$query);
?>