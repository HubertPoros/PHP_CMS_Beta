<?php
    include 'includes/db.php';
    $match = '';
    if (isset($_POST['submit_user']))
        {
            if($_POST['password'] == $_POST['con_password'])
            {
                $date = date('Y-m-d h:i:s');
                $ins_sql = "INSERT INTO users (role, user_f_name, user_l_name, user_email, user_password, user_gender, user_marital_status, user_phone_no, user_designation, user_website, user_address, user_about_me, user_date ) VALUES ('subscriber','$_POST[first_name]', '$_POST[last_name]', '$_POST[email]', '$_POST[password]', '$_POST[gender]', '$_POST[marital_status]', '$_POST[phone_no]', '$_POST[designation]', '$_POST[website]', '$_POST[address]', '$_POST[about_me]', '$date')";
                $run_sql = mysqli_query($conn, $ins_sql);
            } else
            {
                $match = '<div class="alert alert-danger">Hasło nie pasuje</div>';
            }
            
        }
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
        <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'> </head>

    <body>
        <?php include 'includes/header.php'; ?>
            <div class="container" style="margin-top:40px;">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="well well-sm">
                            <form class="form-horizontal" action="rejestracja.php" method="post">
                                <fieldset>
                                    <legend class="text-center">Rejestracja</legend>
                                    <?php echo $match; ?>
                                        <!-- Name input-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="first_name">Imię</label>
                                            <div class="col-md-9">
                                                <input id="first_name" name="first_name" type="text" placeholder="Twoje Imię" class="form-control" required> </div>
                                        </div>
                                        <!-- Name input-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="last_name">Nazwisko</label>
                                            <div class="col-md-9">
                                                <input id="last_name" name="last_name" type="text" placeholder="Twoje Nazwisko" class="form-control" required> </div>
                                        </div>
                                        <!-- Email input-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="email">Twój E-Mail</label>
                                            <div class="col-md-9">
                                                <input id="email" name="email" type="text" placeholder="Twój E-Mail" class="form-control" required> </div>
                                        </div>
                                        <!-- Password input-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="password">Hasło</label>
                                            <div class="col-md-9">
                                                <input id="password" name="password" type="password" placeholder="Hasło" class="form-control" required> </div>
                                        </div>
                                        <!-- Confirm Password input-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="con_password">Powtórz Hasło</label>
                                            <div class="col-md-9">
                                                <input id="con_password" name="con_password" type="password" placeholder="Powtórz Hasło" class="form-control" required> </div>
                                        </div>
                                        <!-- Gender input-->
                                        <div class="form-group">
                                            <label for="gender" class="col-md-3 control-label">Płeć</label>
                                            <div class="col-sm-4">
                                                <select class="form-control" name="gender" id="gender" required>
                                                    <option value="">Wybierz Płeć</option>
                                                    <option value="male">Mężczyzna</option>
                                                    <option value="female">Kobieta</option>
                                                </select>
                                            </div>
                                            <label for="marital_status" class="col-md-2 control-label">Status Cywilny</label>
                                            <div class="col-sm-3">
                                                <select class="form-control" name="marital_status" id="marital_status" required>
                                                    <option value="">Wybierz Status</option>
                                                    <option value="single">Singiel</option>
                                                    <option value="married">Zamężny</option>
                                                    <option value="divorced">Rozwiedziony</option>
                                                    <option value="other">Inny</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Confirm Password input-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="phone_no"> Kontakt</label>
                                            <div class="col-md-9">
                                                <input id="phone_no" name="phone_no" type="text" placeholder="Kontakt" class="form-control" required> </div>
                                        </div>
                                        <!-- Confirm Password input-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="designation"> Zawód</label>
                                            <div class="col-md-9">
                                                <input id="designation" name="designation" type="text" placeholder="Twój Zawód" class="form-control" required> </div>
                                        </div>
                                        <!-- Confirm Password input-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="website"> Twoja Strona WWW</label>
                                            <div class="col-md-9">
                                                <input id="website" name="website" type="text" placeholder="Twoja Strona WWW" class="form-control" required> </div>
                                        </div>
                                        <!-- Confirm Password input-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="address"> Adres</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" rows="3" name="address" id="address" required></textarea>
                                            </div>
                                        </div>
                                        <!-- Confirm Password input-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="about_me"> O Sobie :</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" rows="5" name="about_me" id="about_me" required></textarea>
                                            </div>
                                        </div>
                                        <!-- Form actions -->
                                        <div class="form-group">
                                            <div class="col-md-12 text-right">
                                                <input type="submit" value="Zarejestruj Się" name="submit_user" class="btn btn-block btn-danger" id="subject" required> </div>
                                        </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/bootstrap.min.js"></script>
            <!-- Latest compiled and minified JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>

    </html>