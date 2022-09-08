<?php
session_start();
if(!isset($_SESSION['username'])){
	echo "<script>alert('You Need To Login First'); window.location.href = 'login.php';</script>";
	
	}
include 'header_profile.html';
$name=$_SESSION['username'];
?>
<h2 style="margin-left:5vw;font-weight:bold;font-size:20px;">Welcome<?php echo " ".$_SESSION['username'];?>
<span style="margin-left:1vw;font-weight:bold;font-size:18px;color:blue;"><a href="profile.php">Go To Profile</a></span></h2>
  <div class="flex flex-col" style="margin:5vw;">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full">
          <thead class="border-b">
            <tr class="border-b bg-gray-800 boder-gray-900 text-white">
              <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
               Sr No
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
               Name
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
               Service
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
              Location
              </th>
			   <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
             Experience
              </th>
			   <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
              Contact
              </th>
			  <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
              Image
              </th>
			  <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
              Email
              </th>
			  <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
              Password
              </th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b">
			<?php
            include 'db.php';			
			  $sql="select * from services where name='$name'";
    $result=mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result))
    
      {
	?>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
			  <?php echo $row['id'];?>
			  </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
			
                  <?php echo $row['name'];?>
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <?php echo $row['service'];?>
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <?php echo $row['location'];?>
              </td>
          
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                 <?php echo $row['exp'];?>
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <?php echo $row['contact'];?>
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                 <img src="<?php echo $row['prof_pic'];?>" height=100 width=100/> 
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                 <?php echo $row['email'];?>
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <?php echo $row['password'];?>
              </td>
            </tr>
			
	  <?php
	  }
	  ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<div class="flex space-x-2 justify-center">
  <button
    type="button"
    data-mdb-ripple="true"
    data-mdb-ripple-color="light"
    class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
  ><a href="edit_profile.php?name=<?php echo $name;?>">Edit Profile</button>
</div>

<?php

include 'footer.html';
?>