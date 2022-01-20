<?php
$update = (isset($_GET['action']) AND $_GET['action'] == 'update') ? true : false;
if ($update) {
	$sql = $db->query("SELECT * FROM kriteria WHERE id_kriteria='$_GET[key]'");
	$row = $sql->fetch_assoc();
}

if (isset($_POST['tambah'])) {
	if ($update) {
		$sql = "UPDATE kriteria SET id_kriteria='$_POST[id_kriteria]', nama_kriteria='$_POST[nama_kriteria]', 
		tipe_kriteria='$_POST[tipe_kriteria]', bobot_acuan='$_POST[bobot_acuan]' WHERE id_kriteria='$_GET[key]'";
	} else {
		$sql = "INSERT INTO kriteria VALUES ('$_POST[id_kriteria]', '$_POST[nama_kriteria]', 
		'$_POST[tipe_kriteria]', '$_POST[bobot_acuan]')";
		
	}
  if ($db->query($sql)) {
		echo alert("Berhasil!", "?admin=kriteria");
	} else {
		echo alert("Gagal!", "?admin=kriteria");
	}
}

if (isset($_GET['action']) AND $_GET['action'] == 'delete') {
  $db->query("DELETE FROM kriteria WHERE id_kriteria='$_GET[key]'");
	echo alert("Berhasil!", "?admin=kriteria");
}
?>
<div class="container">
	<div class="row">
		<div class="col-md">
			<div class="panel panel-default">
				<div class="panel-heading"><h3 class="text-center"><?= ($update) ? "EDIT DATA KRITERIA" : "KRITERIA" ?></h3></div>
					<div class="panel-body">
						<table class="table table-condensed">
							<form action="" method="POST">
								<div class="col-md-2">
									<div class="form-group">
										<label for="id_kriteria">ID</label>
										<input type="text" name="id_kriteria" class="form-control"
										<?= (!$update) ?: 'value="'.$row["id_kriteria"].'"' ?> value="<?= $current_idK?>" readonly>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="nama_kriteria">Kriteria</label>
										<input type="text" name="nama_kriteria" class="form-control" <?= (!$update) ?: 'value="'.$row["nama_kriteria"].'"' ?> required>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
									<label for="tipe_kriteria">Tipe Kriteria</label>
									<select class="form-control" name="tipe_kriteria" required>
										<option>--Pilih Tipe Kriteria--</option>
										<option value="Cost" <?= (!$update) ?: (($row["tipe_kriteria"] != "Cost") ?: 'selected="on"') ?>>Cost</option>
										<option value="Benefit" <?= (!$update) ?: (($row["tipe_kriteria"] != "Benefit") ?: 'selected="on"') ?>>Benefit</option>
									</select>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<label for="bobot_acuan">Nilai Bobot Acuan</label>
										<input type="text" name="bobot_acuan" class="form-control" <?= (!$update) ?: 'value="'.$row["bobot_acuan"].'"' ?> required>
									</div>
								</div>
								<div class="col-md-2">
									<label>Aksi</label><br>
									<button type="submit" name="tambah" class="btn btn-<?= ($update) ? "warning" : "info" ?> btn-xs btn-custom"><?= ($update) ? "UPDATE DATA" : "TAMBAH DATA" ?></button>
									<?php if ($update): ?>
									<a href="?admin=kriteria" class="btn btn-info btn-xs btn-custom">BATAL</a>
									<?php endif; ?>
								</div>
								<div class="space"><h3>Space</h3></div>
								<style>
								.space{
									color: white;
								}
								.btn-custom{
									padding: 5px 8px 5px 8px;
								}
								</style>
							</form>
							<thead>
								<tr>
									<br><th>No</th>
									<th>Kriteria</th>
									<th>Tipe Kriteria</th>
									<th>Nilai Bobot Acuan (total=1)</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
							<?php
							$query = $db->query("SELECT * FROM kriteria");
							$no = 1;
							foreach ($query as $row):
								echo '<tr>';
								echo '<td>'.$no++.'</td>';
								echo '<td>'.$row['nama_kriteria'].'</td>';
								echo '<td>'.$row['tipe_kriteria'].'</td>';
								echo '<td>'.$row['bobot_acuan'].'</td>';
								echo '<td>';
									echo '<div class="btn-group">';
										echo '<a href="?admin=kriteria&action=update&key='.$row['id_kriteria'].'" class="btn btn-warning btn-xs">Edit</a>';
										echo '<a href="?admin=kriteria&action=delete&key='.$row['id_kriteria'].'" class="btn btn-danger btn-xs">Hapus</a>';
									echo '</div>';
								echo '</td>';
							endforeach;
							?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>