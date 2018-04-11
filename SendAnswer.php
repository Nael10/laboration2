<!doctype html>
<html>
    <head>
        <title>Example form</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>Thank you!</h1>

            <?php
            $userName = $_GET['name'];
            $userAge = $_GET['age'];
            $userMail = $_GET['email'];
            ?>
            <form action="hello.php" method="get">
                <br> Name: <?php echo $userName; ?> <br>
                <br> Age:  <?php echo $userAge; ?> <br>
                <br> Email: <?php echo $userMail; ?> <br>

                <div class="form-group">
                  <br>  <input type="submit" value="Back to the form!" class="btn btn-success"><br>
                </div>
            </form>
        </div>
    </body>
</html>
