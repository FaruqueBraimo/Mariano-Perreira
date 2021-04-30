
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Ola</b>. Bem vindo site Mariano Perreira.</h1>
    <table class="table">

  

  <?php
// Initialize the session
include('config.php');  

$sql = "SELECT ord, utlizador, senha FROM users";

$result = $link->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "ordem: " . $row["ord"]. " - Utlizador: " . $row["utlizador"]. " Senha " . $row["senha"]. "<br>";
  }
} else {
  echo "0 results";
}
$link->close();

?>

   
   
  </tbody>
</table>
</body>
</html>