<!DOCTYPE html>
<html> 
  <head>
    <title>Processing.JS inside Webpages: Template</title> 
  </head>
  <body>
	  <button></button>
	  <?php
	$servername = "localhost";
$username = "sql9609690";
$password = "s24BhEihFV";
$dbname = "sql9609690";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
	<!--This draws the canvas on the webpage -->
    <canvas id="mycanvas"></canvas> 
  </body>
 
  <!-- Include the processing.js library -->
  <!-- See https://khanacademy.zendesk.com/hc/en-us/articles/202260404-What-parts-of-ProcessingJS-does-Khan-Academy-support- for differences -->
  <script src="https://cdn.jsdelivr.net/processing.js/1.4.8/processing.min.js"></script> 
  <script>
	 /*
var connection = new ActiveXObject("ADODB.Connection") ;

var connectionstring="Data Source=sql9.freesqldatabase.com;Initial Catalog=<catalog>;User ID=sql9609690;Password=s24BhEihFV;Provider=SQLOLEDB";

connection.Open(connectionstring);
var rs = new ActiveXObject("ADODB.Recordset");

rs.Open("SELECT * FROM table", connection);
rs.MoveFirst
while(!rs.eof)
{
   document.write(rs.fields(1));
   rs.movenext;
}

	  
rs.close;
connection.close; */
  var programCode = function(processingInstance) {
    with (processingInstance) {
      size(400, 400); 
      frameRate(30);
        
      // Paste code from Khan Academy here:
      fill(255, 255, 0);
      ellipse(200, 200, 200, 200);
      noFill();
      stroke(0, 0, 0);
      strokeWeight(2);
      arc(200, 200, 150, 100, 0, PI);
      fill(0, 0, 0);
      ellipse(250, 200, 10, 10);
      ellipse(153, 200, 10, 10);
    }};

  // Get the canvas that ProcessingJS will use
  var canvas = document.getElementById("mycanvas"); 
  // Pass the function to ProcessingJS constructor
  var processingInstance = new Processing(canvas, programCode); 
  </script>
</html>
