<!-- Berita Fakta -->
    
    <div class="container" style="margin-top: 50px;">
      <section class="fakta-beranda">
        <div class="col-md-12">

          <div class="panel panel-default">
        <div class="panel-body">
          <h2>Berita Fakta</h2>

<div class="row">  
<?php
      
      $tampil = mysqli_query($koneksi, "SELECT * from beritafakta limit 3");
      while ($data = mysqli_fetch_array($tampil)) :

?>   
             
              <div class="col-md-4">

 <form action="index.php?halaman=halamanberitahx" method="POST">
         
              <img src=<?=$data['imglinkfkt']?>>
              <a href="#"><h3><?=$data['judulfkt']?></h3></a>
              <p><?=mb_strimwidth($data['cpytxtfkt'],0,200,"...")?></p>
              
            </div>

    <?php endwhile; ?>
 
          </div>

            <div class="tombol">
              <a class="rounded btn btn-default " href="index.php?halaman=beritafakta" role="button" >Index Berita</a>
            </div>

          </div>
        </div>
        </div>
      </section>
    </div>