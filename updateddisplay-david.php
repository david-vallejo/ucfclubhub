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
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Simple List Filter Materialize with collapsible</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="http://sulley.cah.ucf.edu/~da970030/test/clubhub-david.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--CDN for materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!--Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="http://sulley.cah.ucf.edu/~da970030/test/styles1.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>


  <div class="container">
  <?php 
$sql = "SELECT clubname, clubimage, clubdescription FROM clubhub2";
$result = $conn->query($sql);
$conn->close();
if ($result->num_rows > 0) {
	echo "<img class='big-logo' alt='' src='http://sulley.cah.ucf.edu/~da970030/test/ucfclubhub-logo1.png'>";
   while($row = $result->fetch_assoc()){
  echo " 
  <div class='card'>
        <div class='row card-title'>
            <span class='col s3'>
              TITLE
            </span>
            <div class='col s9'>
                <div class='btnWrapper'>
                    <a class='btn-floating btn-small waves-effect waves-light right'><i class='material-icons'>send</i></a>
                    <a class='btn-floating btn-small waves-effect waves-light right'><i class='material-icons'>add</i></a>
                    <a id='btnSearch' class='btn-floating btn-small waves-effect waves-light right'><i class='material-icons'>search</i></a>
                    <span class='teal lighten-1 right searchWrapper' style='display: none'>
                        <input id='searchInput' type='search'>
                    </span>
                </div>
            </div>
        </div>
        <div class='row card-content'>
            <ul class='collapsible'>
                <li class='collapsible-header'>
                    <div class='col s4 center'><strong>Club Name</strong></div>
                    <div class='col s4 center'><strong>Meeting Meeting Time</strong></div>
                    <div class='col s4 center'><strong>Location</strong></div>
                </li>
                <li>
                    <div class='collapsible-header line' tabindex='0'>
                        <div class='col s4 center'><h3>" . $row["clubname"]. "</h3></div>
                        <div class='col s4 center'>column2</div>
                        <div class='col s4 center'>column3</div>
                    </div>
                    <div class='collapsible-body'>
					<img class='image' alt='bn' src=".$row["clubimage"].">
                     <div class='des'><p>" . $row["clubdescription"]. "</p></div>
                    </div>
                </li>
            </ul>
        </div>
        ";
		 }
   } 
   else
   {
    echo "0 results";
	
}  ?>
    </div>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.js'></script>

  






</body>

</html>
