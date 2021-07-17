<?php
include_once '../include/head.php';
include_once '../controller/alternatif.inc.php';
$pro1 = new Alternatif($db);
$stmt1 = $pro1->readAll();
include_once '../controller/kriteria.inc.php';
$pro2 = new Kriteria($db);
$stmt2 = $pro2->readAll();
include_once '../controller/rangking.inc.php';
$pro = new Rangking($db);
$stmt = $pro->readKhusus();
?>


<!DOCTYPE html>
<html lang="en">

    <body class="sb-nav-fixed">
          <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Data Ranking</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Rangking</li>
                        </ol>

<!--test-->

<div class="row">
		<div class="col-md-12 text-left">
			<button onclick="location.href='rangking-baru.php'" class="btn btn-primary">Tambah Data</button>
		</div>
	</div>
<br>
<div>
<table class="table table-striped table-bordered" style="width:100%" id="tabeldata">
        <thead>
            <tr>
            <th width="30px">No</th>
		                <th>Alternatif</th>
		                <th>Kriteria</th>
		                <th>Nilai</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>

        <tfoot>
            <tr>
            <th width="30px">No</th>
		                <th>Alternatif</th>
		                <th>Kriteria</th>
		                <th>Nilai</th>
                <th colspan="2">Aksi</th>
            </tr>
        </tfoot>

        <tbody>
        <?php
		$no=1;
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		?>
		            <tr>
		                <td><?php echo $no++ ?></td>
		                <td><?php echo $row['nama_alternatif'] ?></td>
		                <td><?php echo $row['nama_kriteria'] ?></td>
		                <td><?php echo $row['nilai_rangking'] ?></td>
		                <td class="text-center">
							<a href="rangking-ubah.php?ia=<?php echo $row['id_alternatif'] ?>&ik=<?php echo $row['id_kriteria'] ?>" class="btn btn-warning"><i class="fas fa-edit" aria-hidden="true"></i></a>
                            </td>
                            <td class="text-center">
							<a href="rangking-hapus.php?ia=<?php echo $row['id_alternatif'] ?>&ik=<?php echo $row['id_kriteria'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><i class="fas fa-trash" aria-hidden="true"></i></a>
                            </td>
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