<div class="container">
<div class="row">
<?php
include 'rating_kecocokan.php';
include 'normalisasi.php';

$query_acuan = $db->query("SELECT bobot_acuan FROM kriteria ORDER BY nama_kriteria ASC");
$query_alternatif = $db->query("SELECT DISTINCT nama_alternatif FROM alternatif ORDER BY nama_alternatif ASC");

foreach($query_acuan as $row){
	$bobot_acuan[] = $row['bobot_acuan'];
}  
foreach($query_alternatif as $row){
	$nama_alternatif[] = $row['nama_alternatif'];
}

$bobot_preferensi = array();

for ($i=0; $i<$n_alternatif; $i++) {
	$preferensi = 0;
	for($j=0; $j<$n_kriteria; $j++) {
		$preferensi += $bobot_acuan[$j] * $matriks_normalisasi[$i][$j];
	}
	$bobot_preferensi[$nama_alternatif[$i]] = $preferensi;
}
arsort($bobot_preferensi);
?>
<style>
	#myRating, #myNormalisasi{
		display:none;
	}
	.panel-heading:hover {
		background-color: #555;	
		color: white;
	}
	.rank .collapsible:after { /* Unicode character for "minus" sign (-) */
	content: "\2212";
	color: white;
	font-weight: bold;
	float: right;
	margin-left: 5px;
	}
	.rank .active:after { /* Unicode character for "plus" sign (+) */
		content: '\002B';
	}
	.rating .collapsible:after, .normalisasi .collapsible:after { /* Unicode character for "plus" sign (+) */
		content: '\002B';
	color: white;
	font-weight: bold;
	float: right;
	margin-left: 5px;
	}
	.rating .active:after, .normalisasi .active:after { /* Unicode character for "minus" sign (-) */
		content: "\2212";
	}
</style>
	<div class="col-md-12">
	    <div class="panel panel-default">
			<div onclick="myRank()" class="panel-heading rank"><h3 class="text-center collapsible">Hasil Ranking</h3></div>            
	        <div class="panel-body" id="myRank">
	            <table class="table table-condensed">
	                <thead>
					<tr>
						<th>No</th>
						<th>Nama Oleh-Oleh</th>
						<th>Nilai Preferensi</th>
					</tr>
	                </thead>
	                <tbody>
						<?php
						$no = 1;
						foreach ($bobot_preferensi as $nama_alternatif => $bobot):
							echo '<tr>';
							echo '<td>'.$no++.'</td>';
							echo '<td>'.$nama_alternatif.'</td>';
							echo '<td>'.$bobot.'</td>';
							echo '</tr>';
						endforeach;
						?>
	                </tbody>
	            </table>
	        </div>
	    	</div>
		</div>
	</div>
<script>
function myRating() {
  var x = document.getElementById("myRating");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
function myNormalisasi() {
  var x = document.getElementById("myNormalisasi");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
function myRank() {
  var x = document.getElementById("myRank");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>