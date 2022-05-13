<$php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$message = $_POST['message'];

$conn = new mysqli('localhost', 'root', '', 'supa_sax');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into contact(fname, lname, email, message")
        values(?, ?, ?, ?);
    
        $stmt->bind_baram)("ssss", $fname, $lname, $email, $message);
        $stmt->execute();
        echo "Message received successfully";
        $stmt->close();
        $conn->close();

    }

    
?>