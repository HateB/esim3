<h1>Asiakkaat</h1>
<TABLE BORDER=1>
<tr><td>Etunimi</td><td>Sukunimi</td><td>Email</td></tr>
<?php
foreach($asiakkaat as $rivi)
{
	echo '<tr><td>'.$rivi['etunimi'].'</td><td>'.$rivi['sukunimi'].'</td><td>'.$rivi['email'].'</td></tr>';
}
?>

</TABLE>