<?php

include 'header.html';
?>

<section class="text-gray-600 body-font relative">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Register Your Services</h1>
    </div>
    <div class="lg:w-1/2 md:w-2/3 mx-auto">
      <div class="flex flex-wrap -m-2">
        <div class="p-2 w-1/2">
          <div class="relative">
		  <form action="register_process.php" method="post" enctype="multipart/form-data">
            <label for="Name" class="leading-7 text-sm text-gray-600">Name</label>
            <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
		
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
		
		<div class="p-2 w-1/2">
          <div class="relative">
            <label for="YOE" class="leading-7 text-sm text-gray-600">Years of Experience</label>
            <input type="text" id="yoe" name="yoe" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Enter in terms of years">
          </div>
        </div>
		
		<div class="p-2 w-1/2">
          <div class="relative">
            <label for="Contact" class="leading-7 text-sm text-gray-600">Contact No</label>
            <input type="text" id="contact" name="contact" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
		
		<div class="p-2 w-1/2">
          <div class="relative">
            <label for="pic" class="leading-7 text-sm text-gray-600">Profile Picture</label>
            <input type="file" id="pic" name="pic" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
		
		<div class="p-2 w-1/2">
          <div class="relative">
            <label for="Email" class="leading-7 text-sm text-gray-600">Email</label>
            <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
		
		<div class="p-2 w-1/2">
          <div class="relative">
            <label for="Password" class="leading-7 text-sm text-gray-600">Password</label>
            <input type="password" id="password" name="password" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
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

include 'footer.html';
?>