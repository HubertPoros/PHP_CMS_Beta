<?php 
    session_start();
    include '../includes/db.php';
    if(isset($_SESSION['user']) && isset($_SESSION['password']) == true){
        $sel_sql = "SELECT * FROM users WHERE user_email = '$_SESSION[user]' AND user_password = '$_SESSION[password]'";
        if($run_sql = mysqli_query($conn, $sel_sql)){
            while($rows = mysqli_fetch_assoc($run_sql)){
                if(mysqli_num_rows($run_sql) == 1){
                    if($rows['role'] == 'admin'){
                    
                } else{
                    header('Location:../index.php');
                }
            } else{
                header('Location:../index.php');
            }
                }
        }
    } else {
        header('Location:../index.php');
    }

    
    $error = '';



    if(isset($_POST['submit_post'])){
        $title = strip_tags($_POST['title']);
        $date = date('Y-m-d h:i:s');
            if($_FILES['image']['name'] != ''){} else {
            $ins_sql = "INSERT INTO posts (title, description, image, category, status, date, author) VALUES ('$title', '$_POST[description]',  '$_POST[url]', '$_POST[category]', '$_POST[status]', '$date', '$_SESSION[user]')";
            if(mysqli_query($conn, $ins_sql)){
                header('post_list.php');
                } else{
                    $error = '<div class="alert alert-danger">The Query Was Not Working!</div>';
                }
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
        <!-- if($_FILES['image']['name'] != ''){ -->
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> </head>

    <body>
        <?php include 'header.php' ?>
            <div style="width:50px; height:50px;"></div>
            <?php echo $error; ?>
                <?php include 'sidebar.php' ?>
                    <div class="col-lg-10">
                        <div class="page-header">
                            <h1>Nowy Artykuł</h1></div>
                        <div class="container-fluid">
                            <form class="form-horizontal" action="new_post.php" method="post" enctype="multipart/form-date">
                                <div class="form-group">
                                    <label for="title">Tytuł</label>
                                    <input id="title" type="text" name="title" class="form-control" required> </div>
                                <div class="form-group">
                                    <label for="url">Adres URL Zdjęcia</label>
                                    <input id="url" type="text" name="url" class="form-control"> </div>
                                <div class="form-group">
                                    <label for="category">Kategoria</label>
                                    <select id="category" name="category" class="form-control" required>
                                        <option value="">Wybierz Kategorie</option>
                                        <?php 
                            $sel_sql = "SELECT * FROM category";
                            $run_sql = mysqli_query($conn, $sel_sql);
                            while($rows = mysqli_fetch_assoc($run_sql)){
                                if($rows['category_name'] == 'home'){
                                    continue;
                                }
                                echo '<option value="'.$rows['c_id'].'">'.ucfirst($rows['category_name']).'</option>';
                            }
                          ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="description">Treść Artykułu</label>
                                    <textarea id="description" type="text" name="description" class="form-control" rows="7"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select id="status" name="status" class="form-control">
                                        <option value="publish">Publish</option>
                                        <option value="draft">Draft</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit_post" class="btn btn-danger btn-block"> </div>
                            </form>
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