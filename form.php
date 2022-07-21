

<html>
<head>
	<title></title>
	<style>
		.container{
			min-width: 1000px;
		    margin: 0;
		    padding: 0;
		    background: url(bg1.jpg);
		    height: 100vh;
		    background-repeat: no-repeat;
		    background-attachment: fixed;
		    background-size: 100% 100%;
		}
		.wrapper{
			font-family: 'Roboto Mono', monospace;
			font-size: 15px;
			padding-top: 20px;
			width: 50%;
			background: rgba(255, 211, 32, 0.33);
			color: black;
			border-radius: 5px;
			margin: 0 auto;
		}
		.satu{
			font-family: 'Roboto Mono', monospace;
			font-size: 30px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="wrapper">
			<form action="" method="post">
				<center><p class="satu">Form Kirim</p></center>
				<pre>Isi Data Penerima 
(nama & alamat)	:
		<textarea cols="50" rows="6" name="iisi"></textarea>

Jarak (km)	: <input type="number" name="ijarak" id="ijarak">



								<input type="submit" value="Selesai">
				</pre>
			</form>
		</div>
	</div>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@600&display=swap" rel="stylesheet">
</body>
</html>
<?php
	
	$jarak = trim($_POST['ijarak']);
	$isi = trim($_POST['iisi']);
	$nama_file = "data.txt";
	$file = fopen($nama_file, "w") or die("File tidak bisa dibuka");
	fwrite($file, $isi);
	$ongkir=$_POST['ijarak']*5000;
	fwrite($file, " || Ongkir: ");
	fwrite($file, $ongkir);
	fclose($file);
?>