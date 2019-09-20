<?php
echo '<a href="index.php">home</a> ||';
echo '<a href="index.php?pagina=Invoer">Invoer</a> ||';
$pagina = @$_GET['pagina'];
switch ($pagina) 
{
case "Invoer";
echo "<p>hier komt nog shit te staan! wait a minute...</p>";
break;
default;
echo "<p>welkom op mijn website</p>";
break;
}
?>