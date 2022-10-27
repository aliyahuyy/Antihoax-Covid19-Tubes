<?php 
include 'koneksi/koneksi.php';
?>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="asset/img/slideratas1.png" alt="..." style="height: 700px">
    </div>
    <div class="item">
      <img src="asset/img/slideratas2.png" alt="..." style="height: 700px">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<!-- Berita Fakta -->
    
    <div class="container" style="margin-top: 50px;">
      <section class="beranda-fakta">
        <div class="col-md-12">

          <div class="panel panel-default">
        <div class="panel-body">
          <h2>Berita Fakta</h2>

         <div class="row"> 
<?php
      
      $tampil = mysqli_query($koneksi, "SELECT * from beritafakta ORDER BY RAND() LIMIT 3");
      while ($data = mysqli_fetch_array($tampil)) :

?>  
                    <div class="col-md-4">
                     <img src=<?=$data['imglinkfkt']?>>
                    <div>
                       
                        <form action="index.php?halaman=halamanberitafkt" method="POST">
                            <h3><?=mb_strimwidth($data['judulfkt'],0,50,"...")?></h3>

                            <p><?=mb_strimwidth($data['cpytxtfkt'],0,200,"...")?></p>

                            <input type ="hidden" name="beritafkt" value='<?=$data['id']?>'>
                            
                            <div class ="selanjutnya">
                           <a> <input type="submit" class="rounded btn btn-default"  value="Selengkapnya"></a>
                                </div>
                        </form>
</div>
                    </div>
                    
    <?php endwhile; ?>
 
          </div>

            <div class="index-berita">
              <a class="rounded btn btn-default " href="index.php?halaman=beritafakta" role="button" >Index Berita</a>
            </div>

          </div>
        </div>
        </div>
      </section>
    </div>



<!-- Berita Hoax -->
    
    <div class="container" style="margin-top: 5px;">
      <section class="beranda-hoax">
        <div class="col-md-12">

          <div class="panel panel-default">
        <div class="panel-body">
          <h2>Berita Hoax</h2>

         <div class="row"> 
<?php
      
      $tampil = mysqli_query($koneksi, "SELECT * from beritahoax ORDER BY RAND() LIMIT 3");
      while ($data = mysqli_fetch_array($tampil)) :

?>  
                    <div class="col-md-4">
                     <img src=<?=$data['imglinkhx']?>>
                    <div>
                       
                        <form action="index.php?halaman=halamanberitahx" method="POST">
                            <h3><?=mb_strimwidth($data['judulhx'],0,50,"...")?></h3>

                            <p><?=mb_strimwidth($data['cpytxthx'],0,200,"...")?></p>

                            <input type ="hidden" name="beritahx" value='<?=$data['id']?>'>
                            
                            <div class ="selanjutnya">
                           <a> <input type="submit" class="rounded btn btn-default"  value="Selengkapnya"></a>
                                </div>
                        </form>
</div>
                    </div>
                    
    <?php endwhile; ?>
 
          </div>

            <div class="index-berita">
              <a class="rounded btn btn-default " href="index.php?halaman=beritahoax" role="button" >Index Berita</a>
            </div>

          </div>
        </div>
        </div>
      </section>
    </div>


