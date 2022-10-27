<?php 
include 'koneksi/koneksi.php';
?>

<berita>
      <div class="container" style="margin-top: 50px;">       

            <section class = "berita-container">

                <h2>Berita Fakta</h2>




    <?php
      
      $tampil = mysqli_query($koneksi, "SELECT * from beritafakta");
      while ($data = mysqli_fetch_array($tampil)) :

?>     
                      

            <article>
                    <img src=<?=$data['imglinkfkt']?>>
                    <div>
                       
                        <form action="index.php?halaman=halamanberitafkt" method="POST">
                            <h2><?=$data['judulfkt']?></h2>

                            <p><?=mb_strimwidth($data['cpytxtfkt'],0,500,"...")?></p>

                            <input type ="hidden" name="beritafkt" value='<?=$data['id']?>'>
                            
                            <a>
                            <input type="submit" class="rounded btn btn-default"  value="Selengkapnya">
                                </a>
                        </form>

                    </div>
                    
                </article>    

    <?php endwhile; ?>
     </section>
          </div>


