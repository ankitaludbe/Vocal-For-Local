<?php
session_start();
include 'header_profile.html';

$name=$_SESSION['username'];
include 'db.php';

?>
<h2 style="margin-left:5vw;font-weight:bold;font-size:20px;">Welcome<?php echo " ".$_SESSION['username'];?>
<span style="margin-left:1vw;font-weight:bold;font-size:18px;color:blue;"><a href="profile.php">Go To Profile</a></span></h2>
<section class="text-gray-600 body-font relative">
 <form method="post" enctype="multipart/form-data">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Change Profile Picture</h1>
    </div>
    <div class="lg:w-1/2 md:w-2/3 mx-auto">
      <div class="flex flex-wrap -m-2">
       
		<div class="p-2 w-full">
          <div class="relative">
            <label for="pic" class="leading-7 text-sm text-gray-600">Select Profile Picture</label>
            <input type="file" id="pic" name="pic" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
		
        <div class="p-2 w-full">
          <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" name="submit" type="submit" value="submit">Register</button>
		  
        </div>
       </form>
      </div>
    </div>
  </div>
</section>




 <?php
 include 'db.php';
if(isset($_POST["submit"])){
    $file=$_FILES['pic']['tmp_name'];
    $image = $_FILES["pic"] ["name"];
	$image_name= addslashes($_FILES['pic']['name']);
	$size = $_FILES["pic"] ["size"];
	$error = $_FILES["pic"] ["error"];
    move_uploaded_file($_FILES["pic"]["tmp_name"],"upload/" . $_FILES["pic"]["name"]);			
	$location="upload/" . $_FILES["pic"]["name"];
    $sql="update services set prof_pic='$location' where name='$name'";
   
    $result=mysqli_query($con,$sql);
    if(!$result){
        echo "<script>
        alert('Picture Not Updated!!');
        window.location.href('profile.php');
        </script>";
		
        
    }else{
        echo "<script>
        alert('Picture Updated Successfully!!');
        window.location.href('profile.php');
        </script>";
        
    }
}
include 'footer.html';
?>