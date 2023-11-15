<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "todo_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handling the POST requests
if(isset($_POST['action'])){
    if($_POST['action'] == "insert"){
        if(isset($_POST['date']) && isset($_POST['task'])){
            $date = $_POST['date'];
            $task = $_POST['task'];

            $sql = "INSERT INTO todo_tbl (date, task) VALUES ('$date', '$task')";

            if ($conn->query($sql) !== TRUE){
                echo "Error: " . $sql . "<br>" . $conn->error;
            } else {
                echo "New record created successfully";
            }
        }
    } elseif($_POST['action'] == "select"){
        $result = $conn->query("SELECT * FROM todo_tbl");
        if($result->num_rows > 0) {
            $output = "";
            while($row = $result->fetch_assoc()){
                $output .= "<li>{$row["id"]}<b>:</b> {$row["date"]} - {$row["task"]}</li>";
            }
            echo $output;
        } else {
            echo "No task available";
        }
    }
}

// Close the database connection
$conn->close();
?>