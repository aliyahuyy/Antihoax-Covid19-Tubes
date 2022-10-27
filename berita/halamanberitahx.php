<?php 
include 'koneksi/koneksi.php';

?>

    <?php
     
      $tampil = mysqli_query($koneksi, "SELECT * from beritahoax where id = $_POST[beritahx] ");
      while ($data = mysqli_fetch_array($tampil)) :
        
    ?>
    <div class="container" style="text-align: center;">
      <section class="halaman-berita">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body">

          <div class="card mt-3">
           
              <div class="row">
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src=<?=$data['imglinkhx']?>>
                    </div>
                    <div class="down-content">
                      <h2><?=$data['judulhx']?></h2>
                     
                      <p><?=$data['cpytxthx']?></p>

                       <a> <input onclick ="history.back()"type="submit" class="rounded btn btn-default"  value="Kembali"></a>
                      
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
              </div>
            </div>
</section>
          </div>

          
                <?php
                
                ?>
              
    <?php endwhile; ?>

</body>