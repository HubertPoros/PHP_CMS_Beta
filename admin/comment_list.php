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
                    <!---------Comments --->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3>Ostatnie Komentarze</h3></div>
                        <div class="panel-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Data</th>
                                        <th>Autor</th>
                                        <th>Email</th>
                                        <th>Post</th>
                                        <th>Komentarz</th>
                                        <th>Status</th>
                                        <th>Usuń</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>2016-02-12</td>
                                        <td>Michael</td>
                                        <td>Loremaskdaksdkasmdlas@Gmail.com</td>
                                        <td>2</td>
                                        <td>I Like this site</td>
                                        <td>Approved</td>
                                        <td><a href="#" class="btn btn-danger btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>2016-02-12</td>
                                        <td>Michael</td>
                                        <td>Loremaskdaksdkasmdlas@Gmail.com</td>
                                        <td>2</td>
                                        <td>I Like this site</td>
                                        <td><a href="#" class="btn btn-warning btn-xs">Approve</a></td>
                                        <td><a href="#" class="btn btn-danger btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>2016-02-12</td>
                                        <td>Michael</td>
                                        <td>Loremaskdaksdkasmdlas@Gmail.com</td>
                                        <td>2</td>
                                        <td>I Like this site</td>
                                        <td>Approved</td>
                                        <td><a href="#" class="btn btn-danger btn-xs">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>2016-02-12</td>
                                        <td>Michael</td>
                                        <td>Loremaskdaksdkasmdlas@Gmail.com</td>
                                        <td>2</td>
                                        <td>I Like this site</td>
                                        <td><a href="#" class="btn btn-warning btn-xs">Approve</a></td>
                                        <td><a href="#" class="btn btn-danger btn-xs">Delete</a></td>
                                    </tr>
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