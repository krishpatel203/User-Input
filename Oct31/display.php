<?php
// Include the database connection file
include 'db_connection.php';

// SQL query to select all records from the table
$sql = "SELECT * FROM info10312024";
$result = mysqli_query($conn, $sql);

// Check if there are any records
if (mysqli_num_rows($result) > 0) {
    // Start the HTML table
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Status</th>
                <th>Description</th>
            </tr>";

    // Output data for each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['phone'] . "</td>
                <td>" . $row['status'] . "</td>
                <td>" . $row['description'] . "</td>
              </tr>";
    }

    // End the HTML table
    echo "</table>";
} else {
    echo "No records found.";
}

// Close the database connection
mysqli_close($conn);
?>
