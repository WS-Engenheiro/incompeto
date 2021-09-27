
<?php 
$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbNome = 'wesley';

 $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbNome);

if($conexao->connect_errno)
{
  /*
   echo "erro";
 }
else
  {
    
echo "  <H3>Cadastro efetuado com sucesso!</H3>";
*/
}

?>
