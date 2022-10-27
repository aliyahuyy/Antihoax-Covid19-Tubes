<?php 
include 'koneksi/koneksi.php';
?>

<berita>
      <div class="container" style="margin-top: 50px;">       

            <section class = "berita-container">
                <h2>Berita Hoax</h2>




    <?php
      
      $tampil = mysqli_query($koneksi, "SELECT * from beritahoax");
      while ($data = mysqli_fetch_array($tampil)) :

?>     
        
                      

            <article>
                    <img src=<?=$data['imglinkhx']?>>
                    <div>
                       
                        <form action="index.php?halaman=halamanberitahx" method="POST">
                            <h2><?=$data['judulhx']?></h2>

                            <p><?=mb_strimwidth($data['cpytxthx'],0,500,"...")?></p>

                            <input type ="hidden" name="beritahx" value='<?=$data['id']?>'>
                            <a>
                            <input type="submit" class="rounded btn btn-default"  value="Selengkapnya">
                                </a>
                            
                        </form>
                    </div>
                    
                </article>    

    <?php endwhile; ?>
     </section>
          </div>


