<?php
    include 'includes/db.php';

    if (isset($_POST['submit_contact']))
        {
            $date = date('Y-m-d h:i:s');
            $ins_sql = "INSERT INTO comments (name, email, subject, comment, date) VALUES ('$_POST[name]', '$_POST[email]', '$_POST[subject]', '$_POST[comments]', '$date' )";
            $run_sql = mysqli_query($conn, $ins_sql);
        }
	session_start();

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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'> </head>

    <body>
        <?php include 'includes/header.php'; ?>
            <div class="container" style="margin-top:40px;">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="well well-sm">
                            <form class="form-horizontal" action="kontakt.php" method="post">
                                <fieldset>
                                    <legend class="text-center">Kontakt</legend>
                                    <!-- Name input-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">Twoje Imię</label>
                                        <div class="col-md-9">
                                            <input id="name" name="name" type="text" placeholder="Twoje Imię" class="form-control"> </div>
                                    </div>
                                    <!-- Email input-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="email">Twój E-Mail</label>
                                        <div class="col-md-9">
                                            <input id="email" name="email" type="text" placeholder="Twój E-Mail" class="form-control"> </div>
                                    </div>
                                    <!-- Subject input-->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="email">Temat</label>
                                        <div class="col-md-9">
                                            <input id="subject" name="subject" type="text" placeholder="Temat" class="form-control"> </div>
                                    </div>
                                    <!-- Message body -->
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="message">Twoja Wiadomość</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" id="comments" name="comments" placeholder="Tutaj wpisz treść twojej wiadomości..." rows="5"></textarea>
                                        </div>
                                    </div>
                                    <!-- Form actions -->
                                    <div class="form-group">
                                        <div class="col-md-12 text-right">
                                            <input type="submit" value="Wyślij Wiadomość" name="submit_contact" class="btn btn-block btn-danger" id="subject"> </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/bootstrap.min.js"></script>
            <!-- Latest compiled and minified JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>

    </html>