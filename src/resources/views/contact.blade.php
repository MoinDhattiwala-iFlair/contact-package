<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>

<body>
    <h1>Contact us at any time</h1>
    <form action="" method="post">
        @csrf
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <textarea name="message" cols="30" rows="5" placeholder="Message" required></textarea>
        <input type="submit" value="Submit">

    </form>
</body>

</html>
