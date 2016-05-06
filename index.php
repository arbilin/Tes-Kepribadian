<!DOCTYPE HTML>
<html lang="en-US">
	<head>
	<meta
	charset="UTF-8"/>
	<title>Tes Kepribadian V.1.0</title>
	<link rel="stylesheet" type="text/css" href="layout.css">
	</head>
	<body>
	<center>
		<table id="box">
			<tr align="center">
				<td>
					<font size="20"><u><a href=""> Tes Kepribadian </a></u></font><br>
					V.1.0
					<br><br>
					<i>
					<?php
					include "config.php";

					$hasil=mysql_query("SELECT * FROM quotes");
					$n=mysql_num_rows($hasil);
					$idq=rand(1,$n);
					$perintah="SELECT * FROM quotes WHERE id='$idq'";
					$hasil=mysql_query($perintah);
					$data=mysql_fetch_row($hasil);
					echo "$data[1]<br>";
					?>
					</i>
				</td>
			</tr>
			<tr align="center">
				<td>
					<br><br>
					<a href="petunjuk.php"><div id="tombol_mulai"> Mulai </div></a> <br>
					<a href="tentang.html"><div id="tombol_mulai"> Tentang </div></a>
				</td>
			</tr>
			<tr align="center">
				<td>
					<br><br><br>
					Copyright &copy; 2016 - Tes Kepribadian - Brilian Rahmat - MSP Pimp-up your skill
				</td>
			</tr>
		</table>
	</center>
	</body>
</html>