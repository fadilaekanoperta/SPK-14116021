<?php
$update = (isset($_GET['action']) AND $_GET['action'] == 'update') ? true : false;
if ($update) {
	$sql = $db->query("SELECT * FROM alternatif WHERE id_alternatif='$_GET[key]'");
	$row = $sql->fetch_assoc();
}

if (isset($_POST['tambah'])) {
	if ($update) {
		$sql = "UPDATE alternatif SET id_alternatif='$_POST[id_alternatif]', 
		nama_alternatif='$_POST[nama_alternatif]',nama_kriteria='$_POST[nama_kriteria]',
		id_ket_kriteria='$_POST[id_ket_kriteria]' WHERE id_alternatif='$_GET[key]'";
	} else {
		$sql = "INSERT INTO alternatif (`id_alternatif`, `nama_alternatif`, `nama_kriteria`, `id_ket_kriteria`)
		VALUES ('$_POST[id_alternatif]', '$_POST[nama_alternatif]', '$_POST[nama_kriteria]',
		'$_POST[id_ket_kriteria]')";
	}

  if ($db->query($sql)) {
		echo alert("Berhasil!", "?admin=alternatif");
	} else {
		echo alert("Gagal!", "?admin=alternatif");
	}
}

if (isset($_GET['action']) AND $_GET['action'] == 'delete') {
  $db->query("DELETE FROM alternatif WHERE id_alternatif='$_GET[key]'");
	echo alert("Berhasil!", "?admin=alternatif");
}
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading"><h3 class="text-center"><?= ($update) ? "EDIT DATA OLEH-OLEH" : "DATA OLEH-OLEH KHAS LAMPUNG" ?></h3></div>
					<div class="panel-body">
						<table class="table table-condensed">
							<form action="" method="POST">
								<div class="col-md-1">
									<div class="form-group">
										<label for="id_alternatif">ID</label>
										<input type="text" name="id_alternatif" class="form-control" 
										<?= (!$update) ?: 'value="'.$row["id_alternatif"].'"' ?> value="<?= $current_id?>" readonly>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<label for="nama_alternatif">Nama Oleh-Oleh</label>
										<select class="form-control" name="nama_alternatif" required>
											<option>--Pilih Nama Oleh-Oleh--</option>
											<?php if ($query2 = $db->query("SELECT * FROM data_oleh")): ?>
											<?php while($data2 = $query2->fetch_assoc()): ?>
											<option value="<?= $data2["nama_alternatif"]?>" <?= (!$update) ?: (($row["nama_alternatif"] != $data2["nama_alternatif"]) ?: 'selected="on"') ?>><?= $data2["nama_alternatif"]?></option>
											<?php endwhile ?>
											<?php endif ?>
										</select>	
									</div>		
								</div>		
								<div class="col-md-8">
									<div class="form-group">
									<?php if ($query = $db->query("SELECT * FROM kriteria")): ?>
									<?php while($data = $query->fetch_assoc()): ?>
									<div class="col-md-3">
									<label for="nama_kriteria"><?= $data["nama_kriteria"]?></label>
										<br><select class="form-control" name="nama_kriteria" required>
											<option>--Pilih Keterangan <?= $data["nama_kriteria"]?>--</option>
											<option value="<?= $data["nama_kriteria"]?>" <?= (!$update) ?: (($row["nama_kriteria"] != $data["nama_kriteria"]) ?: 'selected="on"') ?>><?= $data["keterangan"]?></option>
										</select><br>
									</div>
									<?php endwhile ?>
									<?php endif ?>
										</select>
									</div>	
								</div>
								<div class="col-md-1">
								<label>Aksi</label><br>
								<button type="submit" name="tambah" class="btn btn-<?= ($update) ? "warning" : "info" ?> btn-xs btn-custom"><?= ($update) ? "UPDATE" : "TAMBAH" ?></button>
								<?php if ($update): ?>
									<a href="?admin=alternatif" class="btn btn-info btn-xs btn-custom">BATAL</a>
								<?php endif; ?>
								</div>
								<div class="space"><h2>Space</h2></div>
								<style>
								.space{
									color: white;
								}
								.btn-custom{
									padding: 5px 8px 5px 8px;
									margin-bottom: 5px;
								}
								</style>
							</form>
							<thead>
							<tr>
								<th>No</th>
								<th>Nama Oleh-Oleh</th>
								<?php 
									// $query = mysqli_query($db,"SELECT * FROM kriteria");
									$query = $db->query("SELECT * FROM kriteria");
									while($row = $query->fetch_assoc()): ?>
									<th><?= $row['nama_kriteria']; ?></th>
									<?php endwhile ?>
								<th>Aksi</th>
							</tr>
							</thead>
							<tbody>
								<?php 
								$no = 1;
								$last_alt = null; ?>
								<?php $query = $db->query(
									"SELECT id_alternatif, alternatif.nama_alternatif, alternatif.nama_kriteria, 
									GROUP_CONCAT(ket_kriteria.keterangan ORDER BY alternatif.nama_kriteria) AS keterangan
									FROM alternatif 
									INNER JOIN ket_kriteria 
									ON alternatif.id_ket_kriteria = ket_kriteria.id_ket_kriteria 
									GROUP BY alternatif.nama_alternatif"); ?>
									<?php
									foreach ($query as $row): ?>
										<?php if ($last_alt == null){
										$last_alt = $row['nama_alternatif'];?>
										<tr>
										<td><?= $no++ ?></td>
										<td><?= $row['nama_alternatif'] ?></td>
										<?php }else if($last_alt!=$row['nama_alternatif']){?>
										</tr>
										<tr>
										<td><?= $no++ ?></td>
										<td><?= $row['nama_alternatif'] ?></td>
										<?php  } ?>
										<?php foreach (explode(',',$row['keterangan']) as $keterangan):?>
											<td><?= $keterangan ?></td>
										<?php endforeach ?>
										<td>
											<div class="btn-group">
												<a href="?admin=alternatif&action=update&key=<?=$row['id_alternatif']?>" class="btn btn-warning btn-xs">Edit</a>
												<a href="?admin=alternatif&action=delete&key=<?=$row['id_alternatif']?>" class="btn btn-danger btn-xs">Hapus</a>
											</div>
										</td>
									<?php endforeach
									?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
