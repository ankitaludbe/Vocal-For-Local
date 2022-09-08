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
	width:150px;
	height:30px;
	color:white;
}

    </style>
</head>
<?php
include 'header.html';

$service=$_GET['service'];

include 'db.php';
    
    $sql="select * from services where service='$service'";
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
	
	<th>Action</th>
    
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
				<input type="submit" name="submit" value="View Map" class="btn">
				</form>
	  </td>
      </tr>

      <?php
    
      }
    
    echo "</table>";
    
    
    mysqli_close($con);
    


include 'footer.html';
?>