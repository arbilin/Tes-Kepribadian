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
				   
				$jenis = array('koleris','koleris','sanguinis','sanguinis','plegmatis','plegmatis','melankolis','melankolis');
				$nomor = array(1,2,3,4,5,6,7,8);

				$n=count($jenis);
				shuffle($jenis);
				shuffle($nomor);
				$ikol=1; $isang=1; $ipleg=1; $imel=1;
				for($i=0; $i<$n; $i++){
					$query="SELECT * FROM ".$jenis[$i]." WHERE id='".$nomor[$i]."'";
					$hasil=mysql_query($query);
					while ($data=mysql_fetch_row($hasil)) {
						if($jenis[$i]=='koleris'){
							echo "<tr bgcolor='gray'><td>$data[1]</td>";
							echo "<td width='30%'>
								  <label><input type='radio' name='kol$ikol' value='Sangat pas'> Sangat Pas</label><br>
								  <label><input type='radio' name='kol$ikol' value='Pas'> Pas</label><br>
								  <label><input type='radio' name='kol$ikol' value='Kurang pas'> Kurang pas</label><br>
								  <label><input type='radio' name='kol$ikol' value='Tidak pas'> Tidak pas</label></td></tr>";
							$ikol++;
						}
						else if($jenis[$i]=='sanguinis'){
							echo "<tr bgcolor='gray'><td>$data[1]</td>";
							echo "<td width='30%'>
								  <label><input type='radio' name='sang$isang' value='Sangat pas'> Sangat Pas</label><br>
								  <label><input type='radio' name='sang$isang' value='Pas'> Pas</label><br>
								  <label><input type='radio' name='sang$isang' value='Kurang pas'> Kurang pas</label><br>
								  <label><input type='radio' name='sang$isang' value='Tidak pas'> Tidak pas</label></td></tr>";
							$isang++;
						}
						else if($jenis[$i]=='plegmatis'){
							echo "<tr bgcolor='gray'><td>$data[1]</td>";
							echo "<td width='30%'>
								  <label><input type='radio' name='pleg$ipleg' value='Sangat pas'> Sangat Pas</label><br>
								  <label><input type='radio' name='pleg$ipleg' value='Pas'> Pas</label><br>
								  <label><input type='radio' name='pleg$ipleg' value='Kurang pas'> Kurang pas</label><br>
								  <label><input type='radio' name='pleg$ipleg' value='Tidak pas'> Tidak pas</label></td></tr>";
							$ipleg++;
						}
						else if($jenis[$i]=='melankolis'){
							echo "<tr bgcolor='gray'><td>$data[1]</td>";
							echo "<td width='30%'>
								  <label><input type='radio' name='mel$imel' value='Sangat pas'> Sangat Pas</label><br>
								  <label><input type='radio' name='mel$imel' value='Pas'> Pas</label><br>
								  <label><input type='radio' name='mel$imel' value='Kurang pas'> Kurang pas</label><br>
								  <label><input type='radio' name='mel$imel' value='Tidak pas'> Tidak pas</label></td></tr>";
							$imel++;
						}
					}
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