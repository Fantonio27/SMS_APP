<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Send Message</title>
<link rel="stylesheet" href="css/style.css">
<link rel="Shortcut Icon" href= "image/logo.png">
</head>
<body>
    <fieldsheet>
        <legend>Send SMS</legend>

        <form action="post.php" method="POST">
        <div>
            <input type=text" name="number" required>
            <span>Phone Number</span>
        </div>    
        <div>
            <input type="text" name="message" required>
            <span>Message</span>
        </div> 

        <input type="submit" class="btnSend">
        </form>
    </fieldsheet>    
</body>
</html>
