<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name = "viewport" content = "width-device-width, intial-scale = 1.0"> 
        <meta charset = "UTF-8">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
         <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		 <link rel="stylesheet" href = "P_Style.css">
	
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Shopping Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<nav class = "nav-wrapper white"> 
        <ul id = "nav-mobile" class="left hide-on-med-and-down">
            <!-- Home -->
            <li> 
                <a class="btn-flat black-text" href ="#!Home">Home</a>
             </li>
             <!-- About Us -->
             <li> 
                <a class="btn-flat black-text" href = "#!About">About Us</a>
             </li>
             <!-- Contact Us -->
             <li> 
                <a class="btn-flat black-text" href = "#!Contact">Contact Us</a>
             </li>
             <!-- Reviews -->
             <li> 
                <a class="btn-flat black-text" href = "#!Review"  >Reviews</a>
             </li>
             <li> 
            
             
        </ul>
            <a href="#!Home" class="brand-logo center"> <img src = "Pictures/D_Logo(1).png" class = "Dman" ></a>
       
        <ul id = "nav-mobile" class="right hide-on-med-and-down"> 
            <li> 
                <a class='DD btn black-text white' href='#' data-target='dropdown1'>DB Maintain</a>
                <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="">Search</a></li>
                    <li><a href="#!Insert">Insert</a></li>
                    <li><a href="#!Delete">Delete</a></li>
                    <li><a href="#!Select">Select</a></li>
                    <li><a href="#!Update">Update</a></li>
                </ul>
            
             </li>
            <!-- Sign-in modal  Note: Add in "Not a member? Sign-up now" link -->
            <?php  
                if(isset($_SESSION['email'])){
                    echo "<li> <a class=\"btn-flat black-text\" href = \"logout.php\">Logout</a><li>";
                    echo "<li> <a class=\"btn-flat black-text\" href = \"#\">Account</a><li>";
                }
                else{
                    echo "<li> 
                    <a class=\"btn-flat black-text modal-trigger\" href=\"#modal1\">Sign-in</a>
                        <!--- This is all the sign-in stuff which is a modal so it pops up on screen when clicked -->
                        <div id =\"modal1\" class = \"modal black-text\"> 
                            <div class = \"modal-content\">
                                    <br>
                                    <h4 class =\"black-text center\">Sign-in</h4>
                                    <div class =\"row\"> 
                                        <form action=\"signin.php\" method=\"post\"> 
                                            <!-- Account Username -->
                                            <div class = \"row\"> 
                                                <div class =\"input-field col s4 offset-s4\">
                                                    <i class=\"material-icons prefix\">account_circle</i>
                                                    <input placeholder=\"Email or Username\" id =\"login-n\" name = \"login-name\" type=\"text\" class=\"validate\">
                                                    <label for = \"login-name\"> Email or Username </label>
                                                </div> 
                                            </div>
                                            
                                            <!-- Account Password -->
                                            <div class = \"row\"> 
                                                <div class =\"input-field col s4 offset-s4\">
                                                    <i class=\"material-icons prefix \">lock</i>
                                                    <input placeholder=\"Password\" id =\"login-p\" name = \"login-password\"type=\"Password\" class=\"validate\">
                                                    <label for = \"login-name\"> Password </label>
                                                </div> 
                                            </div>
    
                                            <!-- Can't log in? -->
                                            <div class = \"row\">
                                                <label class =\"col offset-s3\">
                                                    <input type = \"checkbox\" class=\"offset-s4\"> 
                                                    <span> Keep signed in? </span>
                                                </label>
                                                <label class =\"col offset-s2\">
                                                    <a href=\"sign-in.html\" class =\"black-text\"> Forgotten Password? </a>
                                                </label> 
                                            </div>
                                
                                            <!-- Submission Button -->
                                            <div class =\"row\"> 
                                                <button class = \"btn waves-effect waves-light col s4 offset-s4 black\" type=\"submit\" name=\"action\">Login</button>
                                            </div>
                                        </form> 
                                    </div>
                                
                            </div>
                        </div>
                    </div> 
                 </li>";
                    echo "<li> 
                    <a class=\"btn-flat black-text modal-trigger\" href=\"#!Sign-Up\" >Sign-up</a>
                 </li>";
                }
            ?>
             <!-- Shopping Cart -->
            <li> 
            <a class="btn-flat black-text" href = "#!Cart" > <i class="material-icons right">shopping_cart</i> Cart</a>
             </li>
        </ul>
       
