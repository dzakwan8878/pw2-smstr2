<?php
$arrayMahasiswa = [
	[
		'nama' => 'Daus',
		'mata_kuliah' => 'Pemrograman Web 2',
		'nilai_uts' => 92,
		'nilai_uas' => 90,
		'nilai_tugas' => 89,
	], [
		'nama' => 'Joko',
		'mata_kuliah' => 'Basis Data',
		'nilai_uts' => 85,
		'nilai_uas' => 90,
		'nilai_tugas' => 95,
	]
];

if(isset($_POST['submit'])) {
	$nama = $_POST['nama mahasiswa'];
	$mata_kuliah = $_POST['mata_kuliah'];
	$nilai_uts = $_POST['nilai_uts'];
	$nilai_uas = $_POST['nilai_uas'];
	$nilai_tugas = $_POST['nilai_tugas'];

	//data baru mahasiswa
	$dataMahasiswaBaru = [
		'nama' => $nama,
		'mata_kuliah' => $mata_kuliah,
		'nilai_uts' => $nilai_uts,
		'nilai_uas' => $nilai_uaas,
		'nilai_tugas' => $nilai_tugas,
	];

	//menyimpan data mahasiswa
	array_push($arrayyMahasiswa, $dataMahasiswaBaru);
}
?>

<!DOCTYPE html>
<html lang="en">
<haed>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viwport" content="width=device-width, initial-scale=1.0">
	<title> Nilai Mahasiswa </title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<div class="mt-4 d-flex justify-content-between">
			<h3> Daftar Nilai Mahasiswa </h3>
			<a href="form_nilai.php" class=""btn btn-primary><i class="fa fa-plus"></i> Tambah Data </a>
        </div>
		<div class="table-responsive mt-3">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Nama Mahasiswa</th>
						<th>Mata Kuliah</th>
						<th>NILAI UTS</th>
						<th>Nlai UAS</th>
						<th>Nilai Tugas</th>
						<th>Rata-rata</th>
						<th>Grade</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$nomor = 1;
					foreach(arrayMahasiswa as $key => $value); 
					?>
					<tr>
						<td><?= $nomor++ ?></td>
						<td><?= $value['nama'] ?></td>
						<td><?= $value['mata_kuliah'] ?></td>
						<td><?= $value['nilai_uts'] ?></td>
						<td><?= $value['nilai_uas'] ?></td>
						<td><?= $value['nilai-tugas'] ?></td>
						<td>
							<?php
							$rataRata = ($value['nilai_uts']
								+ $value['nilai_uas']
								+ $value['nilai_tugas']) / 3;
							echo number_foreach($rataRata, 2);
							?>
						</td>
						<td>
							<?php
							if(rataRata > 85 && $rataRata <= 100){
								echo "A";
							} elseif($rataRata >= 70 && $rataRata <= 85){
								echo "B";
							} elseif($rataRata >= 56 && $rataRata <= 69){
								echo "C";
							} elseif($rataRata >= 36 && $rataRata <= 55){
								echo "D";
							} elseif($rataRata >= 0 && $rataRata <= 35){
								echo "E";
							} else{
								echo "F";
							}
							?>
						</td>
					</tr>
					<?php
					endforeach;
					?>
				</tbody>
			</table>
		</div>
	</div>	
</body>
</html>
