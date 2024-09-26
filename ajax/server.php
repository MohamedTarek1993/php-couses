<?php 
session_start();

 header('Content-Type: application/json');
// Database connection
$connection = mysqli_connect('localhost', 'root', '', 'form');

// Check connection
if (!$connection) {
    echo json_encode(array(
        'status' => 'error',
        'message' => 'Database connection failed: ' . mysqli_connect_error()
    ));
    exit;
}

$response = array();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Sanitize inputs
    $name = htmlspecialchars($name);
    $email = htmlspecialchars($email);
    $phone = htmlspecialchars($phone);

    // Validate inputs
    if (empty($name) || empty($email) || empty($phone)) {
        $response['status'] = 'error';
        $response['message'] = 'All fields are required';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['status'] = 'error';
        $response['message'] = 'Invalid email format';
    } elseif (strlen($phone) != 8) {  // Adjust length as needed
        $response['status'] = 'error';
        $response['message'] = 'Invalid phone number';
    } else {
        // Using prepared statements to prevent SQL injection
        $query = "INSERT INTO form1(name, email, phone) VALUES(?, ?, ?)";
        if ($stmt = mysqli_prepare($connection, $query)) {
            mysqli_stmt_bind_param($stmt, "sss", $name, $email, $phone);
            if (mysqli_stmt_execute($stmt)) {
                $response['status'] = 'success';
                $response['message'] = 'Form submitted successfully';
            } else {
                $response['status'] = 'error';
                $response['message'] = 'Database query failed';
            }
            mysqli_stmt_close($stmt);
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Database query preparation failed';
        }
    }
} else {
    $response['status'] = 'error';
    $response['message'] = 'Invalid request';
}

// Close the connection
mysqli_close($connection);

// Send JSON response
echo json_encode($response);
?>
