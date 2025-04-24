<?php
    $servername = "localhost";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database";

    try {
        $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Execute SQL query
        $stmt = $conn->query("SELECT * FROM students");
        if ($stmt->execute()) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "ID: " . $row["id"] . "\n";
                echo "Name: " . $row["name"] . "\n";
                echo "Age: " . $row["age"] . "\n";
                echo "Email: " . $row["email"] . "\n\n";
            }
        } else {
            echo "No students found.";
        }

    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
?>
