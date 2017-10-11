<?php 
    session_start();
    
    include '../includes/db.php';
        if(isset($_SESSION['user']) && isset($_SESSION['password']) == true){
            $sel_sql = "SELECT * FROM users WHERE user_email = '$_SESSION[user]' AND user_password = '$_SESSION[password]'";
            if($run_sql = mysqli_query($conn, $sel_sql)){
                if(mysqli_num_rows($run_sql) == 1){
                
            } else {
                header('Location:../index.php');
            }
            }
        } else {
            header('Location:../index.php');
        }

$result = '';
if(isset($_GET['new_status'])){
    $new_status = $_GET['new_status'];
    $sql = "UPDATE posts SET status = '$new_status' WHERE id = $_GET[id]";
    if($run = mysqli_query($conn,$sql)){
        $result = '<div class="alert alert-success">We Just Updated The Status</div>';
    }
}

if(isset($_GET['del_id'])){
    $del_id = $_GET['del_id'];
    $sql = "DELETE FROM posts WHERE id = '$del_id'";
    if($run = mysqli_query($conn,$sql)){
        $result = '<div class="alert alert-danger"You Delete A Row no.'.$del_id.' From Database</div>';
    }
}

?>
    <!DOCTYPE html>
    <html lang="pl">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Panel Admina</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> </head>

    <body>
        <?php include 'header.php' ?>
            <div style="width:50px; height:50px;"></div>
            <?php include 'sidebar.php' ?>
                <div class="col-lg-10">
                    <div style="width:50px; height:50px;"></div>
                    <!------ Posty ---->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3>Artykuły</h3></div>
                        <div class="panel-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Data</th>
                                        <th>Zdjęcie</th>
                                        <th>Tytuł</th>
                                        <th>Treść</th>
                                        <th>Kategoria</th>
                                        <th>Autor</th>
                                        <th>Status</th>
                                        <th>Edytuj</th>
                                        <th>Podgląd</th>
                                        <th>Usuń</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                            $sql = "SELECT * FROM posts p JOIN users u ON p.author = u.user_email";
                            $run = mysqli_query($conn,$sql);
                            $number = 1;
                            while($rows = mysqli_fetch_assoc($run)){
                                echo '
                                      <tr>
                                      <td>'.$number.'</td>
                                      <td>'.$rows['date'].'</td>
                                      <td>'.($rows['image'] == '' ? 'No Image' : '<img src="'.$rows['image'].'" width="50px">').'</td>
                                      <td>'.$rows['title'].'</td>
                                      <td>'.substr($rows['description'],0,30).'...</td>
                                      <td>'.$rows['category'].'</td>
                                      <td>'.$rows['user_f_name'].' '.$rows['user_l_name'].'</td>
                                      <td>'.$rows['status'].'</td>
                                      <td>'.($rows['status'] == 'draft' ? '<a href="post_list.php?new_status=publish&id='.$rows['id'].'" class="btn btn-primary btn-xs navbar-btn">Publish</a>': '<a href="post_list.php?new_status=draft&id='.$rows['id'].'" class="btn btn-info btn-xs navbar-btn">Draft</a>').'</td>
                                      <td><a href="../post.php?post_id='.$rows['id'].'" class="btn btn-success btn-xs navbar-btn">Podgląd</a></td>
                                      <td><a href="post_list.php?del_id='.$rows['id'].'" class="btn btn-danger btn-xs navbar-btn">Usuń</a></td>
                                      </tr>
                                ';$number++;
                            }
                         ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <footer></footer>
                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
                <!-- Include all compiled plugins (below), or include individual files as needed -->
                <script src="js/bootstrap.min.js"></script>
                <!-- Latest compiled and minified JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>

    </html>