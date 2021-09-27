<?php
session_start();
print_r($_SESSION);
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: logins.php');

}
 
$logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Sistema | WS</title>
</head>
<style>
  body{
    background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
    color: white;
    text-align: center;

  }
</style>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="sair.php">SISTEMA DO WS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="d-flex">
        <a href="sair.php"class="btn btn-danger me-5 ">Sair</a>

    </div>
  </div>
</nav>
<br>
<br>
<?php
echo "<h1> Bem Vindo: <u>$logado</u></h1>";

?>
</body>

</html>