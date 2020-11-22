<?PHP

//Connection Variables
$servername = "localhost";
$username = "root";
$password = "sam";
$dbname = "uniquedb";


$email = $_POST['email'];
$pass = $_POST['password'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "SELECT Email, Password FROM currentusers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if($email == $row["Email"] and $pass == $row["Password"])
    {

    	header( 'Location: YourCustomPc.html' ) ;
    }
    else
    {

     	
     	
  
     	header( 'Location: login.html' );
     	
     	
    }
  }
} else {
  echo "0 results";
}
$conn->close();

?>