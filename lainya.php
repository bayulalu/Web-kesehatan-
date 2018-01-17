<?php  
require_once 'core/init.php';
$berita = tampilkan();

 
require_once 'header.php'; ?>

<div class="container"><br>
	<h3 class="center">Berita</h3>
	<div class="row"><br>
			<?php while($row = mysqli_fetch_assoc($berita)): ?>
	<div class="row materis-Card animated bounceIn">
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
						<?php echo $row['judul']; ?><i class="material-icons right">close</i>
					</div>
					<p><?php echo exceprt($row['isi']); ?></p>
					<a href="singgle.php?id=<?= $row['id'] ?>" class="btn waves-effect waves-light">Lihat</a>
				</div>
			</div>
		</div>

<?php endwhile; ?>
	</div>
</div>


<?php require_once 'footer.php'; ?>