<div class="container">
<div class="row">
	<div class="col-md-12">
	    <div class="panel panel-default">
	        <div onclick="myRating()" class="panel-heading rating"><h3 class="text-center collapsible">Nilai Kriteria Pada Setiap Alternatif</h3></div>
	        <div class="panel-body" id="myRating">
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
						foreach ($query as $row):
							echo '<tr>';
							echo '<td>'.$no++.'</td>';
							echo '<td>'.$row['nama_alternatif'].'</td>';
							foreach (explode(',',$row['bobot']) as $bobot):
								echo '<td>'.$bobot.'</td>';
							endforeach;
						endforeach;
						?>
	                </tbody>
	            </table>
	        </div>
	    </div>
	</div>
</div>
