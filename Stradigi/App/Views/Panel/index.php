<?php include(realpath(__DIR__ . DIRECTORY_SEPARATOR . '..').'\header.php');?>

<?php foreach($items as $item) :?>
	<div class="container container-item">		
		<div class="panel panel-default">
			<img class="panel-image" src="../public/img/img-kraken.png">
			<div class="panel-body">
				<h3><?php echo $item["title"];?></h3>
				<p><?php echo $item["text"];?></p>
			</div>
		</div>
	</div>
<?php endforeach; ?>
		
</body>
</html>
