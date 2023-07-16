<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>registros</h1>
<?php
include('./conexion.php');
$sql ="SELECT * FROM alumnos";
$objeto=new conexion();
$pdoMysql=$objeto->Conectar();
$consulta=$pdoMysql->prepare($sql);
$resultado=$consulta->execute();
$datos=$resultado->fetchAll(PDO::FETCH_ASSOC);

//$row=$result->fetch_array();
?>
<main>
    <Table>
<tr>
<?php foreach($datos as $dato){?>
    <td><?php echo $dato['nombre'];?></td>
    <td><?php echo $dato['edad'];?></td>
    <td><?php echo $dato['carrera'];?></td>
    <td><?php echo $dato['equipo_computo'];?></td>
    <td><?php echo $dato['promedio'];?></td>
</tr>
        <?php }?>
    </Table>
    <table>
        <tr>
            <th>nombre</th>
            <th>edad</th>
            <th>carrera</th>
            <th>equipo_computo</th>
            <th>promedio</th>
        </tr>
        <tr>
            <td>fernando</td>
            <td>21</td>
            <td>informatica</td>
            <td>05</td>
            <td>8</td>
        </tr>
        <?php
        while($row=mysqli_fetch_assoc($result)){
            echo'<td>'.$row['nombre'].'</td>';
            echo'<td>'.$row['nombre'].'</td>';
            echo'<td>'.$row['edad'].'</td>';
            echo'<td>'.$row['carrera'].'</td>';
            echo'<td>'.$row['equipo_computo'].'</td>';
            echo'<td>'.$row['promedio'].'</td>';
         }
        ?>
      </tr>
    </table>
</main>
</body>
</html>