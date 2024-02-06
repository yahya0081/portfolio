<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Validate form data (add more validation as needed)
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all required fields.";
        exit;
    }

    // Database configuration
    $servername = "localhost";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Compose the SQL query to insert data into the database
    $sql = "INSERT INTO contact_form_data (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Your message has been sent successfully and saved to the database. We'll get back to you soon!";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }

    // Close the database connection
    $conn->close();
}
?>
