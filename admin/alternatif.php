<?php
include_once 'header.php';
include_once 'includes/alternatif.inc.php';
$pro = new Alternatif($db);
$stmt = $pro->readAll();
$count = $pro->countAll();


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
			<h4>Data Alternatif</h4>
		</div>
		<div class="col-md-6 text-right">
          
			<button type="button" onclick="location.href='alternatif-baru.php'" class="btn btn-primary">Tambah Data</button>
		</div>
	</div>
	<br/>

	<table  class="table table-striped table-bordered" id="tabeldata">
        <thead>
            <tr>

                <th>No</th>
                <th>kode alternatif</th>
                <th>Nama Alternatif</th>
                <!-- <th>Vektor S</th>
                <th>Vektor V</th> -->
                <th >Aksi</th>
            </tr>
        </thead>

        <!-- <tfoot>
            <tr>
                <th><input type="checkbox" name="select-all2" id="select-all2" /></th>
                <th>Nama Alternatif</th>
                <th>Vektor S</th>
                <th>Vektor V</th>
                <th>Aksi</th>
            </tr>
        </tfoot> -->

        <tbody>
<?php
$no=1;
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
?>
            <tr>
                
                <th style="vertical-align:middle;"><?= $no; ?></th>
                <td style="vertical-align:middle;"><?php echo $row['kode_alternatif']; ?></td>
                <td style="vertical-align:middle;"><?php echo $row['nama_alternatif'] ?></td>
                
                <td class="text-center" style="vertical-align:middle;">
					<a href="alternatif-ubah.php?id=<?php echo $row['id_alternatif'] ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
					<a href="alternatif-hapus.php?id=<?php echo $row['id_alternatif'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
			    </td>
            </tr>
            <?php $no++; ?>
<?php
}
?>
        </tbody>

    </table>
</form>	