</nav>

    <div id="page">	


		<form method ="post" id= "checkout_form">
		<div class="row">
			<h5 class =" col s3 offset-s1">Contact Information</h5>
		</div>
		<!--Email/Phone Number --> 
		<div class="row">
				<div class = "input field col s7 offset-s1"> 
					<input placeholder ="Email Or Phone Number" id="EorPN" name="EorPn" type="text" class="validate">
					<label for ="SU-fname">Email Or Phone Number </label>
				</div>
		</div> 
		<div class = "row">
			<label class ="col offset-s1">
				<input type = "checkbox" class="offset-s4"> 
				<span> Email Me with news and offers</span>
			</label>
		</div>

		<div class="row">
			<h5 class =" col s3 offset-s1">Shipping Information </h5>
		</div> 
		<!--Country/Region --> 
		<div class="row">
			<div class="input-field col s7 offset-s1"> 
				<select name ="Country/Region"> 
					<option value ="" disabled selected> Country/Region </option>
					<option value ="Canada"> Canada </option>
					<option value ="India"> India </option>
					<option value ="Mexico"> Mexico </option>
					<option value ="Vietnam"> Philippines </option>
					<option value ="Vietnam"> Vietnam </option>
					<option value ="United Kingdom"> United Kingdom </option>
					<option value ="United States"> United States </option>
				</select>
			</div>
		</div>
		<!--Fname/Lname--> 
		<div class ="row">
			<div class = "input field col s3 offset-s1"> 
				<input placeholder ="First Name" id="SC-fname" name="SC-fname" type="text" class="validate">
				<label for ="SC-fname">First Name  </label>
			</div>
			<div class = "input field col s3 offset-s1"> 
				<input placeholder ="Last Name" id="SC-lname" name="SC-lname" type="text" class="validate">
				<label for ="SC-lname">Last Name  </label>
			</div>
		</div>
		<!--Address (Main) --> 
		<div class ="row">
			<div class = "input field col s7 offset-s1"> 
				<input placeholder ="Address" id="SC-add" name="SC-add" type="text" class="validate">
				<label for ="SC-add">Address </label>
			</div>
		</div>
		<!--Address (Optional)-->
		<div class ="row">
			<div class = "input field col s7 offset-s1"> 
				<input placeholder ="Apartment, Suite, etc (Optional) " id="SC-add2" name="SC-add2" type="text" class="validate">
				<label for ="SC-add2">Apartment, Suite, etc (Optional) </label>
			</div>
		</div>
		<!-- City/Postal Code -->
		<div class ="row">
			<div class = "input field col s3 offset-s1"> 
				<input placeholder ="City" id="SC-city" name="SC-city" type="text" class="validate">
				<label for ="SC-city">City</label>
			</div>
			<div class = "input field col s3 offset-s1"> 
				<input placeholder ="Postal Code" id="SC-postal" name="SC-postal" type="text" class="validate">
				<label for ="SC-postal">Postal Code</label>
			</div>
		</div>
		<!---Branch Location -->
		<div class="row">
			<div id = "branch" name = "branch" class="input-field col s7 offset-s1"> 
				<select id= "branchValue" name ="Branch Location"> 
					<option value="356 Yonge St, Toronto, ON M5B 1S5">Toronto</option>
					<option value ="520 Oxford St W, London, ON N6H 1T5">London</option>
					<option value ="6025 Boul. De La, Montreal, Quebec H3S 1Z9">Montreal</option>
					<option value ="1268 King St E, Hamilton, ON L8N 1G8">Hamilton</option>
				</select>
				<label>Store Location</label>
			</div>
		</div>

		<!--Check Out Button-->
		<div class ="row"> 
			<button class = "btn waves-effect waves-light col s4 offset-s1 black" type="submit" name="checkout" onclick = "getData()" href="checkout.html"> Check Out</button>
		</div>


	</form>
	</div> 	
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
	console.log(localStorage.getItem("branch"));
	console.log(localStorage.getItem("destination"));
	console.log(localStorage.getItem("test"));
		function getData()
		{
			var branch = $('#branchValue').val();
			var temp = "";
			var customer = temp.concat($('#SC-add').val(),", ",$('#SC-city').val(),", ","ON ",$('#SC-postal').val());
			localStorage.setItem("test", "gottem");
			localStorage.setItem("branch", branch);
			localStorage.setItem("destination", customer);
		}

	$(document).ready(function(){ 
      $('#demo-carousel').carousel({fullWidth:true, indicators:true});
      setInterval(function(){ $('#demo-carousel').carousel('next');},4500);
  	});
  $(document).ready(function(){ 
      $(".modal").modal();
  	});
	  $(document).ready(function(){
        $('select').formSelect();
        });
</script>
</html>