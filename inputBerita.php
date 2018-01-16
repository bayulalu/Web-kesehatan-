<?php 
require_once 'core/init.php';


if (Input::get("btn")) {
	if (!empty(trim(Input::get("judul"))) && !empty(trim(Input::get("isi"))) ) {
		$berita->input_berita(array(
				"judul"=>Input::get("judul"),
				"isi"=>Input::get("isi") ));
		echo "<script language='JavaScript'>alert('Input Data Berhasil');
	               document.location = 'Deshbord.php';
	          </script>";
	}else{
		echo "<script language='JavaScript'>alert('Data tidak boleh ada yg kosong');
	          </script>";
		// $error = "Data tidak ada boleh kosong";
	}
	
}


require_once 'headerAdmin.php'; 
?>

<div class="nav-kanan">
	    <div class="ad-konten" id="#home">
							
			<div class="kon-des">
				<div class="container">
				<!-- isi -->
				<h3>Input Berita</h3>
				<div class="row">
				<form class="col s12" method="post" action="inputBerita.php">
					<div class="row">
						<div class="input-field col s12">
						<!-- icon -->
						
							<label >Judul</label>
							<input type="text" name="judul" required>
						</div>
				
						<!-- <label>Isi</label> -->
						<div class="input-field  col s12">
							<!-- <i class="material-icons prefix">vpn_key</i> -->
							<textarea name="isi" rows="240" cols="80" id="tinytextarea"></textarea>
							
							<!-- <label for="isi">Isi Berita</label> -->
						</div>
						
					</div>
					
					<input type="submit" name="btn" class="btn ">
					
				
					</form>
					<br><br>
					
				</div>
				<!-- batas isi -->
					</div>
				</div>
			</div>
		</div>
		<div id="batas"></div>
		
		
	</div>

	<?php require_once 'footer.php'; ?>