<?php

// Include the database connection
include 'database_connection.php';

// Assume $_POST['id'] contains the ID of the record to be deleted

if(isset($_POST['id'])) {
    $id = $_POST['id'];

    // Prepare a SQL statement to delete the record
    $sql = "DELETE FROM table_name WHERE id = :id";
    $stmt = $pdo->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    // Execute the statement
    if($stmt->execute()) {
        echo json_encode(array('success' => 'Record deleted successfully'));
    } else {
        echo json_encode(array('error' => 'Unable to delete record'));
    }
} else {
    echo json_encode(array('error' => 'ID parameter is missing'));
}

?>

