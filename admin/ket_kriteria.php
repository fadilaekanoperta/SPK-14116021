<?php
$update = (isset($_GET['action']) AND $_GET['action'] == 'update') ? true : false;
if ($update) {
	$sql = $db->query("SELECT * FROM ket_kriteria WHERE id_ket_kriteria='$_GET[key]'");
	$row = $sql->fetch_assoc();
}
if (isset($_POST['tambah'])) {
	if ($update) {
		$sql = "UPDATE ket_kriteria SET id_ket_kriteria='$_POST[id_ket_kriteria]', 
        nama_kriteria='$_POST[nama_kriteria]', keterangan='$_POST[keterangan]' 
        WHERE id_ket_kriteria='$_GET[key]'";
	} else {
		$sql = "INSERT INTO ket_kriteria (`id_ket_kriteria`, `nama_kriteria`, `keterangan`) 
        VALUES ('$_POST[id_ket_kriteria]', '$_POST[nama_kriteria]', 
        '$_POST[keterangan]')";
	}

  if ($db->query($sql)) {
		echo alert("Berhasil!", "?admin=ket_kriteria");
	} else {
		echo alert("Gagal!", "?admin=ket_kriteria");
	}
}

if (isset($_GET['action']) AND $_GET['action'] == 'delete') {
  $db->query("DELETE FROM ket_kriteria WHERE id_ket_kriteria='$_GET[key]'");
	echo alert("Berhasil!", "?admin=ket_kriteria");
}
?>
<div class="container">
<div class="row">
	<div class="col-md-12">
	    <div class="panel panel-default">
	        <div class="panel-heading"><h3 class="text-center"><?= ($update) ? "EDIT DATA KRITERIA" : "KETERANGAN KRITERIA" ?></h3></div>
	        <div class="panel-body">
	            <table class="table table-condensed">
				<form action="" method="POST">
				<div class="col-md-3">
				<div class="form-group">
	                    <label for="id_ket_kriteria">ID</label>
	                    <input type="text" name="id_ket_kriteria" class="form-control"
                         <?= (!$update) ?: 'value="'.$row["id_ket_kriteria"].'"' ?> 
                         value="<?= $current_idKK?>" readonly>
	                </div>	
					</div>		
					<div class="col-md-3">	
	                <div class="form-group">
	                    <label for="nama_kriteria">Kriteria</label>
                        <select class="form-control" name="nama_kriteria" required>
					  	<option>--Pilih Kriteria--</option>
                        <?php if ($query = $db->query("SELECT * FROM kriteria")): ?>
	                    <?php while($data = $query->fetch_assoc()): ?>
						<option value="<?= $data["nama_kriteria"]?>" 
                        <?= (!$update) ?: (($row["nama_kriteria"] != $data["nama_kriteria"]) ?: 'selected="on"') 
                        ?>><?= $data["nama_kriteria"]?></option>
                        <?php endwhile ?>
	                    <?php endif ?>
					</select>
	                </div>
					</div>
					<div class="col-md-3">
					<div class="form-group">
						<label for="keterangan">Keterangan</label>
	                    <input type="text" name="keterangan" class="form-control" <?= (!$update) ?: 
                        'value="'.$row["keterangan"].'"' ?> required>
					</div>
					</div>
					<div class="col-md-3">
					<label>Aksi</label><br>
					<button type="submit" name="tambah" class="btn btn-<?= ($update) ? "warning" : "info" ?> btn-xs btn-custom">
                    <?= ($update) ? "UPDATE DATA" : "TAMBAH DATA" ?></button>
	                <?php if ($update): ?>
					<a href="?admin=ket_kriteria" class="btn btn-info btn-xs btn-custom">BATAL</a>
					<?php endif; ?>
					</div>
					<div class="space"><h1>Space</h1></div>
								<style>
								.space{
									color: white;
									padding-top: 30px;
								}
								.btn-custom{
									padding: 5px 8px 5px 8px;
								}
								</style>
	            </form>
	                <thead>
	                    <tr>
	                        <th>No</th>
	                        <th>Kriteria</th>
	                        <th>Keterangan</th>
	                        <th>Aksi</th>
	                    </tr>
	                </thead>
	                <tbody>
	                    <?php $no = 1; ?>
	                    <?php if ($query = $db->query(
                            "SELECT id_ket_kriteria, ket_kriteria.nama_kriteria 
                            AS nama_kriteria, kriteria.nama_kriteria AS nama_kriteria, keterangan
                            FROM ket_kriteria
                            JOIN kriteria
                            WHERE ket_kriteria.nama_kriteria=kriteria.nama_kriteria")): ?>
	                        <?php while($row = $query->fetch_assoc()): ?>
	                        <tr>
	                            <td><?=$no++?></td>
	                            <td><?=$row['nama_kriteria']?></td>
	                            <td><?=$row['keterangan']?></td>
	                            <td>
	                                <div class="btn-group">
	                                    <a href=
                                        "?admin=ket_kriteria&action=update&key=<?=$row['id_ket_kriteria']?>" 
                                        class="btn btn-warning btn-xs">Edit</a>
	                                    <a href=
                                        "?admin=ket_kriteria&action=delete&key=<?=$row['id_ket_kriteria']?>" 
                                        class="btn btn-danger btn-xs">Hapus</a>
	                                </div>
	                            </td>
	                        </tr>
	                        <?php endwhile ?>
	                    <?php endif ?>
	                </tbody>
	            </table>
	        </div>
	    </div>
	</div>
</div>