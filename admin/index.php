<?php 
    session_start();
    
    include '../includes/db.php';
        if(isset($_SESSION['user']) && isset($_SESSION['password']) == true){
            $sel_sql = "SELECT * FROM users WHERE user_email = '$_SESSION[user]' AND user_password = '$_SESSION[password]'";
            if($run_sql = mysqli_query($conn, $sel_sql)){
                while($rows = mysqli_fetch_assoc($run_sql)){
                    $name = $rows['user_f_name'].' '.$rows['user_l_name'];
                    $job = $rows['user_designation'];
                    $contact_no = $rows['user_phone_no'];
                }
                
                
                
                if(mysqli_num_rows($run_sql) == 1){
                    if($rows['role'] == 'admin'){  
                    } 
                
            } else {
                header('Location:../index.php');
            }
            }
        } else {
            header('Location:../index.php');
        }

// licznik postów które są upublicznione
        $sql = "SELECT * FROM posts WHERE status = 'publish'";
        $run = mysqli_query($conn,$sql);
        $total_posts = mysqli_num_rows($run);

// licznik kategori
        $sql = "SELECT * FROM category";
        $run = mysqli_query($conn,$sql);
        $total_categories = mysqli_num_rows($run);

// licznik użytkowników
        $sql = "SELECT * FROM users";
        $run = mysqli_query($conn,$sql);
        $total_users = mysqli_num_rows($run);

// licznik postów które są upublicznione
        $sql = "SELECT * FROM posts WHERE status = 'publish'";
        $run = mysqli_query($conn,$sql);
        $total_posts = mysqli_num_rows($run);

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
            <?php  include 'sidebar.php' ?>
                <div class="col-lg-10">
                    <div style="width:50px; height:50px;"></div>
                    <div class="col-md-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3"><i class="glyphicon glyphicon-signal" style="font-size:1.7cm"></i></div>
                                    <div class="col-xs-9 text-right">
                                        <div style="font-size:1.2cm">
                                            <?php echo $total_posts; ?>
                                        </div>
                                        <div>Artykuły</div>
                                    </div>
                                </div>
                            </div>
                            <a href="post_list.php">
                                <div class="panel-footer">
                                    <div class="pull-left">Zobacz Artykuły</div>
                                    <div class="pull-right"><i class="glyphicon glyphicon-circle-arrow-right"></i></div>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3"><i class="glyphicon glyphicon-th-list" style="font-size:1.7cm"></i></div>
                                    <div class="col-xs-9 text-right">
                                        <div style="font-size:1.2cm">
                                            <?php echo $total_categories; ?>
                                        </div>
                                        <div>Kategorie</div>
                                    </div>
                                </div>
                            </div>
                            <a href="category_list.php">
                                <div class="panel-footer">
                                    <div class="pull-left">Zobacz Kategorie</div>
                                    <div class="pull-right"><i class="glyphicon glyphicon-circle-arrow-right"></i></div>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3"><i class="glyphicon glyphicon-user" style="font-size:1.7cm"></i></div>
                                    <div class="col-xs-9 text-right">
                                        <div style="font-size:1.2cm">
                                            <?php echo $total_users; ?>
                                        </div>
                                        <div>Użytkownicy</div>
                                    </div>
                                </div>
                            </div>
                            <a href="">
                                <div class="panel-footer">
                                    <div class="pull-left">Zobacz Użytkowników</div>
                                    <div class="pull-right"><i class="glyphicon glyphicon-circle-arrow-right"></i></div>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3"><i class="glyphicon glyphicon-comment" style="font-size:1.7cm"></i></div>
                                    <div class="col-xs-9 text-right">
                                        <div style="font-size:1.2cm">55</div>
                                        <div>Komentarze</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <div class="pull-left">Zobacz Komentarze</div>
                                    <div class="pull-right"><i class="glyphicon glyphicon-circle-arrow-right"></i></div>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!---------The Block Ends --->
                    <!-------- Users ----->
                    <div class="col-lg-8">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>Lista Użytkowników</h4> </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nazwa</th>
                                            <th>Rola</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                $sql = "SELECT * FROM users LIMIT 5";
                                $run = mysqli_query($conn,$sql);
                                $number = 1;
                                while ($rows = mysqli_fetch_assoc($run)){
                                    echo '
                                        <tr>
                                            <td>'.$number.'</td>
                                            <td>'.$rows['user_f_name'].' '.$rows['user_l_name'].'</td>
                                            <td>'.$rows['role'].'</td>
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
                    <!-------- Profile ----->
                    <div class="col-lg-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="col-md-7">
                                    <div class="page-header">
                                        <h4><?php echo $name; ?></h4></div>
                                </div>
                                <div class="col-md8"> <img src="/images/profile.jpg" width="40%" class="img-circle"> </div>
                                <div class="panel-body">
                                    <table class="table table-condensed">
                                        <tbody>
                                            <tr>
                                                <th>Zawód</th>
                                                <td>
                                                    <?php echo $job; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Rola</th>
                                                <td>
                                                    <?php echo $_SESSION['role']; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td>
                                                    <?php echo $_SESSION['user']; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Kontakt</th>
                                                <td>
                                                    <?php echo $contact_no; ?>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
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
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                            //$sql ="SELECT * FROM posts WHERE author = '$_SESSION[user]' AND status = 'published'";
    $sql = "SELECT * FROM posts p JOIN category c ON c.c_id = p.category WHERE p.author = '$_SESSION[user]' AND p.status = 'publish' ";
                            $run = mysqli_query($conn,$sql);
                            $number = 1;
                            while ($rows = mysqli_fetch_assoc($run)){
                                echo '
                                <tr>
                              <td>'.$number.'</td>
                              <td>'.$rows['date'].'</td>
                              <td>'.($rows['image'] == '' ? 'No Image' : '<img src="'.$rows['image'].'" width="50px">').'</td>
                              <td>'.$rows['title'].'</td>
                              <td>'.substr($rows['description'],0,50).'....</td>
                              <td>'.ucfirst($rows['category_name']).'</td>
                              <td>'.$name.'</td>
                          </tr>
                                ';
                                $number++;
                            }
                         ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
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
                                        <th>Treść</th>
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
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>2016-02-12</td>
                                        <td>Michael</td>
                                        <td>Loremaskdaksdkasmdlas@Gmail.com</td>
                                        <td>2</td>
                                        <td>I Like this site</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>2016-02-12</td>
                                        <td>Michael</td>
                                        <td>Loremaskdaksdkasmdlas@Gmail.com</td>
                                        <td>2</td>
                                        <td>I Like this site</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>2016-02-12</td>
                                        <td>Michael</td>
                                        <td>Loremaskdaksdkasmdlas@Gmail.com</td>
                                        <td>2</td>
                                        <td>I Like this site</td>
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