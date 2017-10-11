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
if(isset($_GET['del_id'])){
    $del_sql = "DELETE FROM category WHERE c_id = '$_GET[del_id]'";
    if(mysqli_query($conn,$del_sql)){
        $result = '<div class = "alert alert-danger">Została usunięta kategoria o numerze &apos;'.$_GET['del_id'].'&apos;</div>';
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
                    <!-------- Category ----->
                    <?php echo $result; ?>
                        <div class="col-lg-8">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4>Kategorie</h4> </div>
                                <div class="panel-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Kategoria</th>
                                                <th>Edytuj</th>
                                                <th>Usuń</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                $sql = "SELECT * FROM category";
                                $run = mysqli_query($conn,$sql);
                              $number = 1;
                                while($rows = mysqli_fetch_assoc($run)){
                                    if($rows['category_name'] == 'home'){
                                        continue;
                                    }else{
                                        $category_name = ucfirst($rows['category_name']);
                                    }
                                    echo'
                                    <tr>
                                  <td>'.$number.'</td>
                                  <td>'.$category_name.'</td>
                                  <td><a href="edit_category.php?cat_id='.$rows['c_id'].'" class="btn btn-warning btn-xs">Edytuj</a></td>
                                  <td><a href="category_list.php?del_id='.$rows['c_id'].'" class="btn btn-danger btn-xs">Usuń</a></td>
                              </tr>
                                    ';
                                    $number++;
                                }
                             ?>
                                        </tbody>
                                    </table>
                                </div>
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