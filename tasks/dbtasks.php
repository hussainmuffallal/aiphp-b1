
<?php
    session_start();
    if(!isset($_SESSION['userloggedin'])) {
        header('Location: ../login.php');
        exit();
    }
?>

<?php
    // Enable error reporting
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "aiphp";

    // Check if the form has been submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get the form data
        $ListName = $_POST['ListName'];
        $Caption = $_POST['Caption'];
        $email=$_SESSION['userloggedin'];

        

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and execute the SQL statement
        $stmt = $conn->prepare("INSERT INTO tasks (ListName, Caption, Email) VALUES (?, ?,?)");
        $stmt->bind_param("sss", $ListName, $Caption, $email);

        if ($stmt->execute()) {
            header('Location:index.php?inserted');
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement and connection
        $stmt->close();
        $conn->close();
    }


    // Check if a delete request is made
    if(isset($_GET['delid'])){
        $delid = $_GET['delid'];
        $conn = new mysqli($servername, $username, $password, $dbname);
        $stmt = $conn->prepare("DELETE FROM task WHERE ListName = ?");
        $stmt->bind_param("s", $delid);
        if($stmt->execute()){
            header('Location:tasks/index.php?deleted');
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
        $conn->close();
    }
?>