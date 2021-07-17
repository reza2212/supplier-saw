<?php
include_once '../include/head.php';
include_once '../controller/alternatif.inc.php';
$pgn1 = new Alternatif($db);
include_once '../controller/kriteria.inc.php';
$pgn2 = new Kriteria($db);
include_once '../controller/nilai.inc.php';
$pgn3 = new Nilai($db);
if($_POST){
	
	include_once '../controller/rangking.inc.php';
	$eks = new rangking($db);

	$eks->ia = $_POST['ia'];
	$eks->ik = $_POST['ik'];
	$eks->nn = $_POST['nn'];
	
	if($eks->insert()){
    echo "<script>location.href='rangking.php'</script>";

	}else{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Gagal Tambah Data!</strong> Terjadi kesalahan, coba sekali lagi.
</div>
<?php
	}
}
?>

    <body class="sb-nav-fixed">
          <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Data Ranking</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Tambah Data Ranking</li>
                        </ol>

<!--test-->
<div class="container">

<form method="post">
				  <div class="form-group">
          <label for="ia">Alternatif</label>
				    <select class="form-control" id="ia" name="ia">
				    	<?php
						$stmt3 = $pgn1->readAll();
						while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)){
							extract($row3);
							echo "<option value='{$id_alternatif}'>{$nama_alternatif}</option>";
						}
					    ?>
				    </select>
				  </div>
          <div class="form-group">
				    <label for="ik">Kriteria</label>
				    <select class="form-control" id="ik" name="ik">
				    	<?php
						$stmt2 = $pgn2->readAll();
						while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)){
							extract($row2);
							echo "<option value='{$id_kriteria}'>{$nama_kriteria}</option>";
						}
					    ?>
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="nn">Nilai</label>
				    <select class="form-control" id="nn" name="nn">
				    	<?php
						$stmt4 = $pgn3->readAll();
						while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)){
							extract($row4);
							echo "<option value='{$jum_nilai}'>{$ket_nilai}</option>";
						}
					    ?>
				    </select>
            </div>
				  <button type="submit" class="btn btn-primary">Simpan</button>
				  <button type="button" onclick="location.href='rangking.php'" class="btn btn-success">Kembali</button>
				</form>
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



    </body>


</html>