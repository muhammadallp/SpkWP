<?php
include_once 'header.php';
include_once 'includes/kriteria.inc.php';
$pro = new Kriteria($db);
$stmt = $pro->readAll();
$count = $pro->countAll();

if(isset($_POST['hapus-contengan'])){
    $imp = "('".implode("','",array_values($_POST['checkbox']))."')";
    $result = $pro->hapusell($imp);
    if($result){
            ?>
            <script type="text/javascript">
            window.onload=function(){
                showSuccessToast();
                setTimeout(function(){
                    window.location.reload(1);
                    history.go(0)
                    location.href = location.href
                }, 5000);
            };
            </script>
            <?php
    } else{
            ?>
            <script type="text/javascript">
            window.onload=function(){
                showErrorToast();
                setTimeout(function(){
                    window.location.reload(1);
                    history.go(0)
                    location.href = location.href
                }, 5000);
            };
            </script>
            <?php
    }
}
?>
<style>
    .main-content {
        margin-top: 100px;
        padding: 20px;
        margin-bottom: 25px;
        box-shadow: 0px 0px 10px -5px rgba(0,0,0,0.7);
    }
</style>
<!-- Main content -->
    <div class="main-content">
<form method="post">
	<div class="row" style="margin-top: 15px;">
		<div class="col-md-6 text-left">
			<h4>Data Kriteria</h4>
		</div>
		<div class="col-md-6 text-right">
            <!-- <button type="submit" name="hapus-contengan" class="btn btn-danger">Hapus Contengan</button> -->
			<button type="button" onclick="location.href='kriteria-baru.php'" class="btn btn-primary">Tambah Data</button>
		</div>
	</div>
	<br/>

	<table  class="table table-striped table-bordered" id="tabeldata">
        <thead>
            <tr>
                <!-- <th width="10px"><input type="checkbox" name="select-all" id="select-all" /></th> -->
                <th>No</th>
                <th>Nama Kriteria</th>
                <th>Jenis Kriteria</th>
                <th >Aksi</th>
            </tr>
        </thead>

        <!-- <tfoot>
            <tr>
                <th><input type="checkbox" name="select-all2" id="select-all2" /></th>
                <th>Nama Kriteria</th>
                <th>Tipe Kriteria</th>
                <th>Aksi</th>
            </tr>
        </tfoot> -->

        <tbody>
<?php
$no=1;
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
?>
            <tr>
                <!-- <td style="vertical-align:middle;"><input type="checkbox" value="<?php echo $row['id_kriteria'] ?>" name="checkbox[]" /></td> -->
                <td><?= $no; ?></td>
                
                <td style="vertical-align:middle;"><?php echo $row['nama_kriteria'] ?></td>
                <td style="vertical-align:middle;"><?php echo $row['tipe_kriteria'] ?></td>
                <td style="text-align:center;vertical-align:middle;">
					<a href="kriteria-ubah.php?id=<?php echo $row['id_kriteria'] ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
					<a href="kriteria-hapus.php?id=<?php echo $row['id_kriteria'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
			    </td>
            </tr>
            <?php $no++; ?>
<?php
}
?>
        </tbody>

    </table>
</form>	
</section>
</div>
</div>	
