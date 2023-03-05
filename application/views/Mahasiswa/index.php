 <main id="main" class="main">

</html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mahasiswa</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
    	<div class="pagetitle">
     		 <h1>Data Dosen</h1>
    	</div><!-- End Page Title -->
   </div>
  <a class="btn btn-sm btn-primary mb-3" ><i class="bi bi-plus"></i> Tambah</a>
</div>
  <div class="container-fluid">
    <div class="card shadow mb-4">
      <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped" id="example" class="display" style="width:130%">
              <thead>
					<tr>
						<th>No</th>
						<th>NIM</th>
						<th>Nama Mahasiswa</th>
						<th>Alamat</th>
						<th>Tempat Tanggal Lahir</th>
						<th>Jurusan</th>
						<th>Angkatan</th>
						<th>Semester</th>
						<th>Surat</th>
						<th>Email</th>
						<th> Fungsi</th>
					</tr>
					<?php $f = 1; ?>
					<?php $a = 001; ?>
					<?php foreach ($mahasiswa as $mahasiswa) :?>

				<tbody>		
					<tr> 
						<th> <?=$f; ?> </th>
						<td> <?= $mahasiswa ['nim']; ?> </td>
						<td> <?= $mahasiswa ['nama']; ?> </td>
						<td> <?= $mahasiswa ['alamat']; ?> </td>
						<td> <?= $mahasiswa ['tetala']; ?> </td>
						<td> <?= $mahasiswa ['jurusan']; ?> </td>
						<td> <?= $mahasiswa ['angkatan']; ?> </td>
						<td> <?= $mahasiswa ['semester']; ?> </td>
						<td> <?= $a; ?> </td>
						<td> <?=$mahasiswa['email']; ?> </td>
						<td>
							<a href=" <?= base_url(); ?>mahasiswa/hapus/<?=$mahasiswa['id_mhs'];?>" class="btn btn-dinger btn-sm "><i class="bi bi-trash" onclick="return confirm('yakin');"></a>
							<a href=" <?= base_url(); ?>mahasiswa/detail/<?=$mahasiswa['id_mhs'];?>" class="badge badge-primary float-right">Detail</a>
						</td>
					</tr>
					<?php $f++; ?>
					<?php $a++; ?>
				<?php endforeach; ?>
				</tbody>
			</table>
			          <script>
              $(document).ready(function () {
              $('#example').DataTable();
              });
            </script>
		</div>
	</div>
  </div>      
</div>
</body>
</html>