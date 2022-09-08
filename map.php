<?php
if(isset($_POST['submit'])){
	$location=$_POST['location'];
	?>
	<iframe width="80%" height="500" src="https://maps.google.com/maps?q=<?php echo $location;?>&output=embed">
	</iframe>
	
	<?php
}
?>
