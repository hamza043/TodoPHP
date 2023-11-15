<?php

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "todo_db";

// $conn = mysqli_connect($servername, $username, $password, $database) or die("Connection Failed");


// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }


// if(isset($_POST['date']) && isset($_POST['text'])) {
//     $date = $_POST['date'];
//     $text = $_POST['text'];

//     $sql = "INSERT INTO todo_tbl (date, task) VALUES ('$date', '$text')";

//     if ($conn->query($sql) === TRUE) {
//         $result = $conn ->query("SELECT * FROM todo_tbl");
//         if($result->num_rows > 0) {
//             $output = "";
//             while($row = $result->fetch_assoc()){
//                 $output .= "<li>{$row["id"]}<b>:</b> {$row["date"]} - {$row["task"]}</li>";
//             }
//             echo $output;
//         }
//         else{
//             echo "No data available";
//         }
//     }
//         else{
//             echo "Error: " . $sql . "<br>" . $conn->error;
//         }
//         $conn->close();
//     }
?>