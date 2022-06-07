<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- webpack5 compile-->
    <script src="./dist/js/app.js" defer module></script>
    <script src="./dist/js/main.js" defer module></script>
    <link type="text/css" rel="stylesheet" href="./dist/style/styles.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon">
    <link rel="icon" href="./assets/favicon.ico" type="image/x-icon">
    <title>Info</title>
</head>

<body>
    <div class="text-center mt-5">
        <h1>Current PHP version: <?php echo phpversion(); ?></h1>
        <h3>You must have PHP 8.0 or above to <a href="./php" class="link-success">continue.</a><br>Please update your PHP if you do not meet with the requirements.</h3>
        <h3>If you still wish to proceed, click <a href="./php" class="link-primary">here.</a></h3>
        <div class="container mt-5">
            <h2>Your PHP info:</h2>
            <?php phpinfo(); ?>
        </div>
    </div>
</body>

</html>