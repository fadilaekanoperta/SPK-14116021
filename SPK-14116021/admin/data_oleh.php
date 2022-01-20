<?php
$update = (isset($_GET['action']) AND $_GET['action'] == 'update') ? true : false;
if ($update) {
	$sql = $db->query("SELECT * FROM data_oleh WHERE nama_alternatif='$_GET[key]'");
	$row = $sql->fetch_assoc();
}

if (isset($_POST['tambah'])) {
	if ($update) {
		$sql = "UPDATE data_oleh SET id_oleh_oleh='$_POST[id_oleh_oleh]', 
		nama_alternatif='$_POST[nama_alternatif]' WHERE nama_alternatif='$_GET[key]'";
	} else {
		$sql = "INSERT INTO data_oleh VALUES ('$_POST[id_oleh_oleh]', '$_POST[nama_alternatif]')";
	}

  if ($db->query($sql)) {
		echo alert("Berhasil!", "?admin=data_oleh");
	} else {
		echo alert("Gagal!", "?admin=data_oleh");
	}
}

if (isset($_GET['action']) AND $_GET['action'] == 'delete') {
	$db->query("DELETE FROM data_oleh WHERE nama_alternatif='$_GET[key]'");
	  echo alert("Berhasil!", "?admin=data_oleh");
  }
?>
<div class="container">
<div class="row">
	<div class="col-md-12">
	    <div class="panel panel-default">
	        <div class="panel-heading"><h3 class="text-center"><?= ($update) ? "EDIT NAMA OLEH-OLEH" : "TAMBAH NAMA OLEH-OLEH" ?></h3></div>
	        <div class="panel-body">
	            <table class="table table-condensed">
				<form action="" method="POST">
				<div class="col-md-4">
				<div class="form-group">
	                    <label for="id_oleh_oleh">ID</label>
	                    <input type="text" name="id_oleh_oleh" class="form-control"
                         <?= (!$update) ?: 'value="'.$row["id_oleh_oleh"].'"' ?> value="<?= $current_idO?>" readonly>
	                </div>
				</div>
				<div class="col-md-4">				
	                <div class="form-group">
	                    <label for="nama_alternatif">Nama Oleh-Oleh</label>
	                    <input type="text" name="nama_alternatif" class="form-control" <?= (!$update) ?: 'value="'.$row["nama_alternatif"].'"' ?> required>
	                </div>
				</div>
				<div class="col-md-4">
				<label>Aksi</label><br>
					<button type="submit" name="tambah" class="btn btn-<?= ($update) ? "warning" : "info" ?> btn-xs btn-custom"><?= ($update) ? "UPDATE DATA" : "TAMBAH DATA" ?></button>
	                <?php if ($update): ?>
					<a href="?admin=data_oleh" class="btn btn-info btn-xs btn-custom">BATAL</a>
					<?php endif; ?>
				</div>
				<div class="space"><h1>Space</h1></div>
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
	                        <th>No</th>
	                        <th>Nama Oleh-Oleh</th>
	                        <th>Aksi</th>
	                    </tr>
	                </thead>
	                <tbody>
					<?php
						$query = $db->query("SELECT * FROM data_oleh");
						$no = 1;
						foreach ($query as $row):
							echo '<tr>';
							echo '<td>'.$no++.'</td>';
							echo '<td>'.$row['nama_alternatif'].'</td>';
							echo '<td>';
                                echo '<div class="btn-group">';
                                    echo '<a href="?admin=data_oleh&action=update&key='.$row['nama_alternatif'].'" class="btn btn-warning btn-xs">Edit</a>';
									echo '<a href="?admin=data_oleh&action=delete&key='.$row['nama_alternatif'].'" class="btn btn-danger btn-xs">Hapus</a>';
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