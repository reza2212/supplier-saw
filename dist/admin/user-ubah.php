<?php
include_once '../include/head.php';
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');

include_once '../controller/user.inc.php';
$eks = new User($db);

$eks->id = $id;

$eks->readOne();

if($_POST){

    $eks->nl = $_POST['nl'];
    $eks->un = $_POST['un'];
    $eks->pw = md5($_POST['pw']);
    
    if($eks->update()){
        echo "<script>location.href='user.php'</script>";
    } else{
?>
<div class="container mt-5">
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Berhasil Ubah Data!</strong> Ubah lagi atau <a href="user.php">lihat semua data</a>.
</div>
<?php
    }
}
?>
<div class="container mt-5">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
		  <div class="well">
            <div class="page-header">
              <h3>Ubah Pengguna</h3>
            </div>
            
                <form method="post">
                  <div class="form-group">
                    <label for="nl">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nl" name="nl" value="<?php echo $eks->nl; ?>">
                  </div>
                  <div class="form-group">
                    <label for="un">Username</label>
                    <input type="text" class="form-control" id="un" name="un" value="<?php echo $eks->un; ?>">
                  </div>
                  <div class="form-group">
                    <label for="pw">Password</label>
                    <input type="text" class="form-control" id="pw" name="pw" value="<?php echo $eks->pw; ?>">
                  </div>
                  <button type="submit" class="btn btn-primary">Ubah</button>
                  <button type="button" onclick="location.href='user.php'" class="btn btn-success">Kembali</button>
                </form>
              
          </div></div>
          <div class="col-xs-12 col-sm-3 col-md-3">
            
        </div>
        <?php
include_once '../include/footer.php';
?>
 </div>