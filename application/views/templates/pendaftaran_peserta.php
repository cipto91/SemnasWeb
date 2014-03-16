<div id='news-container'>
	<div class='header-content'>
		<h1>Pendaftaran Peserta</h1>
	</div>
	<div class='news-content'>
		<div class='form-content'>
			<?php echo form_open("home/save_peserta","method='post'");?>
				<div class="input-group">
					<span class="input-group-addon">Nama</span>
					<?php echo form_input($form['ftxt_nama'])?>
				</div>
				<div class="input-group">
					<span class="input-group-addon">Asal Universitas/Sekolah</span>
					<?php echo form_input($form['ftxt_univ'])?>
				</div>
				<div class="input-group">
					<span class="input-group-addon">Jurusan</span>
					<?php echo form_input($form['ftxt_jur'])?>
				</div>
				<div class="input-group">
					<span class="input-group-addon">Telephone</span>
					<?php echo form_input($form['ftxt_telp'])?>
				</div>
				<div class="input-group">
					<span class="input-group-addon">Email</span>
					<?php echo form_input($form['ftxt_email'])?>
				</div>
				<?php echo form_submit(array("name"=>"btn_submit","value"=>"Daftar","class"=>"btn btn-primary"))?>
			<?php echo form_close();?>
		</div>
	</div>
</div>