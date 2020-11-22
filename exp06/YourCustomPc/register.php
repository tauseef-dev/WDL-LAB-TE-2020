<?PHP

//Connection Variables
$servername = "127.0.0.1:3306";
$username = "student";
$password = "student";
$dbname = "uniquedb";


$name  = $_POST['name'];
$email = $_POST['emailreg'];
$pass = $_POST['passwordreg'];




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO registeruser (name, email, password) VALUES ('$name', '$email', '$pass')";
$result = $conn->query($sql);

if ($result === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>