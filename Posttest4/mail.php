<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
}else {
    echo "couldn't reach website";
    die();
}

// $mailheader = "From:".$name."<".$email.">\r\n";

// $recipient = "purnomodifa@gmail.com";

// mail($recipient, $phone, $subject, $message, $mailheader) or die("Error!");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylee.css">
    <style>
    body {
        font-family: 'Poppins', sans-serif;
    }
    .container {
        width: 80%;
        margin: 0 auto;
        text-align: center;
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }
    td {
        padding: 10px;
        border: 1px solid #000;
    }
    table {
        margin-top: 30px; /* Add top margin to create space from table to headings */
    }
    h1 {
        margin-top: 30px; /* Add top margin to create space from headings to table */
    }
    .back {
        margin-top: 30px; /* Add top margin to create space between the "Go back" link and the table */
    }
</style>

</head>
<body>
    <div class="container">
        <h1>BoxSound Order Detail</h1>
        <table>
            <tr>
                <td>Name:</td>
                <td><?php echo $name ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?php echo $email ?></td>
            </tr>
            <tr>
                <td>Phone:</td>
                <td><?php echo $phone ?></td>
            </tr>
            <tr>
                <td>Subject:</td>
                <td><?php echo $subject ?></td>
            </tr>
            <tr>
                <td>Message:</td>
                <td><?php echo $message ?></td>
            </tr>
        </table>
        <h1>Thank you for your order. We will send your order as soon as possible!</h1>
        <p class="back">Go back to the <a href="index.html">homepage</a>.</p>
    </div>
</body>
</html>
