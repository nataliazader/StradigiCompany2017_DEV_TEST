<?php include(realpath(__DIR__ . DIRECTORY_SEPARATOR . '..').'\header.php');?>
	<div class="row gallery">
		<?php foreach ($images as $image): ?>
			<div class="col-xs-6 col-sm-4 col-md-3"><img id="img<?php echo $image?>" class="img-rounded" src="../public/img/<?php echo $image?>.jpg" onclick="zoom(this.id,this.src,this.alt)" alt="Image <?php echo $image?>"></div>
		<?php endforeach; ?>
	</div>	
	<div id="zoomImage" class="zoom">
		<table>

			<tr>
				<td>
				<span id="caption"> </span>
				<img  class="closeImg" src="../public/img/close-btn.png">	
					<img  class="zoom-content" id="image">
				</td>
			</tr>
		</table>
	</div>
	<script>

	var zoomImage;
	
	function zoom(id,src,alt){
		zoomImage = document.getElementById('zoomImage');
		var imgId = id;
		var zoomImg = document.getElementById("image");
		var captionText = document.getElementById("caption");
		zoomImage.style.display = "block";
		zoomImg.src = src;
		captionText.innerHTML = alt ;		
	}

	var closeImg = document.getElementsByClassName("closeImg")[0];

	closeImg.onclick = function() { 
		zoomImage.style.display = "none";
	}
	 
	</script>
</body>
</html>
