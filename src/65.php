<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectforschool";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检查连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

// 选择数据库
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["email"] . "</td>
                    <td>" . $row["age"] . "</td>
                    <td>" . $row["gender"] . "</td>
                    <td>
                        <a href='edit_student.php?id=" . $row["id"] . "'>Edit</a> |
                        <a href='delete_student.php?id=" . $row["id"] . "'>Delete</a>
                    </td>
                </tr>";
    }
}
$conn->close();
?>
