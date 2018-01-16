<?php 
require_once 'core/init.php';

$berit = $berita->tmp();
require_once 'headerAdmin.php'; ?>
<div class="nav-kanan">
	
					
<div class="container">
	<h3 class="center">Berita</h3>
	<div class="row">
	<?php while ( $row = mysqli_fetch_assoc($berit)) : ?>
		
	<div class="row materis-Card">
		<div class="col s12 m4">
			<div class="card ">
				<div class="card-img waves-effect waves-light">
					<img src="gambar/info.jpg" class="activator responsive-img">
				</div>
				<div class="card-content">
					<span class="card-title"><?php echo $row['judul'] ?><i class="activator material-icons right">more_vert</i></span>
				</div>
		 		<div class="card-reveal">
					<div class="card-title">
						<?php echo $row['isi']; ?><i class="material-icons right">close</i>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
					<a href="#!" class="btn waves-effect waves-light">Lihat</a>
				</div>
			</div>
		</div>

<?php endwhile; ?>
	</div>
<div>
</div>
</div>
</section>
<div class="center">
	<div class="lainya">
		<button class="btn waves-effect">Lainya</button>
	</div>
</div>

</div>
</div>

	<?php require_once 'footer.php'; ?>