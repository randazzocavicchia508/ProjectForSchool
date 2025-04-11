<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "schoolproject";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    echo "Connected successfully";
    
    $query = "SELECT * FROM students";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["class"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "No students found.";
    }

    $conn->close();
?>
