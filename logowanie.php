<?php
    include 'includes/db.php';
	session_start();

    $login_err = '';
    if(isset($_GET['login_error']))
    {
        if($_GET['login_error'] == 'empty')
        {
            $login_err = '<div class="alert alert-danger">Login albo hasło nieprawidłowe</div>';
        } elseif($_GET['login_error'] == 'wrong')
        {
            $login_err = '<div class="alert alert-danger">Login albo hasło nieprawidłowe</div>';
        } elseif($_GET['login_error'] == 'query_error')
        {
            $login_err = '<div class="alert alert-danger">Problem z bazą danych!</div>';
        }
    }
?>
    <!DOCTYPE html>
    <html lang="pl">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Serwis Sportowy</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> </head>

    <body>
        <?php include 'includes/header.php'; ?>
            <section>
                <div class="well" style="margin-top:40px;">
                    <div class="cointainer text-center">
                        <h3>Zaloguj Się </h3>
                        <p>Podaj Swój Login i Hasło</p>
                        <form action="accounts/login.php" class="form-inline" method="post" role="form">
                            <div class="form-group">
                                <label for="username">Login</label>
                                <input type="text" id="username" placeholder="Twój Login" name="user_name" class="form-control"> </div>
                            <div class="form-group">
                                <label for="password">Hasło</label>
                                <input type="password" id="password" class="form-control" name="password" placeholder="Twoje Hasło"> </div>
                            <input type="submit" class="btn btn-warning" name="submit_login">
                            <hr> </form>
                    </div>
                </div>
            </section>
            <?php echo $login_err; ?>
                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
                <!-- Include all compiled plugins (below), or include individual files as needed -->
                <script src="js/bootstrap.min.js"></script>
                <!-- Latest compiled and minified JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>

    </html>