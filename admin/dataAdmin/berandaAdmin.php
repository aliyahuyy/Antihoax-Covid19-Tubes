<?php 
    $query=mysqli_query($koneksi,"SELECT * FROM laporhoax");
    $fetch=mysqli_fetch_array($query);
 ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <span class="glyphicon glyphicon-th-list"></span><b> Data Berita</b>
    </div>
    <div class="panel-body">
            <h2>Daftar Inputan Berita</h2><br>
            <table class="table table-responsive table-striped table-bordered text-center data">
                <thead>
                    <tr>   
                        <th>No</th>
                        <th>ID Berita</th>
                        <th>Nama Penginput</th>
                        <th>Email Penginput</th>
                        <th>Judul</th>
                        <th>Text Dari Berita</th>
                        <th>Link Dari Berita</th>
                        <th>Alasan</th>
                        <!-- <th>Link Gambar</th> -->
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php $no=1; foreach($query as $data) :?>
                        <td><?=$no;?></td>
                        <td><?=$data['id']?></td>
                        <td><?=$data['nama']?></td>
                        <td><?=$data['email']?></td>
                        <td><?=mb_strimwidth($data['judul'],0,50,"...")?></td>
                        <td><?=mb_strimwidth($data['cpytxt'],0,50,"...")?></td>
                        <td><?=mb_strimwidth($data['cpylink'],0,30,"...")?></td>
                        <td><?=mb_strimwidth($data['alasan'],0,50,"...")?></td>
                        <!-- <td><?=mb_strimwidth($data['imglink'],0,30,"...")?></td> -->
                        <td>
                            <a class="btn btn-info" href="berita/moveToFakta.php?id=<?=$data['id'];?>" onclick="return confirm('Apakah anda yakin ingin memindahkan berita ini ke berita fakta ?')">Fakta</a> 
                            
                            <a class="btn btn-warning" style="margin: 5px;" href="berita/moveToHoax.php?id=<?=$data['id'];?>" onclick="return confirm('Apakah anda yakin ingin memindahkan berita ini ke berita hoax ?')">Hoax</a>

                            <a class="btn btn-danger" href="hapusBeritaLapor.php?id=<?=$data['id'];?>" onclick="return confirm('Apakah anda yakin ingin menghapus berita ini dari daftar input berita ?')"><i class="glyphicon glyphicon-trash"></i></a>

                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#morelapor<?=$data['id'];?>" style="margin: 5px;">
                                Selengkapnya
                            </a>
                        </td>
                    </tr>

                    <!-- modal lihat selengkapnya lapor start-->
                    <div id="morelapor<?=$data['id'];?>" class="modal fade" tabindex="1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <b>Berita Hoax</b>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <?php 

                                        $id = $data['id']; 
                                        $sqlRead = "SELECT * FROM laporhoax WHERE id = '$id'";
                                        $query_edit = mysqli_query($koneksi,$sqlRead);

                                        while ($row = mysqli_fetch_array($query_edit)) {  
                                        ?>

                                        <input type="hidden" name="IDPenginput" required placeholder="ID Penginput" class="form-control" value="<?=$row['id'];?>" readonly><br/>

                                        <label>Nama Penginput</label>
                                        <input type="text" name="namaPenginput" required placeholder="Nama Penginput" class="form-control" value="<?=$row['nama'];?>" readonly><br/>

                                        <label>Email Penginput</label>
                                        <input type="text" name="emailPenginput" required placeholder="Email Penginput" class="form-control" value="<?=$row['email'];?>" readonly><br/>
                                        
                                        <label>Judul Berita</label>
                                        <textarea name="judul" required placeholder="Judul Berita" class="form-control" value="" readonly><?=$row['judul'];?></textarea><br/>
                                        
                                        <label>Text Dari Berita</label>
                                        <textarea name="textBerita" required placeholder="Text Dari Berita" class="form-control" value="" readonly><?=$row['cpytxt'];?></textarea><br/>
                                        
                                        <label>Link Dari Berita</label>
                                        <textarea name="linkBerita" required placeholder="Link Berita" class="form-control" value="" readonly><?=$row['cpylink'];?></textarea><br/>
                                        
                                        <label>Alasan</label>
                                        <textarea name="alasan" required placeholder="Alasan" class="form-control" value="" readonly><?=$row['alasan'];?></textarea><br/>

                                        <label>Link Gambar Berita</label>
                                        <textarea name="imglink" required placeholder="Link Gambar Berita" class="form-control" value="" readonly><?=$row['imglink'];?></textarea><br/>
                                        <?php 
                                            }
                                        ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- modal lihat selengkapnya lapor end -->
                    <?php $no++; endforeach; ?>
                </tbody>
            </table>
    </div>
</div>