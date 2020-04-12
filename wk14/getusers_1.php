<h1>Get Users from Database</h1>
<form action="getusers_1.php" method='GET'>
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <input type="submit" value="Submit">
</form> 
<?php
// Set up error display
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// DB Config
$servername = "localhost";
$username = "ngale";
$db_name = "database_name";
$db_password = "ngale@";
// connect to database
$conn = new mysqli($servername, $username, $db_password, $db_name);
if($conn->connect_error){
   die("Connection failed: " . $conn->connect_error);
}
// Get data from form
if(isset($_GET['fname'])){
 $fname = $_GET['fname'];
// Query the users table
$sql = "SELECT * FROM users WHERE firstname='".$fname."' AND active=1";
echo $sql;
echo "<br>";
$result = $conn->query($sql);
// Create a while loop to display results in a table
echo "<table>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Username</th>";
echo "<th>Email</th>";
echo "<th>First Name</th>";
echo "<th>Last Name</th>";
echo "<th>Active</th>";
echo "</tr>";
if($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['username']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['firstname']."</td>";
    echo "<td>".$row['lastname']."</td>";
    echo "<td>".$row['active']."</td>";
    echo "</tr>";
}
}
else {
  echo "0 results";
}
$conn->close();

}
else {
 $fname = "";
}
?>