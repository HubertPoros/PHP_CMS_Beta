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
if(isset($_POST['update_category'])){
    $category = strip_tags($_POST['category']);
    //$sql = "INSERT INTO category (category_name) VALUES ('$category')";
    $sql = "UPDATE category SET category_name = '$category' WHERE c_id = $_POST[cat_id]";
    if(mysqli_query($conn,$sql)){
        header('Location: category_list.php');
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <!-- TinyMCE Editor -->
        <script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
        <script>
            tinymce.init({
                selector: 'textarea'
            });
        </script>
    </head>

    <body>
        <?php include 'header.php' ?>
            <div style="width:50px; height:50px;"></div>
            <?php  include 'sidebar.php' ?>
                <div class="col-lg-10">
                    <?php echo $result; ?>
                        <?php 
            if(isset($_GET['cat_id'])){ 
                $sql = "SELECT * FROM category WHERE c_id = '$_GET[cat_id]'";
                $run = mysqli_query($conn,$sql);
                while($rows = mysqli_fetch_assoc($run)){
          ?>
                            <div class="page-header">
                                <h1>Edytuj Kategorie</h1></div>
                            <div class="container-fluid">
                                <form class="form-horizontal col-lg-5" action="edit_category.php" method="post">
                                    <div class="form-group">
                                        <input type="hidden" name="cat_id" value="<?php echo $_GET['cat_id'];?>">
                                        <label for="category">Nazwa Kategorii</label>
                                        <input id="category" type="text" value="<?php echo $rows['category_name']; ?>" name="category" class="form-control"> </div>
                                    <div class="form-group">
                                        <input type="submit" name="update_category" class="btn btn-danger btn-block"> </div>
                                </form>
                            </div>
                            <?php  } 
            }else {
                echo $result = '<div class="alert alert-danger"> Please Select a Category</div>';
            }
          ?> </div>
                <footer></footer>
                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
                <!-- Include all compiled plugins (below), or include individual files as needed -->
                <script src="js/bootstrap.min.js"></script>
                <!-- Latest compiled and minified JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>

    </html>