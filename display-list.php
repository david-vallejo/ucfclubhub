<?php
$servername = "sulley.cah.ucf.edu";
$username = "group9";
$password = "password";
$dbname = "group9";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>html</title>
    <link rel="stylesheet" type="text/css" href="http://sulley.cah.ucf.edu/~group9/Versions/david/clubhub-david.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--CDN for materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!--Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="http://sulley.cah.ucf.edu/~group9/Versions/david/styles1.css" rel="stylesheet">
   
      <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
    

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
    <link type="text/css" rel="stylesheet" href="styles.css">
  </head>

  <body>
      <a class="button-collapse" href="#" data-activates="slide-out" id="button-collapse"><i class="fas fa-user-circle"></i> </a>
      
    <div class="sidebar" id="sidebar">
    <div class="row">
    <div class="col s12 center-align">
      <img src="http://sulley.cah.ucf.edu/~group9/Versions/david/images/logo.png" alt ="" class="logo"><br><br>
        <button class="waves-effect waves-light btn yellow darken-1 modal-trigger black-text" name="submit" type="button" value="Send" id="loginbutton">Login</button>
        <br><br>
        <div class = "loginform hidden" id = "loginform">
            
        <form id="create_form" method="POST" action="create.php" class="z-depth-2">
                <div class="row">
                  <div class="input-field col s12">
                    <!--<i class="material-icons prefix">help</i>-->
                    <input id="user" type="text" name="user">
                    <label for="user">Username</label>
                  </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                      <!--<i class="material-icons prefix">email</i>-->
                        <input id="pass" type="password" name="pass">
                        <label for="pass">Password</label>
                    </div>
                </div>
                <div class="row center-align">
                  <button class="waves-effect waves-light btn yellow darken-1 modal-trigger black-text btn-small" name="submit" type="button" value="Send" id="loginsubmit">Submit</button>
                </div> 

                <div class="row">
                  <div id="cform-message" class="col s12"></div>
                </div>
              </form>
            
        </div>
        <button class="waves-effect waves-light btn yellow darken-1 modal-trigger black-text" name="submit" type="button" value="Send" id="registerbutton">Register</button>
        <div class = "registerform hidden" id = "registerform">
            <form id="create_form" method="POST" action="create.php" class="z-depth-2">
                <!--change underline color to light-green-->
                <div class="row">
                  <div class="input-field col s12">
                    <!--<i class="material-icons prefix">help</i>-->
                    <input id="first" type="text" name="first">
                    <label for="first">Full Name</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <!--<i class="material-icons prefix">help</i>-->
                    <input id="em" type="email" name="em">
                    <label for="em">E-Mail</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <!--<i class="material-icons prefix">help</i>-->
                    <input id="user" type="text" name="user">
                    <label for="user">Username</label>
                  </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                      <!--<i class="material-icons prefix">email</i>-->
                        <input id="pass" type="password" name="pass">
                        <label for="pass">Password</label>
                    </div>
                </div>
                <div class="row center-align">
                  <button class="waves-effect waves-light btn yellow darken-1 modal-trigger black-text btn-small" name="submit" type="button" value="Send" id="registersubmit">Submit</button>
                </div> 

                <div class="row">
                  <div id="cform-message" class="col s12"></div>
                </div>
              </form>
        </div>
        </div>
      </div>
    </div>




<header>
  <nav class="yellow darken-1 black-text">
    <div class="nav-wrapper">
      <ul class="right hide-on-med-and-down">
        <li><a href="badges.html">Upcoming Events</a></li>
        <li><a href="http://sulley.cah.ucf.edu/~group9/Versions/david/display-list.php">UCF Clubs</a></li>
        <li><a href="badges.html">Login</a></li>
        <li><a href="badges.html">Register</a></li>
      </ul>
    </div>
  </nav>




        <!-- hero image -->
        <!-- parallax -->
        <div class="parallax-container">
            <div class="parallax"><img src="http://sulley.cah.ucf.edu/~group9/Versions/david/images/hero.jpg" alt ="" width="60%"></div>
            <div class="parallax-text center">
              <div class="hero-text">
                <h1>UCF ClubHub</h1>
                <p>Connect with UCF Clubs</p>
              </div>
            </div>
        </div>

      <!-- Modal Structure -->
      <div id="modal1" class="modal black-text">
        <div class="modal-content">
          <div class="row black-text valign wrapper">
              
          </div>
        </div>


