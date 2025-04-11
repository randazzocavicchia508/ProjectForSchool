<?php
// Initialize global variables
global $servername, $username, $password, $dbname;

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ProjectForSchool";

// Create a new database if it doesn't exist
if (!databaseExists($servername, $username, $password, $dbname)) {
    echo "Database does not exist.";
}
else {
    // Connect to the database
    $conn = mysqli_connect($servername, $username, $password, $dbname);
}

// Check for connection error
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// SQL query to select all records from a table named 'students'
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

// Display the results of the query
if ($result) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Age</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['age'] . "</td></tr>";
    }
    echo "</table>";
}
else {
    echo "Failed to retrieve data from the database.";
}

// Close the database connection
mysqli_close($conn);
?>
