<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Got Rick Rolled</title>
    <style>
        body {
            margin: 0;
            overflow: hidden;
        }
        h1 {
            color: red;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
        iframe {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <h1>Rick Rolled you, haha!</h1>
    <iframe src="https://www.youtube.com/embed/SXHMnicI6Pg?autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

    <script>
        // Display the user's IP address in an alert dialog using JavaScript
        var userIP = <?php echo json_encode($_SERVER['REMOTE_ADDR']); ?>;
        alert("Your IP address is: " + userIP);
    </script>    

</body>
</html>