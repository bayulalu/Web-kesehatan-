<?php require_once 'headerAdmin.php'; ?>

<div class="nav-kanan">
	    <div class="ad-konten" id="#home">
							
			<div class="kon-des">
				<div class="container">
				<!-- isi -->
				<h3>Input Berita</h3>
				<div class="row">
				<form class="col s12">
					<div class="row">
						<div class="input-field col s12">
						<!-- icon -->
						
							<label >Judul</label>
							<input type="text" name="nama">
						</div>
				
						<!-- <label>Isi</label> -->
						<div class="input-field  col s12">
							<!-- <i class="material-icons prefix">vpn_key</i> -->
							<textarea name="isi" value="" rows="240" cols="80" id="tinytextarea"></textarea>
							
							<!-- <label for="isi">Isi Berita</label> -->
						</div>
						
					</div>
					
					<input type="submit" name="btn" class="btn tombol-admin waves-effect waves-light ">
					
				
					</form>
				</div>
				<!-- batas isi -->
					</div>
				</div>
			</div>
		</div>
		<div id="batas"></div>
		
		
	</div>

	<?php require_once 'footer.php'; ?>