<?php  
include "header.php";
include_once 'includes/user.inc.php';
$pro = new User($db);
$stmt = $pro->readAll();
$count = $pro->countAll();


?>
<style>
    .main-content {
        margin-top: 100px;
        padding: 20px;
        margin-bottom: 15px;
        box-shadow: 0px 0px 10px -5px rgba(0,0,0,0.7);
    }
</style>
<!-- Main content -->
    <div class="main-content" >
<form method="post">
    <div class="row">
        <div class="col-md-6 text-left">
            <h4>Data Pengguna</h4>
        </div>
        <div class="col-md-6 text-right">
           
            <button type="button" onclick="location.href='user-baru.php'" class="btn btn-primary">Tambah Data</button>
        </div>
    </div>
    <br/>
    <table width="100%" class="table table-striped table-bordered" id="tabeldata">
        <thead>
            <tr>
               <th>No</th>
                <th>Nama Lengkap</th>
                <th>Username</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody>
    <?php
    $nn = 1;
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    ?>
            <tr>
            <th><?= $nn++;  ?></th>
    	    <td style="vertical-align:middle;"><?php echo $row['nama'] ?></td>
    	    <td style="vertical-align:middle;"><?php echo $row['username'] ?></td>
            <td class="text-center" style="vertical-align:middle;">
    		  <a href="user-ubah.php?id=<?php echo $row['id'] ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
    		  <a href="user-hapus.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
    	    </td>
            </tr>
    <?php
    }
    ?>
        </tbody>
    </table>
    </form> 
    </section>
    </div>
    </div>
<?php include "footer.php"; ?>
