<div class="slideshow-container"></div>
<div class="news-container">
	<?php 
		if (is_array($news)) {
			foreach ($news as $key) {
				# code...
			}
		} else {
			echo $news;
		}
	?>
</div>