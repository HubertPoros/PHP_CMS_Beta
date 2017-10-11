<?php 
    session_start();
    
    include '../includes/db.php';
    if(isset($_SESSION['user']) && isset($_SESSION['password']) == true){
        $sel_sql = "SELECT * FROM users WHERE user_email = '$_SESSION[user]' AND user_password = '$_SESSION[password]'";
        if($run_sql = mysqli_query($conn, $sel_sql)){
            while($rows = mysqli_fetch_assoc($run_sql)){
                $user_f_name = $rows['user_f_name'];
                $user_l_name = $rows['user_l_name'];
                $user_gender = $rows['user_gender'];
                $user_marital_status = $rows['user_marital_status'];
                $user_phone_no = $rows['user_phone_no'];
                $user_designation = $rows['user_esignation'];
                $user_website = $rows['user_website'];
                $user_address = $rows['user_address'];
                $user_about_me = $rows['user_about_me'];
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
                    <!-------- Profile ----->
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="col-md-3"> <img src="/images/profile.jpg" width="100%" class="img-circle"> </div>
                                <div class="col-md-7">
                                    <h3><u><?php echo $user_f_name.' '.$user_l_name; ?></u></h3>
                                    <p><i class="glyphicon glyphicon-heart"></i>
                                        <?php echo $user_designation; ?>
                                    </p>
                                    <p><i class="glyphicon glyphicon-road"></i>
                                        <?php echo $user_address; ?>
                                    </p>
                                    <p><i class="glyphicon glyphicon-phone"></i>
                                        <?php echo $user_phone_no; ?>
                                    </p>
                                    <p><i class="glyphicon glyphicon-envelope"></i>
                                        <?php echo $_SESSION['user']; ?>
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="=panel-heading">
                                <table class="table table-condensed">
                                    <tbody>
                                        <tr>
                                            <th>Gender</th>
                                            <td>
                                                <?php echo ucfirst($user_gender); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>M. Status</th>
                                            <td>
                                                <?php echo ucfirst($user_marital_status); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Website</th>
                                            <td>
                                                <?php echo ucfirst($user_website); ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="=panel-heading">
                                <table class="table table-condensed">
                                    <tbody>
                                        <tr>
                                            <td width="10%">1</td>
                                            <td> <a href="#">The first Post</a> </td>
                                        </tr>
                                        <tr>
                                            <td width="5%">2</td>
                                            <td> <a href="#">The Second Post</a> </td>
                                        </tr>
                                        <tr>
                                            <td width="5%">3</td>
                                            <td> <a href="#">The third Post</a> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>About me</h4>
                                <p>
                                    <?php echo ucfirst($user_about_me); ?>
                                </p>
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