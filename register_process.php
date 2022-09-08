<?php
include 'db.php';
if(isset($_POST["submit"])){
    $name=$_POST['name'];
    $service=$_POST['service'];
    $area=$_POST['location'];
    $yoe=$_POST['yoe'];
    $contact=$_POST['contact'];
	$email=$_POST['email'];
	$password=$_POST['password'];
    $file=$_FILES['pic']['tmp_name'];
    $image = $_FILES["pic"] ["name"];
	$image_name= addslashes($_FILES['pic']['name']);
	$size = $_FILES["pic"] ["size"];
	$error = $_FILES["pic"] ["error"];
    move_uploaded_file($_FILES["pic"]["tmp_name"],"upload/" . $_FILES["pic"]["name"]);			
	$location="upload/" . $_FILES["pic"]["name"];
   
    $sql="insert into services(name,service,location,exp,contact,prof_pic,email,password)values('$name','$service','$area','$yoe',
    '$contact','$location','$email','$password')";
    $result=mysqli_query($con,$sql);
    if(!$result){
        echo "<script>
        alert('Data not inserted');
        window.location.href('index.php');
        </script>";
		 header("Location: index.php");
        
    }else{
        echo "<script>
        alert('Registered Successfully!!');
        window.location.href('index.php');
        </script>";
        header("Location: index.php");
    }
	

}


?>