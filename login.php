<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vocal For Local | Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style>
   .login{
	   margin:auto;
	   margin-top:20vh;
   }
	</style>
</head>
<body>
<?php

include 'header.html';
?>
   
<div class="w-full max-w-xs login">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Username
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username" name="username">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Password
      </label>
      <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************" name="password">
      <p class="text-red-500 text-xs italic">Please choose a password.</p>
    </div>
    <div class="flex items-center justify-between">
      <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="submit" value="Sign In">
       
      <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
        Forgot Password?
      </a>
    </div>
  </form>
  <p class="text-center text-gray-500 text-xs">
    &copy;2022 svgsacademy. All rights reserved.
  </p>
</div>
</div>
</body>
</html>
<?php
include 'db.php';
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$sql = "SELECT * FROM services WHERE email='$username' AND password='$password'";

        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) == 1) {

            while($row = mysqli_fetch_array($result)){                                        

            if ($row['email'] == $username && $row['password'] == $password) {

                session_start();
	            $_SESSION['username'] = $row['name'];

                header("Location: profile.php");
				
		}}}
		else
		{
			
		echo "<script>alert('login failed');
		</script>";
		 
		
		}
		}
		
		
	



?> 