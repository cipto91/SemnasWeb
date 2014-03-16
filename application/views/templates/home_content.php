<div class="slideshow-container"></div>
<div class="news-container">
	<?php 
		if (is_array($news)) {
			foreach ($news as $key) {
	?>
	<div class='header-content'>
		<h3><?php echo $key->judul_berita;?></h3>
		<p><?php echo $key->tanggal;?></p>
	</div>
	<div class='news-content'>
		<?php echo $key->isi_berita;?>
	</div>
	<div class='news-sparator'></div>
	<?php 			
			}
		} else {
			echo $news;
		}
	?>
</div>