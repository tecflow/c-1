<!-- subscribe.php -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['subscribe'])) {
    $email = $_POST['subscribe'];
} else {
    $message = "Please enter your email to subscribe.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribe</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #00937d;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-contet: center;
            margin-top: 300px;
        }

        /* Style the back button */
        .back-button {
            background-color: #4CAF50; /* Green */
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 20px;
            border-radius: 5px;
        }

        .back-button:hover {
            background-color: #45a049;
            scale: 1.2;
        }
    </style>
</head>
<body>
    <h1>Thanks For Your Subscribtion!</h1>
    
    <p><?php echo $message; ?></p>

       <a href="contact.php" class="back-button">Back to Page</a>

</body>
</html>