<?php 
    // read from db to datatable
    $query=mysqli_query($koneksi,"SELECT * FROM beritafakta");
    $fetch=mysqli_fetch_array($query);

 ?>

<div class="panel panel-default">
    <div class="panel-heading">
        <span class="glyphicon glyphicon-th-list"></span><b> Data Berita</b>
    </div>
    <div class="panel-body">
            <h2>Daftar Berita Fakta</h2><br>
            <table class="table table-responsive table-striped table-bordered text-center data">
                <thead>
                    <tr>   
                        <th>No</th>
                        <th>ID Berita Fakta</th>
                        <th>Nama Penginput</th>
                        <th>Email Penginput</th>
                        <th>Judul Berita Fakta</th>
                        <th>Text Dari Berita Fakta</th>
                        <th>Link Dari Berita Fakta</th>
                        <th>Alasan</th>
                        <!-- <th>Link Gambar</th> -->
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php $no=1;  foreach($query as $data) :
                        ?>
                        <td><?=$no;?></td>
                        <td><?=$data['id']?></td>
                        <td><?=$data['namafkt']?></td>
                        <td><?=$data['emailfkt']?></td>
                        <td><?=mb_strimwidth($data['judulfkt'],0,50,"...")?></td>
                        <td><?=mb_strimwidth($data['cpytxtfkt'],0,50,"...")?></td>
                        <td><?=mb_strimwidth($data['cpylinkfkt'],0,30,"...")?></td>
                        <td><?=mb_strimwidth($data['alasanfkt'],0,50,"...")?></td>
                        <!-- <td><?=mb_strimwidth($data['imglinkfkt'],0,30,"...")?></td> -->
                        <td>
                            <a class="btn btn-warning" href="berita/deleteBeritaFakta.php?id=<?=$data['id'];?>" onclick="return confirm('Apakah anda yakin ingin menghapus berita ini dari berita fakta ?')"><i class="glyphicon glyphicon-trash"></i>
                            </a>

                            <a href="" class="btn btn-info" data-toggle="modal" data-target="#updatefkt<?=$data['id'];?>" style="margin: 5px;">
                                Update
                            </a>

                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#morefkt<?=$data['id'];?>" style="margin: 5px;">
                                Selengkapnya
                            </a>
                        </td>
                    </tr>
                    <!-- modal edit berita fakta start -->
                    <div id="updatefkt<?=$data['id'];?>" class="modal fade" tabindex="1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <b>Update Berita Fakta</b>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="berita/editBeritaFakta.php" method="POST">
                                        <?php 

                                        $id = $data['id']; 
                                        $sqlRead = "SELECT * FROM beritafakta WHERE id = '$id'";
                                        $query_edit = mysqli_query($koneksi,$sqlRead);

                                        while ($row = mysqli_fetch_array($query_edit)) {  
                                        ?>

                                        <input type="hidden" name="IDPenginput" required placeholder="ID Penginput" class="form-control" value="<?=$row['id'];?>"><br/>

                                        <label>Nama Penginput</label>
                                        <input type="text" name="namaPenginput" required placeholder="Nama Penginput" class="form-control" value="<?=$row['namafkt'];?>"><br/>

                                        <label>Email Penginput</label>
                                        <input type="text" name="emailPenginput" required placeholder="Email Penginput" class="form-control" value="<?=$row['emailfkt'];?>"><br/>
                                        
                                        <label>Judul Berita</label>
                                        <input type="text" name="judul" required placeholder="Judul Berita" class="form-control" value="<?=$row['judulfkt'];?>"><br/>
                                        
                                        <label>Text Dari Berita</label>
                                        <input type="text" name="textBerita" required placeholder="Text Dari Berita" class="form-control" value="<?=$row['cpytxtfkt'];?>"><br/>
                                        
                                        <label>Link Dari Berita</label>
                                        <input type="text" name="linkBerita" required placeholder="Link Berita" class="form-control" value="<?=$row['cpylinkfkt'];?>"><br/>
                                        
                                        <label>Alasan</label>
                                        <input type="text" name="alasan" required placeholder="Alasan" class="form-control" value="<?=$row['alasanfkt'];?>"><br/>

                                        <label>Link Gambar Berita</label>
                                        <input type="text" name="imglink" required placeholder="Link Gambar Berita" class="form-control" value="<?=$row['imglinkfkt'];?>"><br/>

                                        <a class="btn btn-warning form-control" style="margin-bottom: 5px;" href="berita/moveToHoaxEdit.php?id=<?=$data['id'];?>" onclick="return confirm('Apakah anda yakin ingin memindahkan berita ini ke berita hoax ?')">Pindahkan ke Hoax</a>

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
                        <!-- modal edit berita fakta end -->

                        <!-- modal lihat selengkapnya hoax start-->
                        <div id="morefkt<?=$data['id'];?>" class="modal fade" tabindex="1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <b>Berita Fakta</b>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <?php 

                                            $id = $data['id']; 
                                            $sqlRead = "SELECT * FROM beritafakta WHERE id = '$id'";
                                            $query_edit = mysqli_query($koneksi,$sqlRead);

                                            while ($row = mysqli_fetch_array($query_edit)) {  
                                            ?>

                                            <input type="hidden" name="IDPenginput" required placeholder="ID Penginput" class="form-control" value="<?=$row['id'];?>" readonly><br/>

                                            <label>Nama Penginput</label>
                                            <input type="text" name="namaPenginput" required placeholder="Nama Penginput" class="form-control" value="<?=$row['namafkt'];?>" readonly><br/>

                                            <label>Email Penginput</label>
                                            <input type="text" name="emailPenginput" required placeholder="Email Penginput" class="form-control" value="<?=$row['emailfkt'];?>" readonly><br/>
                                            
                                            <label>Judul Berita</label>
                                            <textarea name="judul" required placeholder="Judul Berita" class="form-control" value="" readonly><?=$row['judulfkt'];?></textarea><br/>
                                            
                                            <label>Text Dari Berita</label>
                                            <textarea name="textBerita" required placeholder="Text Dari Berita" class="form-control" value="" readonly><?=$row['cpytxtfkt'];?></textarea><br/>
                                            
                                            <label>Link Dari Berita</label>
                                            <textarea name="linkBerita" required placeholder="Link Berita" class="form-control" value="" readonly><?=$row['cpylinkfkt'];?></textarea><br/>
                                            
                                            <label>Alasan</label>
                                            <textarea name="alasan" required placeholder="Alasan" class="form-control" value="" readonly><?=$row['alasanfkt'];?></textarea><br/>

                                            <label>Link Gambar Berita</label>
                                            <textarea name="imglink" required placeholder="Link Gambar Berita" class="form-control" value="" readonly><?=$row['imglinkfkt'];?></textarea><br/>
                                            <?php 
                                                }
                                            ?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal lihat selengkapnya hoax end -->
                    <?php               
                      $no++; endforeach;
                    ?>
                </tbody>
            </table>
    </div>
</div>