<!--
        <div class="modal-footer">
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat"></a>
        </div>
-->
      </div>
      <div id="modal2" class="modal black-text">
        <div class="modal-content">
          <div class="row black-text valign wrapper">
              <form id="create_form" class="col s12 m8 offset-m2" method="POST" action="create.php">
                <!--change underline color to light-green-->
                <h3>Create an Account</h3>
                <div class="row">
                  <div class="input-field col s12">
                    <!--<i class="material-icons prefix">help</i>-->
                    <input id="first" type="text" name="first">
                    <label for="first">First Name</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <!--<i class="material-icons prefix">help</i>-->
                    <input id="em" type="email" name="em">
                    <label for="em">E-Mail</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <!--<i class="material-icons prefix">help</i>-->
                    <input id="user" type="text" name="user">
                    <label for="user">Username</label>
                  </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                      <!--<i class="material-icons prefix">email</i>-->
                        <input id="pass" type="password" name="pass">
                        <label for="pass">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6 right-align">
                      <a id="login-link" class="modal-trigger" href="#">Login</a>
                    </div>
                    <div class="col s6">
                      <a href="#">Reset Password</a>
                    </div>

                </div>
                <div class="row">
                  <button class="waves-effect waves-light btn yellow darken-1 modal-trigger black-text" name="submit" type="button" value="Send" id="create-submit">Create Account</button>  
                </div> 

                <div class="row">
                  <div id="cform-message" class="col s12"></div>
                </div>
              </form>
          </div>
        </div>
<!--
        <div class="modal-footer">
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat"></a>
        </div>
-->
      </div> 
    


    </header>



  <main> 

    <div class="row center">
      <div class="col s12">
      <div class="col s4">
        <h4>Upcoming Events</h4>
        <i class="large material-icons">event</i>
      </div>
      <div class="col s4">
        <br><img src="http://sulley.cah.ucf.edu/~group9/Versions/david/images/ucfvector.jpg" alt ="">
      </div>
      <div class="col s4">
        <h4>Browse Clubs</h4>
        <i class="large material-icons">event_note</i>
      </div>
      </div>
    </div>



    <div class="parallax-container">
      <div class="parallax"><img src="http://sulley.cah.ucf.edu/~group9/Versions/david/images/stadium.jpg" alt ="" ></div>
    </div>
          <div class="section black">
            <div class="row">
              <div class="col s12">
                <h2 class="center clubs">UCF Clubs</h2>
              
                <?php 
$sql = "SELECT clubname, clubimage, clubdescription FROM clubhub2";
$result = $conn->query($sql);
$conn->close();
echo "<hr class= 'line' > ";
if ($result->num_rows > 0) {
	echo "<div class='display black'>
	";
	echo "<img class='big-logo' alt='' src='http://sulley.cah.ucf.edu/~da970030/test/ucfclubhub-logo1.png'>";
   while($row = $result->fetch_assoc()){
		echo "<div class='container1'> 
		      <img class='image' alt='bn' src=".$row["clubimage"].">
			  <div class='name'><h3>" . $row["clubname"]. "</h3></div>
			  <div class='des'><p>" . $row["clubdescription"]. "</p></div>
			  <img class='small-calendar' alt='' src='http://sulley.cah.ucf.edu/~group9/Versions/david/images/calendarlogos/calendarlogo".date("d").".png'>
			  </div>
			  <hr>
			
			  ";
		  
   }
   } 
   else
   {
    echo "0 results";
	
} ?>
  </div>
    </div>

