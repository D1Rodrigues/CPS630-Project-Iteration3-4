<?php
    session_start();
?>
<!DOCTYPE html> 
<html> 
    <head> 
        <meta name = "viewport" content = "width-device-width, intial-scale = 1.0"> 
        <meta charset = "UTF-8">
        <link rel="icon" href="Pictures/favicon-32x32.png"> 
        <link rel="stylesheet" href = "P_Style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
        <title> DND FASHION</title>
    </head>
<body ng-app = "It3&4" onload="getBrowserName()"> 
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
            <a class="btn-flat black-text" href = "Map Page/index2.php" > <i class="material-icons right">shopping_cart</i> Cart</a>
             </li>
        </ul>
       
</nav>
    <br>
<!--Main body -->
<section>
    <!-- Home Page --> 
    <script type ="text/ng-template" id="Home.php">
        <div class = "container"> 
        <!-- Carousel of Images -->
        <div class = "carousel carousel-slider center" id ="demo-carousel" data-indicators="true"> 
        <a class = "carousel-item" href ="#one!"><img src = "Pictures/FCollect.jpg" class="ad1"></a>
        <a class = "carousel-item" href ="#two!"><img src = "Pictures/Soled.png"></a>
        <a class = "carousel-item" href ="#three!"><img src = "Pictures/OffWhite.png"></a>
        </div>
        <br> 
        <br>
        <form method = "post" action="search-id.php">
        <div class ="row"> 
            <div class = "input field col s4 offset-s1"> 
                <input placeholder ="Search"  id="searchbar" name="searchbar" class="validate">
            </div>
            <div class ="row"> 
                <button class = "btn waves-effect waves-light col s3 offset-s4 black" type="submit" name="action"> SEARCH </button>
            </div>
        </div>
        </form> 
    </script>  

    <!--About Us Page --> 
    <script type ="text/ng-template" id="aboutus.php"> 
        <section class ="container"> 
        <h3> About our staff</h3> 
        <div class= "row"> 
            <h4> Justtin Hoang  </h4>
            <img src ="Pictures/HoangDaddy.jpg" class = "col s2" > 
            <p> Justtin Hoang, or as he's known by his employees as "The genius behind Drip Not Drizzle", is a full stack developer who did 
                balanced share of both the back-end development as well as the front. He was in charge of creating the interactive maps, shopping cart, 
                shopping cart database as well as bug testing and some bug fixing. Mostly focusing on the front end he used Javascript, html and css to acheive his goals. 
            </p>     
        </div>
        <div class ="row">
            <h4> Al Sagun </h4>
    
            <img src ="Pictures/Al.png" class = "col s2" > 
            <p> 
                Al Sagun, or as he's known by his employees as Al "Capone" Sagun, is a front end developer that was in charge of the design and layout of drip not drizzle. 
                Mainly focusing on the front-end, he used the "Materialize" framework to create a sleek and eye-catching design the website. 
                The langauges that his mostly used were: html, javascript, materialize, css and php.
            </p>
        </div> 
        <div class ="row">
            <h4> Dylan Rodrigues </h4>
            <img src ="Pictures/Dylan.jpg" class = "col s2" > 
            <p> 
                Dylan Rodrigues or as he's known by his employees as Dylan "Drip" Rodrigues is a back-end developer that was in charge of mostly everything behind the scenes of the website. 
                This includes everything from the database as well as connecting everything from the database to the main website. He tried to create a complex 
                interconnected database that works both fast and well. Mostly focusing on languages and databases such as PHP and SQL, he also helped out a little with the 
                layout of the website using html and a little css. 
            </p>
        </div> 
        </section>
    </script> 

    <!-- Contact us Page--> 
    <script type ="text/ng-template" id="Contact.php"> 
        <div class = "container">
        <h4> Contact the Team! </h4>
        <!-- Dylan Information Section -->
        <div class = "row">
            <p class="contact-info"> <i class ="inline-icon-account material-icons prefix">people</i>    Dylan Rodrigues:</p>
            <p class="contact-info"> <i class ="inline-icon-account material-icons prefix"> local_phone</i>  Tele: 416-696-6969 </p>
            <p class="contact-info"> <i class ="inline-icon-account material-icons prefix"> email</i>  Email: drod@dnd.ca  </p>
        </div> 

        <!-- Justtin Information Section -->
        <div class = "row">
            <p class="contact-info"> <i class ="inline-icon-account material-icons prefix">people</i>    Justtin Hoang:</p>
            <p class="contact-info"> <i class ="inline-icon-account material-icons prefix"> local_phone</i>  Tele: 416-696-6969 </p>
            <p class="contact-info"> <i class ="inline-icon-account material-icons prefix"> email</i>  Email: jhoang@dnd.ca  </p>
        </div>

        <!-- Al Information Section -->
        <div class = "row">
            <p class="contact-info"> <i class ="inline-icon-account material-icons prefix">people</i>    Al Sagun:</p>
            <p class="contact-info"> <i class ="inline-icon-account material-icons prefix"> local_phone</i>  Tele: 416-696-6969 </p>
            <p class="contact-info"> <i class ="inline-icon-account material-icons prefix"> email</i>  Email: aSag@dnd.ca  </p>
        </div> 
        

        <h4>Ask us a question!</h4>
        <!-- Question Forms -->
        <div class ="row">
            <form action="contactform.php" method="post">
            <!-- Customer Name -->
            <div class ="row"> 
                <div class ="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
                <input placeholder="Name" id ="nameS" name = "name" type="text" class="validate">
                <label for = "nameS"> Name </label>
                </div> 
            </div>

            <!-- Customer Email -->
            <div class ="row"> 
                <div class ="input-field col s6">
                <i class="material-icons prefix">email</i>
                <input placeholder="Email" id ="mailS" name = "mail" type="text" class="validate">
                <label for = "mailS"> Email </label>
                </div> 
            </div>

            <!-- Customer Question -->
            <div class ="row"> 
                <div class ="input-field col s6">
                <i class="material-icons prefix">question_answer</i>
                <input placeholder="Question" id ="QnA" name = "question" type="text" class="validate">
                <label for = "QnA"> Question </label>
                </div> 
            </div>

            <!-- Submit Button -->
            <div class ="row"> 
                <button class = "btn waves-effect waves-light col s6  grey" type="submit" name="action">Submit</button>
            </div>
        </form>
        </div>

        </div>
    </script>

    <!--Reviews Page --> 
    <script type = "text/ng-template" id="review.php"> 
        <div class ="container">
            <h4> Leave a Review!</h4> 
            <form method="post" action="InsertReview.php"> 
                <div class  ="row">
                <div class ="input-field col s8"> 
                    <input placeholder = "Product Name" id="ReviewPname" name ="ReviewPname" type="Text"> 
                    <label for="ReviewPname"> Product Name  </label>
                    <div class ="row"> 
                </div>
                </div>
                </div> 
                <div class  ="row">
                <div class ="input-field col s8"> 
                    <input placeholder = "Review" id="ReviewR" name ="ReviewR" type="Text"> 
                </div>
                </div> 
                <button class = "btn waves-effect waves-light col s4 offset-s4 black" type="submit" name="action"> Add Review</button>
            </form>
            <br> 

            <form method = "post" action="deleteReview.php">
                <div class = "row"> 
                    <button class = "btn waves-effect waves-light col s2 black" type="submit" name="action"> Delete Review</button>
                    <div class ="input-field col s2 offset-s1"> 
                        <input placeholder = "Review Number" id="ReviewNumber" name ="ReviewNumber" type="Text"> 
                    </div>
                </div> 
            </form> 

            <form method = "post" action="showReview.php">
                <div class = "row"> 
                    <button class = "btn waves-effect waves-light col s2 black" type="submit" name="action"> Show Review</button>
                </div> 
            </form> 
        </div> 
    </script> 

    <!-- Sign Up Page --> 
    <script type = "text/ng-template" id = "Sign-up.php"> 
        <section class = "container"> 
                <h4 class = "center"> Sign-up Registration </h4>
                <h4 class = "center" style="color: lightgrey; font-size:15px;">Join us now and join the revolution. You will join.... You will submit</h4>
            <br> 
            <br>
           <form action ="sign-up-f.php" method = "post">
                  <!---First/Last Name -->
                  <div class = "row"> 
                    <div class = "input field col s4 offset-s2"> 
                        <input placeholder ="First Name" id="SU-fname" name="signup-fname" type="text" class="validate">
                        <label for ="SU-fname">First Name </label>
                    </div>
                    <div class = "input field col s4 offset-s1"> 
                        <input placeholder ="Last Name" id="SU-lname" name="signup-lname" type="text" class="validate">
                        <label for ="SU-lname">Last Name </label>
                    </div>
                    </div>
                  <!--- Email/Password -->
                  <div class = "row">
                    <div class = "input field col s4 offset-s2"> 
                        <input placeholder ="Email" id="SU-email" name="signup-email" type="text" class="validate">
                        <label for ="SU-email ">Email </label>
                    </div>
                    <div class = "input field col s4 offset-s1"> 
                        <input placeholder ="Password"  id="SU-pass" name="signup-pass" type="password" class="validate">
                        <label for ="SU-pass "> Password </label>
                    </div>
                  </div>
                  <!-- Date of birth/Gender-->
                  <div class = "row"> 
                    <div class = " col s4 offset-s2"> 
                        <input type = "date" placeholder ="Date of Birth" id="DoB" name="signup-date" class ="datepicker" style ="color:lightgray">
                        <label for ="DoB"> Date of Birth</label>
                    </div> 
                    <div class  = "input-field col s4 offset-s1">
                        <select name="gender">
                            <option value ="" disabled selected> Gender </option>
                            <option value ="Male"> Male </option>
                            <option value ="Female"> Female </option>
                            <option value ="Other"> Other </option>
                            <option value ="AAH"> APACHE ATTACK HELICOPTER </option>
                        </select>
                    </div>
                  </div>
                  <h4 class = "center" style="color:lightgrey; font-size:15px;" >By creating this account you agree to Drip not Drizzle's Private Policy and Terms of Use<h4>
                  <!-- Submission Button-->
                  <div class ="row"> 
                    <button class = "btn waves-effect waves-light col s4 offset-s4 black" type="submit" name="action"> Sign Up</button>
                  </div>
                  <h4 class = "center" style="color:lightgrey; font-size:15px;" > 
                   Already a member? <a href = "sign-in.php">Sign in</a> 
                  <h4>
            </form>

    </script> 

    <!--DB Maintance --> 
    <script type = "text/ng-template" id = "Insert-Page.php"> 
        <h4 class ="center"> Insert</h4>
        <form method ="post" action = "dropdown-insert.php"> 
        <div class ="row"> 
                <div class = "row"> 
                    <div class ="input-field col s2 offset-s1">
                        <input placeholder="Table" id ="Table" name = "table" type="text" class="validate">
                        <label for = "table"> Table </label>
                    </div> 
                    <div class ="input-field col s2 offset-s1">
                        <input placeholder="Columns" id ="Columns" name = "columns" type="text" class="validate">
                        <label for = "Columns"> Columns  </label>
                    </div> 
                    <div class ="input-field col s2 offset-s1">
                        <input placeholder="Attributes" id ="values" name = "values" type="text" class="validate">
                        <label for = "attributes"> attributes</label>
                    </div> 
                <div class ="row"> 
                        <button class = "btn waves-effect waves-light col s4 offset-s4 black" type="submit" name="action"> Insert</button>
                </div>
        </div>
        </form> 
    </script> 
    
    <script type ="text/ng-template" id ="Delete.php"> 
        <h4 class ="center"> Delete </h4>
        <form method="post" action="dropdown-delete.php"> 
        <div class ="row"> 
                <div class = "row"> 
                    <div class ="input-field col s4 offset-s1">
                        <input placeholder="Table Name" id ="TName" name = "TName" type="text" class="validate">
                        <label for = "TName"> Table Name </label>
                    </div> 
                    <div class ="input-field col s4 offset-s1">
                        <input placeholder="Conditions" id ="Conditions" name = "Conditions" type="text" class="validate">
                        <label for = "Conditions"> Conditions </label>
                    </div> 
                </div>
                <div class ="row"> 
                        <button class = "btn waves-effect waves-light col s4 offset-s4 black" type="submit" name="action"> Delete</button>
                </div>
        </form> 
    </script>        

    <script type ="text/ng-template" id ="Select-Page.php"> 
        <h4 class ="center"> Select User </h4>
        <form method="post" action="dropdown-select.php"> 
        <div class ="row"> 
                    <div class ="input-field col s4 offset-s1">
                        <input placeholder="Table Name" id ="TName" name = "TName" type="text" class="validate">
                        <label for = "TName"> Table Name </label>
                    </div> 
                    <div class ="input-field col s4 offset-s1">
                        <input placeholder="Columns" id ="TName" name = "Columns" type="text" class="validate">
                        <label for = "TName"> Columns </label>
                    </div> 
                    <div class ="input-field col s4 offset-s1">
                        <input placeholder="Conditions" id ="Conditions" name = "Conditions" type="text" class="validate">
                        <label for = "Conditions"> Conditions </label>
                    </div> 
                <div class ="row"> 
                        <button class = "btn waves-effect waves-light col s4 offset-s4 black" type="submit" name="action"> Select</button>
                </div>
        </form> 
    </script>

    <script type ="text/ng-template" id ="Update-Page.php"> 
        <h4 class ="center"> Update User </h4>
        <form method="post" action="dropdown-update.php"> 
        <div class ="row"> 
                <div class = "row"> 
                    <div class ="input-field col s2 offset-s1">
                        <input placeholder="TableName" id ="TName" name = "TName" type="text" class="validate">
                        <label for = "TName"> Table Name </label>
                    </div> 
                <div class = "row"> 
                    <div class ="input-field col s2 offset-s1">
                        <input placeholder="Values" id ="Values" name = "Values" type="text" class="validate">
                        <label for = "Values"> Values </label>
                    </div> 
                    <div class ="input-field col s2 offset-s1">
                        <input placeholder="Conditions" id ="Conditions" name = "Conditions" type="text" class="validate">
                        <label for = "Conditions"> Conditions </label>
                    </div> 
                </div>
                <div class ="row"> 
                        <button class = "btn waves-effect waves-light col s4 offset-s4 black" type="submit" name="action"> Update</button>
                </div>
        </div>
        </form> 
    </script>


    <!-- Shopping Cart --> 
    <script type ="text/ng-template" id="Cart.php">
                <div id="page">	

            <form method ="post">
                <div class ="row"> 
                <h3 class = "center">Shopping Cart</h3>
                </div>
                <!--Product list -->
                <div class = "row">
                    <div class ="col s4 offset-s1">
                    <section id="products" class="products">
                        <ul class="logo-list">
                            <li id="product-1" data-price="1200.00"><span><img src="products/black_toe_j1.png">Jordan 1 Black Toe<br>$1200.00 CAD</span></li>
                            <li  id="product-2" data-price="400.00"><span><img src="products/blue_yeezy_350.png">Yeezy Boost 350 V2 Dazzling Blue<br>$400.00 CAD</span></li>
                            <li id="product-3" data-price="900.00"><span><img src="products/bred_j4.png">Jordan 4 Bred <br>$900.00 CAD</span></li>
                            <li id="product-4" data-price="1800.00"><span><img src="products/dior_canvas.png">Dior B23 Black <br> $1800.00 CAD</span></li>
                            <li id="product-5" data-price="200.00"><span><img src="products/fog_black_hoodie.png">FOG Hoodie Black<br>$200.00 CAD</span></li>
                            <li  id="product-6" data-price="150.00"><span><img src="products/fog_black_tee.png">FOG Tee Black <br> $150.00 CAD</span></li>
                            <li id="product-7" data-price="200.00"><span><img src="products/fog_oatmeal_hoodie.png">FOG Hoodie Oatmeal<br> $200.00 CAD</span></li>
                            <li id="product-8" data-price="200.00"><span><img src="products/fog_white_hoodie.png">FOG Hoodie White<br>$200.00</span></li>
                            <li id="product-9" data-price="250.00"><span><img src="products/kaws_nf_hoodie.png">KAWS x The North Face Hoodie <br>$250.00 CAD</span></li>
                            <li  id="product-10" data-price="300.00"><span><img src="products/nocta_hoodie.png">Nocta Hoodie Cardinal<br> $300.00 CAD</span></li>
                            <li  id="product-11" data-price="1000.00"><span><img src="products/nocta_jacket.png">Nike x Drake Nocta Puffer Jacket<br> $1000.00 CAD</span></li>
                            <li  id="product-12" data-price="180.00"><span><img src="products/ow_belt.png">Off-White Industrial Belt<br> $180.00 CAD</span></li>
                            <li id="product-13" data-price="70.00"><span><img src="products/supreme_beanie.png">Supreme Beanie Black<br>$70.00 CAD</span></li>
                            <li id="product-14" data-price="300.00"><span><img src="products/supreme_brick2.png">Supreme Brick<br> $300.00 CAD</span></li>
                            <li id="product-15" data-price="220.00"><span><img src="products/supreme_coffeemaker2.png">Supreme Bialetti Moka Express<br> $220.00 CAD</span></li>
                            <li  id="product-16" data-price="130.00"><span><img src="products/supreme_sidebag.png">Supreme Sling Bag Black<br> $130.00 CAD</span></li>
                            <li  id="product-17" data-price="50.00"><span><img src="products/supreme_workgloves.png">Supreme Grip Work Gloves<br> $50.00 CAD</span></li>
                            <li id="product-18" data-price="350.00"><span><img src="products/vlone_hoodie.png">Vlone x Palm Angels Hoodie Black/Purple<br> $350.00 CAD</span></li>
                            <li id="product-19" data-price="80.00"><span><img src="products/vlone_jw_tee.png">Juice Wrld x Vlone Butterfly T-shirt<br> $80.00 CAD</span></li>
                            <li  id="product-20" data-price="80.00"><span><img src="products/vlone_jw_tee2.png">Juice Wrld x Vlone 999 T-shirt<br> $80.00 CAD</span></li>
                            <li id="product-21" data-price="100.00"><span><img src="products/vlone_pop_tee.png">Pop Smoke x Vlone The Woo T-shirt<br> $100.00 CAD</span></li>
                            <li id="product-22" data-price="600.00"><span><img src="products/bred_yeezy_350.png">Yeezy Boost 350 V2 Bred<br>$600.00 CAD</span></li>
                            <li  id="product-23" data-price="160.00"><span><img src="products/yeezy_gap_hoodie.png">Yeezy x Gap Hoodie Black<br>$160.00 CAD</span></li>
                            <li  id="product-24" data-price="330.00"><span><img src="products/yeezy_gap_jacket.png">Yeezy x Gap Round Jacket Black<br>$330.00 CAD</span></li>
                        </ul>
                    </section>
                    </div>
                </div>
                <!-- This is for the shopping cart area -->
                <div class = "row">
                <div class="col s6 offset-s3">
                <section id="cart" class="shopping-cart ">
                    <ul id="list" class ="white-text center">
                    </ul>
                    <span class="total center">0.00</span>
                    <a class="btn-flat white-text black" onclick="clearMemory()">Clear</a>
                </section>
                </div>
                </div>

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
                    <div class="input-field col s7 offset-s1"> 
                        <select name ="Branch Location"> 
                            <option value ="" disabled selected> Branch Location </option>
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

                <!--Check Out Button-->
                <div class ="row"> 
                    <button class = "btn waves-effect waves-light col s4 offset-s1 black" type="submit" name="action"> Check Out</button>
                </div>


            </form>
            </div> 	
    </script> 
    
    
    <script type = "text/ng-template" id = "shipping.php">
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
    </script> 

    <?php
        error_reporting (E_ALL ^ E_NOTICE); 
        echo $_SESSION['order_id'];
        echo $_SESSION['user_id'];
    ?>
    <?php 
        error_reporting (E_ALL ^ E_NOTICE); 
        $insertStatus = $_SESSION['InsertStatus'];
        if($insertStatus == true){ 
            echo "<div class =\"center\">  Successfully Inserted Information </div> ";
        }
    ?>
    <?php
        $s = $_SESSION['selectStats'];
        if( $s == true){
            $result = $_SESSION['selectResults']; 
            echo serialize($result);
        }
    ?>


