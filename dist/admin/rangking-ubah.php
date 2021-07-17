<?php
include_once '../include/head.php';
include_once '../controller/alternatif.inc.php';
include_once '../controller/kriteria.inc.php';
include_once '../controller/nilai.inc.php';
$pgn1 = new Alternatif($db);
$pgn2 = new Kriteria($db);
$pgn3 = new Nilai($db);

$ia = isset($_GET['ia']) ? $_GET['ia'] : die('ERROR: missing ID.');
$ik = isset($_GET['ik']) ? $_GET['ik'] : die('ERROR: missing ID.');

include_once '../controller/rangking.inc.php';
$eks = new Rangking($db);

$eks->ia = $ia;
$eks->ik = $ik;

$eks->readOne();

if($_POST){

	$eks->nn = $_POST['nn'];
	
	if($eks->update()){
		echo "<script>location.href='rangking.php'</script>";
	} else{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Gagal Ubah Data!</strong> Terjadi kesalahan, coba sekali lagi.
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
                            <li class="breadcrumb-item active">Ubah Data Ranking</li>
                        </ol>
                        
<!--test-->
<div class="container">

<form method="post">
				  <div class="form-group">
          <label for="nn">Nilai</label>
				    <select class="form-control" id="nn" name="nn">
				    	<option><?php echo $eks->nn; ?></option>
				    	<?php
						$stmt4 = $pgn3->readAll();
						while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)){
							extract($row4);
							echo "<option value='{$jum_nilai}'>{$ket_nilai}</option>";
						}
					    ?>
				    </select>
				  </div>
				  <button type="submit" class="btn btn-primary">Ubah</button>
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
