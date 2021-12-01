<?php 

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "unip";

 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
   $error="error en la coneccion";
 } else {
   
    $idPersona=$_POST['idPersona'];
    $idSkill=$_POST['idSkill'];
   $sql = "UPDATE alumno_skills
            SET ProfesorValidador  = 'true'
            WHERE IdAlumno=$idPersona && IdSkills=$idSkill
           ";

   if ($conn->query($sql) === TRUE) {
     $error='ok';

   } else {
     $error='error al actualizar skill';
      
   }

   $conn->close();
 }

echo($error);
?>