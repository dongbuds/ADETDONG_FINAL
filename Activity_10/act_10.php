<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adetdong";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, Email, Last_name, First_name FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Last Name</th>
                <th>First Name</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["ID"] . "</td>
                <td>" . $row["Email"] . "</td>
                <td>" . $row["Last_name"] . "</td>
                <td>" . $row["First_name"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}

$conn->close();
?>