<?php 
echo "</div>";
echo "</div>";
 ?> 
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="parallax-container">
            <div class="parallax"><img src="http://sulley.cah.ucf.edu/~group9/Versions/david/images/calendar.jpg" alt =""></div>
        </div>


        <div class="container">
          <div class="section">
            <div class="row">
              <div class="col s12">
                <h2 class="center">Event Calendar</h2>
              </div>
            </div>
          </div>
        </div>
    </main>
      
      <footer class="page-footer black">
            <div class="container">
                <div class="row">
                    <div class="col l5 s12">
                        <h5 class="white-text center-align">Information</h5>
                        <p class="grey-text text-lighten-4 center-align">Club Hub<br>900 Street<br>Orlando, FL 32828</p>
                    </div>
                <div class="col l2 s12">
                    <a class="weatherwidget-io" href="https://forecast7.com/en/28d54n81d38/orlando/?unit=us" data-label_1="ORLANDO" data-label_2="WEATHER" data-mode="Current" data-days="3" data-theme="original" data-basecolor="#000000" data-textcolor="#FFC904" data-highcolor="" data-lowcolor="">SIDNEY WEATHER</a>
                </div>
                <div class="col l5 s12 center-align">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Link1</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link2</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link3</a></li>
                        <li> 
			                <a class="white-text" href="https://www.facebook.com"><img class="socialmedialogos" style="width: 40px; height:40px;" src="http://sulley.cah.ucf.edu/~group9/Versions/david/images/facebook.jpg" alt ="" ></a>
			                <a class="white-text" href="https://www.instagram.com" ><img class="socialmedialogos" style="width: 40px; height:40px;" alt =""  src="http://sulley.cah.ucf.edu/~group9/Versions/david/images/instagram.jpg"></a>
			                <a class="white-text" href="https://www.twitter.com"><img class="socialmedialogos" alt =""  style="width: 40px; height:40px;" src="http://sulley.cah.ucf.edu/~group9/Versions/david/images/twitter.jpg"></a>
			            </li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container center-align">
                    &copy; 2018 Club Hub
                </div>
          </div>
        </footer>
    
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script>
      $(document).ready(function(){
        $('.parallax').parallax();
        $(".button-collapse").sideNav();
        $('.carousel.carousel-slider').carousel({fullWidth: true});
        $('.carousel').carousel();
        $('.modal').modal();
        
        $("#create-link").click(function(){
          $('#modal1').modal('close');
          $('#modal2').modal('open');
        });
        $("#login-link").click(function(){
          $('#modal2').modal('close');
          $('#modal1').modal('open');
        });

        
        $("#create-submit").click(function(){
          var cFormData = $("#create_form").serialize();
          $.post("create.php", cFormData, function(data, status){
            $("#cform-message").html(data);
          });
        });        
        
        $("#login-submit").click(function(){
          var lFormData = $("#login_form").serialize();
          $.post("login.php", lFormData, function(data, status){
            $("#lform-message").html(data);
          });
        });
        
//        .click event for create account, swaps form on click
        // move login form to seperate php, call on login click, create link back on account created
        
        // Adding oils, check if user generated in database
        // Add x to exit on modal
        
      });

        
    // show&hide login/register forms
        $(document).ready(function(){
    $("#loginbutton").click(function(){
        $("#registerform").hide();
         $('#loginform').slideToggle("slow");
    });
});
        
             $(document).ready(function(){
    $("#registerbutton").click(function(){
        $("#loginform").hide();
         $('#registerform').slideToggle("slow");
    });
});
        
                  $(document).ready(function(){
    $(".button-collapse").click(function(){
        $(".sidebar").hide();
         $('.sidebar').slideToggle("slow");
    });
});
        
/* weather widget */
        !function (d, s, id) {var js, fjs = d.getElementsByTagName(s)[0]; if (!d.getElementById(id)) {js = d.createElement(s); js.id = id; js.src = 'https://weatherwidget.io/js/widget.min.js'; fjs.parentNode.insertBefore(js, fjs); } }(document, 'script', 'weatherwidget-io-js');
        
    </script>

  </body>
</html>

