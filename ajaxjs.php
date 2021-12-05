
<?php
// Fetching Values From URL
$name2 = $_POST['name1'];
$password2 = $_POST['password1'];
$email2 = $_POST['email1'];
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
$db = mysql_select_db("Guvi", $connection); // Selecting Database
if (isset($_POST['name1'])) {
$query = mysql_query("INSERT INTO accounts (name, password, email) values ($name2, $password2, $email2)"); //Insert Query
echo "Form Submitted succesfully";
// encode array to json
$json = json_encode($query);
//display it 
echo "$json";
//generate json file
file_put_contents("guvi_user.json", $json); 
}

mysql_close($connection); // Connection Closed
?>
