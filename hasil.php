<!DOCTYPE html>
<html>
<head>
	<meta
	charset="UTF-8"/>
	<title>Tes Kepribadian V.1.0 | Hasil</title>
	<link rel="stylesheet" type="text/css" href="layout.css">
</head>
<body>
<center>
	<table id="box2">
		<tr>
			<td align="center"><font size="20">Hasil</font></td>
		</tr>
		<tr>
			<td align="center">
			<?php
			if(!isset($_POST['kol1']) || !isset($_POST['kol2']) || !isset($_POST['sang1']) || !isset($_POST['sang2']) ||
			   !isset($_POST['pleg1']) || !isset($_POST['pleg2']) || !isset($_POST['mel1']) || !isset($_POST['mel2']))
				header('location:larangan.php');

			include "hancursesi.php";
			include "config.php";

			function nilai($x){
				if($x=='Sangat pas') return $x=4;
				else if($x=='Pas') return $x=3;
				else if($x=='Kurang pas') return $x=2;
				else if($x=='Tidak pas') return $x=1;
				else return 0;
			}

			function cariMax4($a,$b,$c,$d){
				$max=$a;
				if($max<$b) $max = $b;
				if($max<$c) $max = $c;
				if($max<$d) $max = $d;

				return $max;
			}

			$koleris=nilai($_POST['kol1']);
			$koleris=$koleris+nilai($_POST['kol2']);
			$sanguinis=nilai($_POST['sang1']);
			$sanguinis=$sanguinis+nilai($_POST['sang2']);
			$plegmatis=nilai($_POST['pleg1']);
			$plegmatis=$plegmatis+nilai($_POST['pleg2']);
			$melankolis=nilai($_POST['mel1']);
			$melankolis=$melankolis+nilai($_POST['mel2']);
			$total=$koleris+$sanguinis+$plegmatis+$melankolis;
			$max=cariMax4($koleris,$sanguinis,$plegmatis,$melankolis);

			if($max==$koleris){
				printf("<div align='center' id='Koleris'>Koleris = %.3f&#37</div>", $koleris/$total*100);
				$jenis1='Koleris';
			}
			else
				printf("<div align='center'>Koleris = %.3f&#37</div>", $koleris/$total*100);
			if($max==$sanguinis){
				printf("<div align='center' id='Sanguinis'>Sanguinis = %.3f&#37 </div>", $sanguinis/$total*100);
				$jenis2='Sanguinis';
			}
			else
				printf("<div align='center'>Sanguinis = %.3f&#37 </div>", $sanguinis/$total*100);
			if($max==$plegmatis){
				printf("<div align='center' id='Plegmatis'>Plegmatis = %.3f&#37 </div>", $plegmatis/$total*100);
				$jenis3='Plegmatis';
			}
			else
				printf("<div align='center'>Plegmatis = %.3f&#37 </div>", $plegmatis/$total*100);
			if($max==$melankolis){
				printf("<div align='center' id='Melankolis'>Melankolis = %.3f&#37 </div>", $melankolis/$total*100);
				$jenis4='Melankolis';
			}
			else
				printf("<div align='center'>Melankolis = %.3f&#37 </div>", $melankolis/$total*100);

			echo"</td></tr>";
			if (!isset($jenis1)) $jenis1='';
			if (!isset($jenis2)) $jenis2='';
			if (!isset($jenis3)) $jenis3='';
			if (!isset($jenis4)) $jenis4='';
			$query="SELECT * FROM hasil WHERE jenis='$jenis1' OR jenis='$jenis2' OR jenis='$jenis3' OR jenis='$jenis4'";
			$hasil=mysql_query($query);
			echo "<tr><td align='center'>Jenis kepribadian kamu yang paling menonjol adalah:</td></tr>";
			while($data=mysql_fetch_row($hasil)){
				if($jenis1=='Koleris'){
					echo "<tr id='". $jenis1 ."'><td align='center'><br><h2>$data[1]</h2></td></tr>";
					echo "<tr id='". $jenis1 ."'><td align='center'><h3>Ciri-ciri:</h3>$data[2]<br></td></tr>";
					echo "<tr id='". $jenis1 ."'><td align='center'><h3>Kekuatan:</h3>$data[3]<br></td></tr>";
					echo "<tr id='". $jenis1 ."'><td align='center'><h3>Kelemahan:</h3>$data[4]<br><br><br></td></tr>";
					$jenis1='';
				}
				else if($jenis2=='Sanguinis'){
					echo "<tr id='". $jenis2 ."'><td align='center'><br><h2>$data[1]</h2></td></tr>";
					echo "<tr id='". $jenis2 ."'><td align='center'><h3>Ciri-ciri:</h3>$data[2]<br></td></tr>";
					echo "<tr id='". $jenis2 ."'><td align='center'><h3>Kekuatan:</h3>$data[3]<br></td></tr>";
					echo "<tr id='". $jenis2 ."'><td align='center'><h3>Kelemahan:</h3>$data[4]<br><br><br></td></tr>";
					$jenis2='';
				}
				else if($jenis3=='Plegmatis'){
					echo "<tr id='". $jenis3 ."'><td align='center'><br><h2>$data[1]</h2></td></tr>";
					echo "<tr id='". $jenis3 ."'><td align='center'><h3>Ciri-ciri:</h3>$data[2]<br></td></tr>";
					echo "<tr id='". $jenis3 ."'><td align='center'><h3>Kekuatan:</h3>$data[3]<br></td></tr>";
					echo "<tr id='". $jenis3 ."'><td align='center'><h3>Kelemahan:</h3>$data[4]<br><br><br></td></tr>";
					$jenis3='';
				}
				else if($jenis4='Melankolis'){
					echo "<tr id='". $jenis4 ."'><td align='center'><br><h2>$data[1]</h2></td></tr>";
					echo "<tr id='". $jenis4 ."'><td align='center'><h3>Ciri-ciri:</h3>$data[2]<br></td></tr>";
					echo "<tr id='". $jenis4 ."'><td align='center'><h3>Kekuatan:</h3>$data[3]<br></td></tr>";
					echo "<tr id='". $jenis4 ."'><td align='center'><h3>Kelemahan:</h3>$data[4]<br><br><br></td></tr>";
					$jenis4='';
				}
			}

			?>
			<!-- </td>
		</tr> -->
		<tr>
			<td align="center">
				<a href="soal.php"><div id="tombol_mulai"> Mulai Lagi!</div></a><br>
				<a href="index.php"><div id="tombol_mulai"> Kembali</div></a>
			</td>
		</tr>
	</table>
</center>
</body>
</html>