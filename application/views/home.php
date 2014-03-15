<!DOCTYPE html>
<html>
<head>
	<title>Seminar Nasional Informatika STT-PLN 2014</title>
	<?php $this->load->view('templates/head')?>
</head>
<body>
	<?php $this->load->view('templates/header')?>
	<div id='content-wrapper'>
		<?php 
			$this->load->view($content);
		?>
	</div>
	<?php $this->load->view('templates/footer')?>
</body>
</html>