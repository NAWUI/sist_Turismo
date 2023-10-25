<?php
include("../connection.php");

// Query to fetch data
$sql = "SELECT * FROM localidades WHERE 1";
$result = mysqli_query($conn,$sql);

// Check if there are results
if ($result->num_rows > 0) {
    // Output data as JSON (you can choose another format if needed)
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);
} else {
    echo "No data found";
}

// Close the database connection
$conn->close();
?>
