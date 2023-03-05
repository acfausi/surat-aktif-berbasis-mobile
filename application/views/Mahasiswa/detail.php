
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>print</title>
	<style>
		*{font-family: arial;}
		.font-25 {font-size: 25px;}
		.font-45 {font-size: 30px; font-weight: bold;}
	</style>
</head>
<body>
<div class="container text-center mt-3 font-25">
		<button type="button" onclick="printDiv('printableArea')" class="btn btn-primary">Print Surat Keterangan Aktif</button>
	</div>

	<div class="container mb-3" id="printableArea" style="border: 1px solid">
		<div class="row justify-content-center" style="margin-top: 300px;">
			<div class="col-md-10">
				
				<div class="cop text-center">
					<span class="font-45">SURAT KETERANGAN AKTIF KULIAH</span> <br>
					<span class="font-25">Nomor : <?= $get['nomer_surat'] ?>/SK/UNIBA/Aka/VI/2022</span>
				</div>
				<br><br>
				<div class="isi mt-3">
					<p class="font-25">Kepala BAUK Universitas Bahaudin Mudhary Madura (UNIBA Madura) dengan ini menerangkan bahwa:</p>

					<table width="100%" class="font-25">
						<tr>
							<td width="30%">Nama</td>
							<td width="10">:&nbsp;&nbsp;</td>
							<td><?= $get['nama'] ?></td>
						</tr>
						<tr>
							<td>NPM</td>
							<td width="10">:&nbsp;&nbsp;</td>
							<td><?= $get['nim'] ?></td>
						</tr>
						<tr>
							<td>Tempat, Tanggal Lahir</td>
							<td width="10">:&nbsp;&nbsp;</td>
							<td><?= $get['tetala'] ?></td>
						</tr>
						<tr>
							<td valign="top">Alamat</td>
							<td width="10" valign="top">:&nbsp;&nbsp;</td>
							<td><?= $get['alamat'] ?></td>
						</tr>
					</table>
				</div>

				<div class="bawah mt-3 text-justify">
					<p class="font-25">Adalah benar Mahasiswa Universitas Bahaudin Mudhary Madura (UNIBA Madura) dan tercatat sebagai mahasiswa aktif Program Studi <?= $get['jurusan'] ?> Semester <?= $get['semester']?> Tahun Akademik 2021/2022.</p>
				</div>

				<div class="bawah mt-3 text-justify">
					<p class="font-25">Demikian keterangan ini diberikan kepada yang bersangkutan agar dapat dipergunakan sebagaimana mestinya.   </p>
				</div>

				<div class="ttd mt-3 mb-3">
					<div class="row">
						<div class="col-md-7"></div>
						<div class="col-md-5">
							<span class="font-25">Sumenep, <?= date('d') ." ". date('F') ." ". date('Y') ?></span> <br>
							<span class="font-25">Kepala BAUK</span> <br>
							<img src="/projeq/a.png" width="60%" alt="">
							<p class="font-25 mb-0" style=""><b><u>Novi Wahyuningtias, S.P.</u></b></p>
							<span class="font-25" >NIK. 19791108.202108.2.060</span>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

		<script type="text/javascript">
			function printDiv(divName) {
		     var printContents = document.getElementById(divName).innerHTML;
		     var originalContents = document.body.innerHTML;

		     document.body.innerHTML = printContents;

		     window.print();

		     document.body.innerHTML = originalContents;
		}
		</script>
</body>
</html>


<?php 


	$data['results'][0]['geimetry'][0]['location'][1]['lng']

	$data['result'][] = [
		'kelas' => [
			'namakelas' => [
				'fasilitas' => 21356132,
				'jhhgf' => 12637523
			]
		],
		[
			'mahasiswa' => [
				'nama_mhs' => 'amir'
			]
		]
	];


 ?>