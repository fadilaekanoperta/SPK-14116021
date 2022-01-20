<?php
$query = $db->query(
	"SELECT GROUP_CONCAT(ket_kriteria.bobot_pilih ORDER BY alternatif.nama_kriteria) AS bobot
	FROM alternatif 
	INNER JOIN ket_kriteria 
	ON alternatif.id_ket_kriteria = ket_kriteria.id_ket_kriteria 
	GROUP BY alternatif.nama_alternatif");
$query1 = $db->query(
	"SELECT tipe_kriteria
	FROM kriteria 
	GROUP BY kriteria.nama_kriteria");

$matriks_bobot = array();
foreach ($query as $row) {
	$kriteria = explode(',',$row['bobot']);	
	array_push($matriks_bobot,$kriteria);
}
foreach ($query1 as $row1) {
	$tipe_kriteria[] = $row1['tipe_kriteria'];
}

$matriks_normalisasi = $matriks_bobot;
$n_alternatif = count($matriks_bobot);
$n_kriteria = count($matriks_bobot[0]);
for ($i=0; $i < $n_alternatif; $i++) { 
	
	for ($j=0; $j < $n_kriteria; $j++) { 
		if ($tipe_kriteria[$j] == 'Cost') {
			$matriks_normalisasi[$i][$j] = 
			round(min(array_column($matriks_bobot, $j)) / $matriks_bobot[$i][$j] , 2);
		} else {
			$matriks_normalisasi[$i][$j] = 
			round($matriks_bobot[$i][$j] / max(array_column($matriks_bobot, $j)) , 2);
		}
	}
}
?>
<div class="row">
	<div class="col-md-12">
	    <div class="panel panel-default">
	        <div onclick="myNormalisasi()" class="panel-heading normalisasi"><h3 class="text-center collapsible">Matriks Normalisasi</h3></div>
	        <div class="panel-body" id="myNormalisasi">
	            <table class="table table-condensed">
	                <thead>
					<tr>
						<th>No</th>
						<th>Nama Oleh-Oleh</th>
                        <?php 
						$query = $db->query("SELECT * FROM kriteria");
						foreach ($query as $row):
							echo '<th>'.$row['nama_kriteria'].'</th>';
						endforeach;
						?>
					</tr>
	                </thead>
	                <tbody>
	                    <?php 
						$query = $db->query(
						"SELECT alternatif.nama_alternatif, alternatif.nama_kriteria, 
						GROUP_CONCAT(ket_kriteria.bobot_pilih ORDER BY alternatif.nama_kriteria) AS bobot
						FROM alternatif 
						INNER JOIN ket_kriteria 
						ON alternatif.id_ket_kriteria = ket_kriteria.id_ket_kriteria 
						GROUP BY alternatif.nama_alternatif");
						$no = 1;
						$i = 0;
						foreach ($query as $row):
							echo '<tr>';
							echo '<td>'.$no++.'</td>';
							echo '<td>'.$row['nama_alternatif'].'</td>';
							foreach ($matriks_normalisasi[$i] as $kriteria):
								echo '<td>'.$kriteria.'</td>';
							endforeach;
							$i++;
						endforeach;
						?>
	                </tbody>
	            </table>
	        </div>
			</div>
	    </div>
	</div>
</div>	