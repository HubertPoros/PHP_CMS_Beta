<?php 
    session_start();
	include 'includes/db.php';

    $per_page = 5;
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    } else{
        $page = 1;
    }
    $start_from = ($page-1) * $per_page;
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
            <!-- Page Content -->
        <div class="container" style="margin-top:40px;">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Najnowsze Wiadomości. 
                    <small>Z Ostatniej Chwili</small>
                </h1> </div>
                </div>
                <!-- /.row -->
                <!-- Project One -->
                <?php
	$sel_sql = "SELECT * FROM posts WHERE category = '$_GET[cat_id]' ORDER BY id DESC LIMIT $start_from,$per_page";
	$run_sql = mysqli_query($conn,$sel_sql);
	while($rows = mysqli_fetch_assoc($run_sql))
		{
			echo '
			<div class="row">
				<div class="col-md-6">
					<a href="post.php?post_id='.$rows['id'].'">
						<img class="img-responsive" src="'.$rows['image'].'" alt="">
					</a>
				</div>
				<div class="col-md-6">
					<h3>'.$rows['title'].'</h3>
					<p>'.substr($rows['description'],0,300).'...</p>
					<a class="btn btn-primary" href="post.php?post_id='.$rows['id'].'">Zobacz Post 
					<span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>
			</div>

			<hr>';
		
		}
?>
                    <hr>
                    <div class="text-center">
                        <ul class="pagination">
                            <?php 
                    $pagination_sql = "SELECT * FROM posts WHERE status = 'publish'";
                    $run_pagination = mysqli_query($conn, $pagination_sql);
                
                    $count = mysqli_num_rows($run_pagination);
                    $total_pages = ceil($count/$per_page);
                
                    for($i=1; $i<=$total_pages; $i++){
                        echo '<li><a href="index.php?page='.$i.'">'.$i.'</a></li>';
                    }
                ?>
                        </ul>
                    </div>
                    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
                    <!-- Include all compiled plugins (below), or include individual files as needed -->
                    <script src="js/bootstrap.min.js"></script>
                    <!-- Latest compiled and minified JavaScript -->
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>

    </html>