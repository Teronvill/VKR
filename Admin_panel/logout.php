

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/app.css">
    <title>Выход</title>
</head>
<body>

<?
session_start ();
if (!$_SESSION['admin']) {
    echo '<section class="ftco-section">';
    echo '<div class="container">';
    echo '<div class="row justify-content-center">';
    echo '<div class="col-md-6 text-center mb-5">';
    echo '   <h2 class="heading-section">Вам нужно<a href="login.php"> авторизоваться</a></h2>';
    echo ' </div>';
    echo '</div>';
    echo'</div';
    echo'</section>';
die ();
};
    session_destroy ();


    echo '<section class="ftco-section">';
    echo '<div class="container">';
    echo '<div class="row justify-content-center">';
    echo '<div class="col-md-6 text-center mb-5">';
    echo '   <h2 class="heading-section">Вы вышли</a></h2>';
    echo ' </div>';
    echo '</div>';
    echo'</div';
    echo'</section>';
    echo "<html><head><meta http-equiv='Refresh' content='2; URL=http://tpyug/admin_panel/login.php'></head></html>"
    ?>
</body>
</html>


