<?php
include("../Functions/functions.php"); // Make sure this file contains your connection code

// Check if the farmer ID is provided in the URL
if (isset($_GET['id'])) {
    // Get the farmer_id from the URL
    $farmer_id = $_GET['id'];

    // Prepare and execute the SQL query to fetch farmer details
    $query = "SELECT * FROM farmerregistration WHERE farmer_id = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("i", $farmer_id); // "i" stands for integer
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if any farmer data is returned
    if ($result->num_rows > 0) {
        // Fetch the farmer's details
        $farmer = $result->fetch_assoc();
    } else {
        echo "No farmer found with the given ID.";
        exit();
    }
} else {
    echo "Invalid request. Farmer ID is not provided.";
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Farmer Profile</h1>
        <div class="card mt-4">
            <div class="card-body">
                <h3 class="card-title">Farmer Name: <?php echo htmlspecialchars($farmer['farmer_name']); ?></h3>
                <p class="card-text"><strong>Address:</strong> <?php echo htmlspecialchars($farmer['farmer_address']); ?></p>
                <p class="card-text"><strong>Region:</strong> <?php echo htmlspecialchars($farmer['farmer_state']); ?></p>
                <p class="card-text"><strong>District:</strong> <?php echo htmlspecialchars($farmer['farmer_district']); ?></p>
                <p class="card-text"><strong>Phone Number:</strong> <?php echo htmlspecialchars($farmer['farmer_phone']); ?></p>
                <!-- Add any additional details that you want to display from the farmerregistration table -->
                <a href="farmers.php" class="btn btn-primary">Back to Farmers List</a>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
