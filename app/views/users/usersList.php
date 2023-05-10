<div class="row">
    <div class="col-md-12">
        <div class="card">
                <div class="card-header">
                    <button class="btn btn-primary">Tambah Pengguna</button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Username</th>
                            <th>Nama</th>
                            <th>Nomor Hp</th>
                            <th style="width: 113px; text-align: center;">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
                            foreach($data["users"] as $result):
                            $no++
                        ?>
                            
                        <tr>
                            <td><?=$no?></td>
                            <td><?=$result["username"];?></td>
                            <td><?=$result["nama"];?></td>
                            <td><?=$result["nohp"];?></td>
                            <td>
                                <a href="<?=BASEURL?>/Users/reset/<?=$result["id_pengguna"];?>" class="badge btn btn-primary ">Reset</a>
                                <a href="<?=BASEURL?>/Users/hapus/<?=$result["id_pengguna"];?>" class="badge btn btn-danger " onclick="return confirm('Yakin ?')">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                </div>
        </div>
    </div>
</div>