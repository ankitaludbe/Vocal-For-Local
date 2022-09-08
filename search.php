<html>
    <head>
<style>

#st_table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#st_table td, #st_table th {
  border: 1px solid #ddd;
  padding: 5px;
  
}

#st_table tr:nth-child(even){background-color: #f2f2f2;}

#st_table tr:hover {background-color: #ddd;}

#st_table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #04AA6D;
  color: white;
}
.btn{
	background-color:blue;
	border:1px solid black;
	border-radius:10px;
	width:110px;
	height:30px;
	color:white;
}

    </style>
</head>
<?php
include 'header.html';
?>

<section class="text-gray-600 body-font relative">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Register Your Services</h1>
    </div>
    <form action="# " method="post" enctype="multipart/form-data">
    <div class="lg:w-1/2 md:w-2/3 mx-auto">
      <div class="flex flex-wrap -m-2">
       
		<div class="p-2 w-1/2">
          <div class="relative">
            <label for="Service" class="leading-7 text-sm text-gray-600">Service</label>
            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="service">
       <option>Select Your Service</option>
	   <option value="mechanical">Mechanical</option>
       <option value="plumber">Plumber</option>
       <option value="doctor">Doctor</option>
	   <option value="cook">Cook</option>
	   <option value="maid">Maid</option>
	   <option value="tuition teacher">Tuition Teacher</option>
	   <option value="electrician">Electrician</option>
	   <option value="carpenter">Carpenter</option>
	   <option value="photographer">Photographer</option>
	   <option value="gym instructor">Gym Instructor</option>
	   <option value="driver">Driver</option>
	   <option value="vehicle washing">Vehicle Washing</option>
	   
        </select>
          </div>
        </div>

        <div class="p-2 w-1/2">
          <div class="relative">
            <label for="Location" class="leading-7 text-sm text-gray-600">Location</label>
            <input type="text" id="location" name="location" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
		

        <div class="p-2 w-full">
          <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" name="submit" type="submit" value="submit">Search</button>
		  
        </div>
       </form>
      </div>
    </div>
  </div>
</section>
<?php
include 'db.php';
if(isset($_POST["submit"])){
    $service=$_POST['service'];
    $area=$_POST['location'];
    
    $sql="select * from services where service='$service' and location='$area'";
    $result=mysqli_query($con,$sql);
    echo "<h1 align='center'>Service Provider List</h1>";
    echo "<table border='1' id='st_table'>
    
    <tr>
    
    <th>Name</th>

    <th>Service</th>
    
    <th>Location</th>
    
    <th>Experience</th>
    
    <th>Contact No</th>
    
    <th>Profile Photo</th>
	
	<th>Find On Map</th>
    
    </tr>";
    
     
    
    while($row = mysqli_fetch_array($result))
    
      {
    
	  $location=$row['name'];
	  $location.=",".$row['location'];
	  
      echo "<tr align='center'>";
    
      echo "<td>" . $row['name'] . "</td>";
    
      echo "<td>" . $row['service'] . "</td>";
      
       echo "<td>" . $row['location'] . "</td>";
       
       echo "<td>" . $row['exp'] . "</td>";
         
      echo "<td>" . $row['contact'] . "</td>";
	  ?>
	  
      <td>
      <img src="<?php echo $row['prof_pic'];?>" height=100 width=100/> 
      </td>
	  
	  <td> <form method="post" action="map.php">
	            <input type="hidden" name="location" value="<?php echo $location;?>">
				<input type="submit" name="submit" value="View On Map" class="btn">
				</form>
	  </td>
      </tr>

      <?php
    
      }
    
    echo "</table>";
    
    
    mysqli_close($con);
    

}


include 'footer.html';
?>