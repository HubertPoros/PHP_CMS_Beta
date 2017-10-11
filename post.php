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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> </head>

    <body>
        <?php include 'includes/header.php'; ?>
            <!-- Zawartość Strony -->
            <div class="container" style="margin-top:40px;>
                <?php
			$sel_sql = " SELECT * FROM posts WHERE id='$_GET[post_id]' ";
			$run_sql = mysqli_query($conn,$sel_sql);
			while($rows = mysqli_fetch_assoc($run_sql))
				{
					echo '
					<div class="row ">
						<!-- Zawartość Postu -->
						<div class="col-lg-12 ">
							<!-- Tytuł -->
							<h1>'.$rows['title'].'</h1>

							<!-- Autor -->
							<p class="lead ">
								by <a href="# ">'.$rows['author'].'</a>
							</p>

							<hr>

							<!-- Źródło -->
							<p><span class="glyphicon glyphicon-time "></span> Źródło : eurosport.onet.pl </p>

							<hr>

							<!-- Obraz -->
							<img class="img-responsive " src=" '.$rows['image'].' " alt=" " style="display:block;margin:auto ">

							<hr>

							<!-- Tekst Postu -->
							<p class="lead ">'.$rows['description'].'</p>

							<hr>';
				
				}
		?>
		
            </div>
            </div>
            </div>
            <!-- /.row -->
            <hr>
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js "></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/bootstrap.min.js "></script>
            <!-- Latest compiled and minified JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js " integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa " crossorigin="anonymous "></script>
    </body>

    </html>