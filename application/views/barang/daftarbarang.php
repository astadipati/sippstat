<h3><?php echo $title; ?></h3>
Jumlah Data <?php echo $list_barang->num_rows(); ?>
<ul>
	<?php 
		foreach ($list_barang->result() as $r) 
		{
			echo "<li>".$r->nama_barang."</li>"; //nama field dari table barang nama_barang
		}
	 ?>
</ul>