</section> 

<div ng-view> </div> 
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<!-- All the regular JS STUFF --> 
<script>
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
        $('.DD').dropdown();

            function getBrowserName()
            {
                var agent = navigator.userAgent;
                //document.write(agent + "<br><br>");
                if(agent.includes('Chrome'))
                {
                    alert(agent + " Browser: Chrome");
                }
                else if (agent.includes('Firefox'))
                { 
                    alert(agent + " Browser: Firefox");
                }
                else if (agent.includes('Trident'))
                {
                    alert(agent + " Browser: Internet Explorer");
                }
                else if(agent.includes('Safari'))
                {
                    alert(agent + " Browser: Safari");
                }
                else  
                {
                    alert(agent + " Browser: unknown");
                }
            }
</script>
<script>

	console.log(localStorage.getItem("item"));
	function addEvent(element, event, delegate ) {
		
		if (typeof (window.event) != 'undefined' && element.attachEvent)
			element.attachEvent('on' + event, delegate);
		else 
			element.addEventListener(event, delegate, false);
	}
	
	addEvent(document, 'readystatechange', function() {
		if ( document.readyState !== "complete" ) 
			return true;
			
		var items = document.querySelectorAll("section.products ul li");
		var cart = document.querySelectorAll("#cart ul")[0];
		
		function updateCart(){
			var total = 0.0;
			var cart_items = document.querySelectorAll("#cart ul li")
			for (var i = 0; i < cart_items.length; i++) {
				var cart_item = cart_items[i];
				var quantity = cart_item.getAttribute('data-quantity');
				var price = cart_item.getAttribute('data-price');
				
				var sub_total = parseFloat(quantity * parseFloat(price));
				cart_item.querySelectorAll("span.sub-total")[0].innerHTML = " = " + sub_total.toFixed(2);
				
				total += sub_total;
			}
			
			document.querySelectorAll("#cart span.total")[0].innerHTML = total.toFixed(2);
		}
		
		function addCartItem(item, id) {
			var clone = item.cloneNode(true);
			clone.setAttribute('data-id', id);
			clone.setAttribute('data-quantity', 1);
			clone.removeAttribute('id');
			
			var fragment = document.createElement('span');
			fragment.setAttribute('class', 'quantity');
			fragment.innerHTML = ' x 1';
			clone.appendChild(fragment);	
			
			fragment = document.createElement('span');
			fragment.setAttribute('class', 'sub-total');
			clone.appendChild(fragment);					
			cart.appendChild(clone);
			addList();
			clearCart();
			updateList();
			
		}
		
		function updateCartItem(item){
			var quantity = item.getAttribute('data-quantity');
			quantity = parseInt(quantity) + 1
			item.setAttribute('data-quantity', quantity);
			var span = item.querySelectorAll('span.quantity');
			span[0].innerHTML = ' x ' + quantity;
			addList();
			clearCart();
			updateList();
			
		}
		
		function onDrop(event){			
			
			
			if(event.preventDefault) event.preventDefault();
			if (event.stopPropagation) event.stopPropagation();
			else event.cancelBubble = true;
			
			var id = event.dataTransfer.getData("Text");

			var item = document.getElementById(id);			
			
			

			var exists = document.querySelectorAll("#cart ul li[data-id='" + id + "']");
			
			if(exists.length > 0){
				updateCartItem(exists[0]);
			} else {
				addCartItem(item, id);
			}
			
			updateCart();
			
			return false;
		}
		
		function onDragOver(event){
			
			if(event.preventDefault) event.preventDefault();
			if (event.stopPropagation) event.stopPropagation();
			else event.cancelBubble = true;
			return false;
		}				

		function addList(){
		window.localStorage.setItem("item", JSON.stringify(document.getElementById("list").innerHTML));
		
		console.log("1");
		console.log(JSON.stringify(document.getElementById("list").outerHTML));
		//window.localStorage.setItem("item", JSON.stringify(document.getElementById("list").outerHTML));
		//console.log(localStorage.getItem("itemList"));
		//console.log(document.getElementById("list"));

		let tempElement = document.createElement("div");
		tempElement.setAttribute("id","delete");
		tempElement.innerHTML = JSON.parse(localStorage.getItem("item"));
		//console.log(tempElement.children[0].innerText);	
		console.log("2");
		console.log(JSON.parse(localStorage.getItem("item")));
		document.getElementById("list").appendChild(tempElement);
		}

		function updateList(){
		console.log("3");
		console.log(JSON.stringify(document.getElementById("list").innerHTML));
		//window.localStorage.setItem("item", JSON.stringify(document.getElementById("list").outerHTML));
		//console.log(localStorage.getItem("itemList"));
		//console.log(document.getElementById("list"));

		let tempElement = document.createElement("div");
		tempElement.setAttribute("id","delete");
		tempElement.innerHTML = JSON.parse(localStorage.getItem("item"));
		//console.log(tempElement.children[0].innerText);	
		console.log("4");
		console.log(JSON.parse(localStorage.getItem("item")));
		document.getElementById("list").appendChild(tempElement);
		}

		updateList();
		updateCart();
		addEvent(cart, 'drop', onDrop);
		addEvent(cart, 'dragover', onDragOver);
		
		function onDrag(event){
			event.dataTransfer.effectAllowed = "move";
			event.dataTransfer.dropEffect = "move";
			var target = event.target || event.srcElement;
			var success = event.dataTransfer.setData('Text', target.id);
		}
			
		for (var i = 0; i < items.length; i++) {
			var item = items[i];
			item.setAttribute("draggable", "true");
			addEvent(item, 'dragstart', onDrag);
		};
	});

	function clearCart(){
		let list = document.getElementById("list");
		[...list.children].forEach(c => list.removeChild(c));
		
		document.querySelectorAll("#cart span.total")[0].innerHTML = "0.00";
		
	};
	function clearMemory(){
		let list = document.getElementById("list");
		[...list.children].forEach(c => list.removeChild(c));
		window.localStorage.setItem("item", JSON.stringify(document.getElementById("list").innerHTML));
		document.querySelectorAll("#cart span.total")[0].innerHTML = "0.00";
	};

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

