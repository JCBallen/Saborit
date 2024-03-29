<?php 

#VALIDA SI EXISTE UNA SESIÓN ACTIVA
session_start();
if(($_SESSION['user'])=="admin"){
}else{
    header('location:index');
}

require_once "conexion.php";
$sql='SELECT * FROM users';
$sentencia = $pdo->prepare($sql);
$sentencia->execute();
$resultado = $sentencia->fetchAll();
// var_dump($resultado);
$sql='SELECT * FROM tracker';
$sentencia = $pdo->prepare($sql);
$sentencia->execute();
$resultado2 = $sentencia->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="canonical" href="https://saborit.net/"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="design.css" />
    <script defer src="appTables.js" type="text/javascript"></script>
    <title>Tables</title>
  </head>
  <body class="tables-bd">
  <?php
  if(isset($_SESSION['user'])){
    include "NavbarLogIn.php";
  }else{
    include "Navbar.php";
  }
  ?>
    <div id="tables-container">
    <div id="tb-1">
      <h1 class="tb-titles">USERS</h1>
      <table id="table-1">
        <thead>
          <th>Name</th>
          <th>ID</th>
          <th>Email</th>
          <th>Registration Date</th>
          <th>Delete</th>
        </thead>
        <?php foreach($resultado as $key => $value) :?>
          <?php if($value["correo"]!="saboritexpress@gmail.com"): ?>
        <tr>
          <td><?php echo $value["nombre"]; ?></td>
          <td><?php echo $value["identificacion"]; ?></td>
          <td><?php echo $value["correo"]; ?></td>
          <td><?php echo $value["fecha_registro"]; ?></td>
          <td>
            <form action="back-tables-su.php" method="POST">
              <input type="hidden" value="<?php echo $value["correo"]; ?>" name="email-del">
              <button id="sub-tb" type="submit" onclick="return sure()"><span class="material-icons-outlined"> remove_circle </span></button>
            </form>
          </td>
        </tr>
        <?php endif ?>
        <?php endforeach ?>
      </table>
</div>

     <div id="tb-2">
      <h1 class="tb-titles">TRACKING CODES</h1>
      <table id="table-2">
        <thead>
          <th>Code</th>
          <th>Latitue</th>
          <th>Longitude</th>
          <th>Milles</th>
          <th>Arrival</th>
          <th>State</th>
          <th>Delete</th>
        </thead>
        <?php foreach($resultado2 as $key => $value) :?>
        <tr>
          <td><?php echo $value["code"] ?></td>
          <td><?php echo $value["lt"] ?></td>
          <td><?php echo $value["lg"] ?></td>
          <td><?php echo $value["miles"] ?></td>
          <td><?php echo $value["arrivalTime"] ?></td>
          <td><?php echo $value["dlvState"] ?></td>
          <td>
          <form action="back-tables-tc.php" method="POST">
              <input type="hidden" value="<?php echo $value["code"]; ?>" name="code-del">
              <button id="sub-tb" type="submit" onclick="return sure()"><span class="material-icons-outlined"> remove_circle </span></button>
            </form>
          </td>
        </tr>
        <?php endforeach ?>
      </table>
    </div>
    </div>
<?php
include "footer.php";
?>
  </body>
</html>