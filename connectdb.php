<!DOCTYPE html>

<html lang="en">
<head>
  <!-- External Style -->
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway">
	
   <!-- Internal Style -->	
   	<style>
           body {
             font-family: 'Raleway', serif;
             font-size: inherited;
            }     
       </style>
</head>
<body>

<?php
$servername = "localhost";
$username = "db-username-here";
$password = "db-password-here";
$dbname = "db_name-here";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO TableName (Column1, Column2, Column3, Column4)
VALUES ('$_POST[fieldname1]', '$_POST[fieldname2]', '$_POST[fieldname3]', '$_POST[fieldname4]')";

if ($conn->query($sql) === TRUE) {
    echo "<div align='center'>";
    echo "<h3>Your entry has been submitted.</h3>";
    echo "</div>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>
