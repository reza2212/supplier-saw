<?php
include_once '../include/head.php';
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
include_once '../controller/alternatif.inc.php';
$eks = new Alternatif($db);

$eks->id = $id;

$eks->readOne();

if($_POST){

	$eks->kt = $_POST['kt'];

	if($eks->update()){
		echo "<script>location.href='alternatif.php'</script>";
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
                        <h1 class="mt-4">Data Alternatif</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Ubah Data Alternatif</li>
                        </ol>

<!--test-->
<div class="container">

<form method="post">
				  <div class="form-group">
				    <label for="kt">Nama Alternatif</label>
				    <input type="text" class="form-control" id="kt" name="kt" value="<?php echo $eks->kt; ?>">
				  </div>
				  <button type="submit" class="btn btn-primary">Ubah</button>
				  <button type="button" onclick="location.href='alternatif.php'" class="btn btn-success">Kembali</button>
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