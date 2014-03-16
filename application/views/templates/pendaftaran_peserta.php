<div id='news-container'>
	<div class='header-content'>
		<h1>Pendaftaran Peserta</h1>
	</div>
	<div class='news-content'>
		<div class='form-content'>
			<?php echo form_open();?>
				<table>
					<tr>
						<div class="input-group">
							<span class="input-group-addon">Nama</span>
							<?php echo form_input($form['ftxt_nama'])?>
						</div>
					</tr>
					<tr>
						<div class="input-group">
							<span class="input-group-addon">Asal Universitas/Sekolah</span>
							<?php echo form_input($form['ftxt_univ'])?>
						</div>
					</tr>
					<tr>
						<div class="input-group">
							<span class="input-group-addon">Jurusan</span>
							<?php echo form_input($form['ftxt_jur'])?>
						</div>
					</tr>
					<tr>
						<div class="input-group">
							<span class="input-group-addon">Telephone</span>
							<?php echo form_input($form['ftxt_telp'])?>
						</div>
					</tr>
					<tr>
						<div class="input-group">
							<span class="input-group-addon">Email</span>
							<?php echo form_input($form['ftxt_email'])?>
						</div>
					</tr>
				</table>
				<?php echo form_submit(array("name"=>"btn_submit","value"=>"Daftar","class"=>"btn btn-primary"))?>
			<?php echo form_close();?>
		</div>
	</div>
</div>