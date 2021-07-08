<?php

include_once '../include/head.php';
include_once '../controller/alternatif.inc.php';
$pro1 = new Alternatif($db);
$stmt1 = $pro1->readAll();
$stmt1x = $pro1->readAll();
$stmt1y = $pro1->readAll();
include_once '../controller/kriteria.inc.php';
$pro2 = new Kriteria($db);
$stmt2 = $pro2->readAll();
$stmt2x = $pro2->readAll();
$stmt2y = $pro2->readAll();
$stmt2yx = $pro2->readAll();
include_once '../controller/rangking.inc.php';
$pro = new Rangking($db);
$stmt = $pro->readKhusus();
$stmtx = $pro->readKhusus();
$stmty = $pro->readKhusus();

?>
<!DOCTYPE html>
<html lang="en">

    <body class="sb-nav-fixed">
          <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Data Kriteria</li>
                        </ol>
                        
<!--test-->
	

<div>
<h4>Nilai Alternatif Kriteria</h4>
<table class="table table-striped table-bordered" style="width:100%" id="tabeldata">
<thead>
		            <tr>
		                <th rowspan="2" style="vertical-align: middle" class="text-center">Alternatif</th>
		                <th colspan="<?php echo $stmt2x->rowCount(); ?>" class="text-center">Kriteria</th>
		            </tr>
		            <tr>
		            <?php
					while ($row2x = $stmt2x->fetch(PDO::FETCH_ASSOC)){
					?>
		                <th><?php echo $row2x['nama_kriteria'] ?><br/>(<?php echo $row2x['tipe_kriteria'] ?>)</th>
		            <?php
					}
					?>
		            </tr>
		        </thead>
		

        <tbody>
        <?php
		while ($row1x = $stmt1x->fetch(PDO::FETCH_ASSOC)){
		?>
		            <tr>
		                <th><?php echo $row1x['nama_alternatif'] ?></th>
		                <?php
		                $ax= $row1x['id_alternatif'];
						$stmtrx = $pro->readR($ax);
						while ($rowrx = $stmtrx->fetch(PDO::FETCH_ASSOC)){
						?>
		                <td>
		                	<?php 
		                	echo $rowrx['nilai_rangking'];
		                	?>
		                </td>
		                <?php
		                }
						?>
		            </tr>
		<?php
		}
		?>
        </tbody>

    </table>
<h4>Normalisai R</h4>
    <table class="table table-striped table-bordered" style="width:100%" id="tabeldata">
    <thead>
		            <tr>
		                <th rowspan="2" style="vertical-align: middle" class="text-center">Alternatif</th>
		                <th colspan="<?php echo $stmt2y->rowCount(); ?>" class="text-center">Kriteria</th>
		            </tr>
		            <tr>
		            <?php
					while ($row2y = $stmt2y->fetch(PDO::FETCH_ASSOC)){
					?>
		                <th><?php echo $row2y['nama_kriteria'] ?></th>
		            <?php
					}
					?>
		            </tr>
		        </thead>
		
		        <tbody>
		<?php
		while ($row1y = $stmt1y->fetch(PDO::FETCH_ASSOC)){
		?>
		            <tr>
		                <th><?php echo $row1y['nama_alternatif'] ?></th>
		                <?php
		                $ay= $row1y['id_alternatif'];
						$stmtry = $pro->readR($ay);
						while ($rowry = $stmtry->fetch(PDO::FETCH_ASSOC)){
						?>
		                <td>
		                	<?php 
		                	echo $rowry['nilai_normalisasi'];
		                	?>
		                </td>
		                <?php
		                }
						?>
		            </tr>
		<?php
		}
		?><tr>
			<td><b>Bobot</b></td>
		            <?php
					while ($row2yx = $stmt2yx->fetch(PDO::FETCH_ASSOC)){
					?>
		                <td><b><?php echo $row2yx['bobot_kriteria'] ?></b></td>
		            <?php
					}
					?>
		            </tr>
        </tbody>

    </table>

    </table>
<h4>Hasil Akhir</h4>
    <table class="table table-striped table-bordered" style="width:100%" id="tabeldata">
    <thead>
		            <tr>
		                <th rowspan="2" style="vertical-align: middle" class="text-center">Alternatif</th>
		                <th colspan="<?php echo $stmt2->rowCount(); ?>" class="text-center">Kriteria</th>
		                <th rowspan="2" style="vertical-align: middle" class="text-center">Hasil</th>
		            </tr>
		            <tr>
		            <?php
					while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)){
					?>
		                <th><?php echo $row2['nama_kriteria'] ?></th>
		            <?php
					}
					?>
		            </tr>
		        </thead>
		
		        <tbody>
		<?php
		while ($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)){
		?>
		            <tr>
		                <th><?php echo $row1['nama_alternatif'] ?></th>
		                <?php
		                $a= $row1['id_alternatif'];
						$stmtr = $pro->readR($a);
						while ($rowr = $stmtr->fetch(PDO::FETCH_ASSOC)){
						?>
		                <td>
		                	<?php 
		                	echo $rowr['bobot_normalisasi'];
		                	?>
		                </td>
		                <?php
		                }
						?>
						<td>
							<?php 
							echo $row1['hasil_alternatif'];
							?>
						</td>
		            </tr>
		<?php
		}
		?>
        </tbody>

    </table>
  </div>
                </main>
                <?php
include_once '../include/footer.php';
?>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/chart-area-demo.js"></script>
        <script src="../assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/datatables-demo.js"></script>
		<script src="../js/highcharts.js"></script>
	<script src="../js/exporting.js"></script>
	<script src="../js/jquery-1.11.3.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	
	   
    </body>

	
</html>
