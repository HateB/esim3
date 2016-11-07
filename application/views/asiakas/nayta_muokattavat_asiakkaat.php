<h1>Muokkaa asiakkaiden tietoja</h1>
<form action="muokkaa_asiakkaat" method="POST">
<table>
<tr><td>Etunimi</td><td>Sukunimi</td><td>Email</td></tr>
<?php
foreach($asiakkaat as $rivi)
{
	echo '<tr><td>';
	echo '<input type="text" name"en[]" value="'.$rivi['etunimi'].'"></td>';
	echo '<td><input type="text" name"sn[]" value="'.$rivi['sukunimi'].'"></td>';
	echo '<td><input type="text" name"em[]" value="'.$rivi['email'].'"></td>';
	echo '<input type="hidden" name"id[]" value="'.$rivi['id_asiakas'].'">';
	echo '</tr>';
}
?>
</table>
<a href="listaa"><button>Peruuta</button></a>
<input class="btn-danger" type="submit" name="btnTallenna" value="Tallenna"/>

</form>
