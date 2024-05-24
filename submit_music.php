<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $artist_name = htmlspecialchars($_POST['artist_name']);
    $song_title = htmlspecialchars($_POST['song_title']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Submission Failed</title>
            <style>
                body { font-family: Arial, sans-serif; background-color: #f4f4f4; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
                .container { background-color: #fff; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 8px; max-width: 500px; width: 100%; }
                h1 { color: #dc3545; }
                p { color: #333; }
            </style>
        </head>
        <body>
            <div class='container'>
                <h1>Submission Failed</h1>
                <p>Invalid email address. Please try again.</p>
            </div>
        </body>
        </html>";
        exit;
    }

    // Save the form data (e.g., to a database or send an email)
    // This is a placeholder. Implement your data storage or email sending here.

    // Display success message
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Submission Successful</title>
        <style>
            body { font-family: Arial, sans-serif; background-color: #f4f4f4; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
            .container { background-color: #fff; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 8px; max-width: 500px; width: 100%; }
            h1 { color: #28a745; }
            p { color: #333; }
        </style>
    </head>
    <body>
        <div class='container'>
            <h1>Submission Successful</h1>
            <p>Thank you, $artist_name. Your song has been submitted successfully.</p>
        </div>
    </body>
    </html>";
}
?>
