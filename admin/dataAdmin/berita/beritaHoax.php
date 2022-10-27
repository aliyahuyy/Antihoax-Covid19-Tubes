<?php 
    $query=mysqli_query($koneksi,"SELECT * FROM beritahoax");
    $fetch=mysqli_fetch_array($query);
 ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <span class="glyphicon glyphicon-th-list"></span><b> Data Berita</b>
    </div>
    <div class="panel-body">
            <h2>Daftar Berita Hoax</h2><br>
            <table class="table table-responsive table-striped table-bordered text-center data">
                <thead>
                    <tr>   
                        <th>No</th>
                        <th>ID Berita Hoax</th>
                        <th>Nama Penginput</th>
                        <th>Email Penginput</th>
                        <th>Judul Berita Hoax</th>
                        <th>Text Dari Berita Hoax</th>
                        <th>Link Dari Berita Hoax</th>
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
                        <td><?=$data['namahx']?></td>
                        <td><?=$data['emailhx']?></td>
                        <td><?=mb_strimwidth($data['judulhx'],0,50,"...")?></td>
                        <td><?=mb_strimwidth($data['cpytxthx'],0,50,"...")?></td>
                        <td><?=mb_strimwidth($data['cpylinkhx'],0,30,"...")?></td>
                        <td><?=mb_strimwidth($data['alasanhx'],0,50,"...")?></td>
                        <!-- <td><?=mb_strimwidth($data['imglinkhx'],0,30,"...")?></td> -->
                        <td>
                            <a class="btn btn-warning" href="berita/deleteBeritaHoax.php?id=<?=$data['id'];?>" onclick="return confirm('Apakah anda yakin ingin menghapus berita ini dari berita hoax ?')"><span class="glyphicon glyphicon-trash"></span></a>

                            <a href="" class="btn btn-info" data-toggle="modal" data-target="#updatehx<?=$data['id'];?>" style="margin: 5px;">
                                Update
                            </a>

                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#morehx<?=$data['id'];?>" style="margin: 5px;">
                                Selengkapnya
                            </a>
                        </td>
                    </tr>
                    <!-- modal edit berita hoax start-->
                    <div id="updatehx<?=$data['id'];?>" class="modal fade" tabindex="1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <b>Update Berita Hoax</b>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="berita/editBeritaHoax.php" method="POST">
                                        <?php 

                                        $id = $data['id']; 
                                        $sqlRead = "SELECT * FROM beritahoax WHERE id = '$id'";
                                        $query_edit = mysqli_query($koneksi,$sqlRead);

                                        while ($row = mysqli_fetch_array($query_edit)) {  
                                        ?>

                                        <input type="hidden" name="IDPenginput" required placeholder="ID Penginput" class="form-control" value="<?=$row['id'];?>"><br/>

                                        <label>Nama Penginput</label>
                                        <input type="text" name="namaPenginput" required placeholder="Nama Penginput" class="form-control" value="<?=$row['namahx'];?>"><br/>

                                        <label>Email Penginput</label>
                                        <input type="text" name="emailPenginput" required placeholder="Email Penginput" class="form-control" value="<?=$row['emailhx'];?>"><br/>
                                        
                                        <label>Judul Berita</label>
                                        <input type="text" name="judul" required placeholder="Judul Berita" class="form-control" value="<?=$row['judulhx'];?>"><br/>
                                        
                                        <label>Text Dari Berita</label>
                                        <input type="text" name="textBerita" required placeholder="Text Dari Berita" class="form-control" value="<?=$row['cpytxthx'];?>"><br/>
                                        
                                        <label>Link Dari Berita</label>
                                        <input type="text" name="linkBerita" required placeholder="Link Berita" class="form-control" value="<?=$row['cpylinkhx'];?>"><br/>
                                        
                                        <label>Alasan</label>
                                        <input type="text" name="alasan" required placeholder="Alasan" class="form-control" value="<?=$row['alasanhx'];?>"><br/>

                                        <label>Link Gambar Berita</label>
                                        <input type="text" name="imglink" required placeholder="Link Gambar Berita" class="form-control" value="<?=$row['imglinkhx'];?>"><br/>

                                        <a class="btn btn-info form-control" style="margin-bottom: 5px;" href="berita/moveToFaktaEdit.php?id=<?=$data['id'];?>" onclick="return confirm('Apakah anda yakin ingin memindahkan berita ini ke berita fakta ?')">Pindahkan ke Fakta</a> 

                                        <button name="simpan" type="submit" class="btn btn-success form-control">Simpan</button>
                                        <br/>
                                        <?php 
                                            }
                                        ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- modal edit berita hoax end -->

                    <!-- modal lihat selengkapnya hoax start-->
                    <div id="morehx<?=$data['id'];?>" class="modal fade" tabindex="1" role="dialog">
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
                                        $sqlRead = "SELECT * FROM beritahoax WHERE id = '$id'";
                                        $query_edit = mysqli_query($koneksi,$sqlRead);

                                        while ($row = mysqli_fetch_array($query_edit)) {  
                                        ?>

                                        <input type="hidden" name="IDPenginput" required placeholder="ID Penginput" class="form-control" value="<?=$row['id'];?>" readonly><br/>

                                        <label>Nama Penginput</label>
                                        <input type="text" name="namaPenginput" required placeholder="Nama Penginput" class="form-control" value="<?=$row['namahx'];?>" readonly><br/>

                                        <label>Email Penginput</label>
                                        <input type="text" name="emailPenginput" required placeholder="Email Penginput" class="form-control" value="<?=$row['emailhx'];?>" readonly><br/>
                                        
                                        <label>Judul Berita</label>
                                        <textarea name="judul" required placeholder="Judul Berita" class="form-control" value="" readonly><?=$row['judulhx'];?></textarea><br/>
                                        
                                        <label>Text Dari Berita</label>
                                        <textarea name="textBerita" required placeholder="Text Dari Berita" class="form-control" value="" readonly><?=$row['cpytxthx'];?></textarea><br/>
                                        
                                        <label>Link Dari Berita</label>
                                        <textarea name="linkBerita" required placeholder="Link Berita" class="form-control" value="" readonly><?=$row['cpylinkhx'];?></textarea><br/>
                                        
                                        <label>Alasan</label>
                                        <textarea name="alasan" required placeholder="Alasan" class="form-control" value="" readonly><?=$row['alasanhx'];?></textarea><br/>

                                        <label>Link Gambar Berita</label>
                                        <textarea name="imglink" required placeholder="Link Gambar Berita" class="form-control" value="" readonly><?=$row['imglinkhx'];?></textarea><br/>
                                        <?php 
                                            }
                                        ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- modal lihat selengkapnya hoax end -->
                    <?php $no++; endforeach; ?>
                </tbody>
            </table>
    </div>
</div>