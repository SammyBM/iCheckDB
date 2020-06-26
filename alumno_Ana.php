<HTML>
<BODY>
<?PHP
$sexo = $_REQUEST['sexo'];
echo "Sexo: $sexo"."<br/>";
$Nombres = $_REQUEST['Nombres'];
echo "Nombres: $Nombres"."<br/>";
$Apellido_paterno = $_REQUEST['Apellido_paterno'];
echo "Apellido paterno: $Apellido_paterno"."<br/>";
$Apellido_materno = $_REQUEST['Apellido_materno'];
echo "Apellido materno: $Apellido_materno"."<br/>";
$registro = $_REQUEST['registro'];
echo "Registro: $registro"."<br/>";
$celular = $_REQUEST['celular'];
echo "Celular: $celular"."<br/>";
$Domicilio = $_REQUEST['Domicilio'];
echo "Domicilio : $Domicilio"."<br/>";
$Colonia = $_REQUEST['Colonia'];
echo "Colonia: $Colonia"."<br/>";

$hobbies = $_REQUEST['hobbies'];
foreach($hobbies as $hobbie){ 
    echo"Hobbie: $hobbie"."<br/>";
}

$carrera = $_REQUEST['carrera'];
echo "carrera: $carrera"."<br/>";

$Municipio = $_REQUEST['Municipio'];
echo "Municipio: $Municipio"."<br/>";

?>
</BODY>
</HTML>