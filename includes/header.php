<div class="container">
    <nav class="navbar navbar-default navbar-fixed-top">
        <!-- Rodzaj NavBara np navbar-inverse albo navbar-fixed-bottom -->
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Nawigacja</span>
                    <!-- Rozwijane Menu Po Zmniejszeniu Strony --><span class="icon-bar"></span>
                    <!-- Ikona numer 1 --><span class="icon-bar"></span>
                    <!-- Ikona numer 2 --><span class="icon-bar"></span>
                    <!-- Ikona numer 3 -->
                </button> <a class="navbar-brand" href="index.php">Serwis Sportowy</a> </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <?php
	                   $sel_cat = "SELECT * FROM category";
	                   $run_cat = mysqli_query($conn,$sel_cat);
	                       while($rows = mysqli_fetch_assoc($run_cat))
                            {
                                if(isset($_GET['cat_name']))
                            {
                                 if($_GET['cat_name'] == $rows['category_name'])
                                {
                                    $class = 'active';
                                } else
                                {
                                    $class = '';
                                } 
                            }    else
                                {
                                    $class = '';
                                }
                                if($rows['category_name'] == 'home')
                                {
                                    if($_SERVER['PHP_SELF'] == 'index.php'){
                                        echo '<li class = "active"><a href="index.php">'.ucfirst($rows['category_name']).'</a></li>';
                                    }else
                                    {
                                        echo '<li class = ""><a href="index.php">'.ucfirst($rows['category_name']).'</a></li>';
                                    }
                                    
                                } else
                                {
                                    echo '<li class = "'.$class.'"><a href="menu.php? cat_id='.$rows['c_id'].'">'.ucfirst($rows['category_name']).'</a></li>';
                                }
                            
                           
                            
                            }
?>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- Nawigacja Po Prawej Stronie -->
                    <?php

    if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
    {         
echo<<<END
<li><a href="#">
END;
        echo "Witaj ".$_SESSION['user'].'!';
echo<<<END
                    '</a></li>
                    <li><a href="about.php">O Mnie</a></li>
                    <li><a href="kontakt.php">Kontakt</a></li>
					<li><a href="logout.php">Wyloguj Się</a></li>
        </ul>
            
                </div>
            </div>
        </nav>
      </div>
    '
END;

        
        }
    
    if (!isset($_SESSION['zalogowany']))
        {
echo<<<END
'
                
                    <li><a href="about.php">O Mnie</a></li>
                    <li><a href="kontakt.php">Kontakt</a></li>
					<li><a href="logowanie.php">Zaloguj</a></li>
                    <li><a href="rejestracja.php">Rejestracja</a></li>
                </ul>
            
                </div>
            </div>
        </nav>
      </div>
    '
       
END;
       } 
?>