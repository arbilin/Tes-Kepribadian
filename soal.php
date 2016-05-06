<?php
session_start();

if(!isset($_SESSION['sesi']))
header('location:larangan.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta
	charset="UTF-8"/>
	<title>Tes Kepribadian V.1.0 | Soal Tes</title>
	<link rel="stylesheet" type="text/css" href="layout.css">
</head>
<body>
<center>
	<table id="box2">
		<tr>
			<td align="center" colspan="2"><font size="20">Soal Tes</font></td>
		</tr>
			<form action="hasil.php" method="post">
				<?php
				include "config.php";
				   
				function bedakan($q1,$q2){
					while($q1==$q2){
						$q1=rand(1,8);
					}
					return $q1;
				}

				$q1=rand(1,8);
				$q2=rand(1,8);
				if($q1==$q2) $q1=bedakan($q1,$q2);
				$query1="SELECT * FROM koleris WHERE id='$q1' OR id='$q2'";
				$hasil=mysql_query($query1);
				$i=1;
				while ($data=mysql_fetch_row($hasil)) {
					echo "<tr bgcolor='gray'><td>$data[1]</td>";
					echo "<td width='30%'>
						  <label><input type='radio' name='kol$i' value='Sangat pas'> Sangat Pas</label><br>
						  <label><input type='radio' name='kol$i' value='Pas'> Pas</label><br>
						  <label><input type='radio' name='kol$i' value='Kurang pas'> Kurang pas</label><br>
						  <label><input type='radio' name='kol$i' value='Tidak pas'> Tidak pas</label></td></tr>";
					$i++;
				}

				$q1=rand(1,8);
				$q2=rand(1,8);
				if($q1==$q2) $q1=bedakan($q1,$q2);
				$query1="SELECT * FROM sanguinis WHERE id='$q1' OR id='$q2'";
				$hasil=mysql_query($query1);
				$i=1;
				while ($data=mysql_fetch_row($hasil)) {
					echo "<tr bgcolor='gray'><td>$data[1]</td>";
					echo "<td width='30%'>
						  <label><input type='radio' name='sang$i' value='Sangat pas'> Sangat Pas</label><br>
						  <label><input type='radio' name='sang$i' value='Pas'> Pas</label><br>
						  <label><input type='radio' name='sang$i' value='Kurang pas'> Kurang pas</label><br>
						  <label><input type='radio' name='sang$i' value='Tidak pas'> Tidak pas</label></td></tr>";
					$i++;
				}

				$q1=rand(1,8);
				$q2=rand(1,8);
				if($q1==$q2) $q1=bedakan($q1,$q2);
				$query1="SELECT * FROM plegmatis WHERE id='$q1' OR id='$q2'";
				$hasil=mysql_query($query1);
				$i=1;
				while ($data=mysql_fetch_row($hasil)) {
					echo "<tr bgcolor='gray'><td>$data[1]</td>";
					echo "<td width='30%'>
						  <label><input type='radio' name='pleg$i' value='Sangat pas'> Sangat Pas</label><br>
						  <label><input type='radio' name='pleg$i' value='Pas'> Pas</label><br>
						  <label><input type='radio' name='pleg$i' value='Kurang pas'> Kurang pas</label><br>
						  <label><input type='radio' name='pleg$i' value='Tidak pas'> Tidak pas</label></td></tr>";
					$i++;
				}

				$q1=rand(1,8);
				$q2=rand(1,8);
				if($q1==$q2) $q1=bedakan($q1,$q2);
				$query1="SELECT * FROM melankolis WHERE id='$q1' OR id='$q2'";
				$hasil=mysql_query($query1);
				$i=1;
				while ($data=mysql_fetch_row($hasil)) {
					echo "<tr bgcolor='gray'><td>$data[1]</td>";
					echo "<td width='30%'>
						  <label><input type='radio' name='mel$i' value='Sangat pas'> Sangat Pas</label><br>
						  <label><input type='radio' name='mel$i' value='Pas'> Pas</label><br>
						  <label><input type='radio' name='mel$i' value='Kurang pas'> Kurang pas</label><br>
						  <label><input type='radio' name='mel$i' value='Tidak pas'> Tidak pas</label></td></tr>";
					$i++;
				}

				?>
			
		<tr>
			<td align="center" colspan="2">
			<br>
				<input id="tombol_balik" type="reset" name='reset' value='Reset Semua'>
				<input id="tombol_balik" type="submit" name='submit' value='Periksa!'>
				</form>
			</td>
		</tr>
	</table>
</center>
</body>
</html>