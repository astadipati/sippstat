<h3><?php echo $title; ?></h3>

<ul>
	<?php 
		foreach ($list_barang as $r) {
			echo "<li>".$r->nama_barang."</li>";
		}
	 ?>
</ul>