<?php
    include 'includes/db.php';
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
        <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
        <link href="css/about.css" rel="stylesheet"> </head>

    <body>
        <?php include 'includes/header.php'; ?>
            <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
            <section id="about" class="section-content about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <figure class="fig-profile wow fadeIn" style="visibility: visible; animation-name: fadeIn;"> <img class="img-responsive img-circle img-profile" title="Roland Maruntelu" alt="Roland Maruntelu" src="images/profile.jpg">
                                <figcaption>Hello !</figcaption>
                            </figure>
                            <div class="clearfix"></div>
                            <h2 class="name"><b>Hubert</b> Poros</</h2>
                            <h3 class="position">Student Informatyki & Web Developer</h3>
                            <h4 class="text-center location">Miejsce Zamieszkania : Busko-Zdrój</h4>
                            <div class="title-divider"> <span class="hr-divider col-xs-5"></span> <span class="icon-separator col-xs-2"><i class="fa fa-star"></i></span> <span class="hr-divider col-xs-5"></span> </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/bootstrap.min.js"></script>
            <!-- Latest compiled and minified JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>

    </html>