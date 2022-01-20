<?php
if (isset($_POST['edit'])) {
	$sql = "UPDATE ket_kriteria SET id_ket_kriteria='$_POST[id_ket_kriteria]',
	nama_kriteria='$_POST[nama_kriteria]', keterangan='$_POST[keterangan]', 
	bobot_pilih='$_POST[bobot_pilih]' WHERE id_ket_kriteria='$_GET[key]'";
	
  	if ($db->query($sql)) {
		echo alert("Data Berhasil Ditambahkan!", "?user=bobot_pilihan&edit&key=K001");
	} else { 
		echo alert("Gagal!", "?user=bobot_pilihan&edit&key=K001");
	}
}
?>
<style type="text/css">
	.space{
		color: white;
		padding-top: 30px;
	}
	.btn-custom{ 
		float: right;
		padding: 0 30px 0 30px;
		margin-bottom: 50px;
	}
</style>
<div class="container">
<div class="row">
	<div class="col-md-12">
	    <div class="panel panel-default">
	        <div class="panel-heading text-center">
			<h3>DAFTAR KRITERIA</h3><br>
			<h5>NOTE: EDIT SEMUA NILAI PADA MASING-MASING KRITERIA YANG SESUAI DENGAN ANDA !!!<br><br>
			BERIKAN RENTANG NILAI YANG BERBEDA PADA SETIAP 1 KRITERIA</h5>
			</div>
	        <div class="panel-body">
	            <table class="table table-condensed">
				<div class="text-center">
				<small>EXPIRED DATE, TEKSTUR, VARIAN RASA = 5: Sangat Setuju, 4: Setuju, 3: Netral, 2: Tidak Setuju, 1: Sangat Tidak Setuju</small><br>
				<small>HARGA = 1: Sangat Setuju, 2: Setuju, 3: Netral, 4: Tidak Setuju, 5: Sangat Tidak Setuju</small><br><br>
				</div>
				<form action="" method="POST">
				<?php
				$sql = $db->query("SELECT * FROM ket_kriteria WHERE id_ket_kriteria='$_GET[key]'");
				$tampil = $sql->fetch_assoc();
				?>
				<div class="col-md-2">
				<div class="form-group">
	                    <label for="id_ket_kriteria">ID</label>
	                    <input type="text" name="id_ket_kriteria" class="form-control" value="<?=$tampil['id_ket_kriteria']?>" readonly>
	                </div>
					</div>
					<div class="col-md-3">
                    <div class="form-group">
	                  <label for="nama_kriteria">Kriteria</label>
                      <input type="text" name="nama_kriteria" class="form-control" value="<?=$tampil['nama_kriteria']?>" readonly>
                    </div>			
					</div>
					<div class="col-md-3">
					<div class="form-group">
						<label for="keterangan">Keterangan</label>
	                    <input type="text" name="keterangan" class="form-control" value="<?=$tampil["keterangan"] ?>" readonly>
					</div>
					</div>
					<div class="col-md-2">
					<div class="form-group">
						<label for="bobot_pilih">Rentang Nilai</label><br>
						<select class="form-control" name="bobot_pilih">
					  	<option>--Pilih Rentang Nilai--</option>
						<option value="5" <?= (($tampil["bobot_pilih"] != "5") ?: 'selected="on"') ?>>5</option>
						<option value="4" <?= (($tampil["bobot_pilih"] != "4") ?: 'selected="on"') ?>>4</option>
						<option value="3" <?= (($tampil["bobot_pilih"] != "3") ?: 'selected="on"') ?>>3</option>
						<option value="2" <?= (($tampil["bobot_pilih"] != "2") ?: 'selected="on"') ?>>2</option>
						<option value="1" <?= (($tampil["bobot_pilih"] != "1") ?: 'selected="on"') ?>>1</option>
					</select>
					</div>
					</div>
					<div class="col-md-2">
					<label>Aksi</label><br>
					<button type="submit" name="edit" class="btn btn-warning btn-block">INPUT DATA</button>
					 </div>
					 <div class="space"><h1>Space</h1></div>
	            </form>
	                <thead>
	                    <tr>
	                        <th>No</th>
                            <th>Kriteria</th>
							<th>Keterangan</th>
							<th>Nilai</th>
	                        <th>Aksi</th>
	                    </tr>
	                </thead>
	                <tbody>
						<?php
						$query = $db->query("SELECT * FROM ket_kriteria");
						$no = 1;
						foreach ($query as $row):
							echo '<tr>';
							echo '<td>'.$no++.'</td>';
							echo '<td>'.$row['nama_kriteria'].'</td>';
							echo '<td>'.$row['keterangan'].'</td>';
							echo '<td>'.$row['bobot_pilih'].'</td>';
							echo '<td>';
                                echo '<div class="btn-group">';
                                    echo '<a href="?user=bobot_pilihan&edit&key='.$row['id_ket_kriteria'].'" class="btn btn-warning btn-xs">Edit</a>';
                                echo '</div>';
                            echo '</td>';
						endforeach;
						?>
	                </tbody>
	            </table>
	        </div>
	    </div>
		<a href="?user=hasil" class="btn btn-info btn-custom"><h5>Next</h5></a>
	</div>
</div>