<!-- ALL THE ANGULAR STUFF -->
<script> 
  var app = angular.module("It3&4",["ngRoute"]);
  app.config(function($routeProvider){
    $routeProvider
    .when("/Home",{
        templateUrl:"Home.php",
        controller: "P_HomeCtrl"
    })
    .when("/About",{
        templateUrl:"aboutus.php",
        controller: "AboutCtrl"
    })
    .when("/Contact",{
        templateUrl:"Contact.php",
        controller: "ContactCtrl"
    })
    .when("/Sign-Up",{
        templateUrl:"Sign-up.php",
        controller: "SUPCtrl"
    })
    .when("/Review",{
        templateUrl:"review.php", 
        controlelr:"ReviewCtrl"
    })
    .when("/Insert",{
        templateUrl:"Insert-Page.php",
        controller: "InCtrl"
    })
    .when("/Delete",{
        templateUrl:"Delete.php",
        controller: "DelCtrl"
    })
    .when("/Select",{
        templateUrl:"Select-Page.php",
        controller: "SelCtrl"
    })
    .when("/Update",{
        templateUrl:"Update-Page.php",
        controller: "UpDCtrl"
    })
    .when("/Cart",{
        templateUrl:"Cart.php",
        controller: "CartCtrl"
    })
    .when("/Shipping",{
        templateUrl:"shipping.php",
        controller: "shipCtrl"
    })
    .otherwise({redirectTo:"/"});
    
  });
</script> 

</html>
