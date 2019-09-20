<?php
echo '<a href="index.php">home</a> ||';
echo '<a href="index.php?pagina=Invoer">Invoer</a> ||';
$pagina = @$_GET['pagina'];
switch ($pagina) 
{
case "Invoer";
echo '
<p>hier komt nog shit te staan! wait a minute...</p>
<form method = "get" action = "">
<table>

<td>
<td>Naam</td>
<td><input type = "text" name = "naam">
</tr>
<tr>
<td>Datum afspraak</td>
<td><input type = "text" name = "datum afspraak">
</tr>
<select>
<option value="geen voorkeur">Geen voorkeur</option>
<option value="henk klaassen">Henk Klaassen</option>
</select>
<td><input type = "submit" value = "Plan">



</table>
';
break;
default;
echo "<p>welkom op mijn website</p>";
break;
}
?>
