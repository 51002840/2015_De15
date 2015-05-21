<?php include( $templates.'header.tpl.php' ); ?>

<h1>
	&raquo; Viewing
	<?php if( !empty($iv->user) ) { ?>
		User: <a href="<?php echo Config::$absolutePath.'user/'.$iv->user['name']; ?>"><?php echo $iv->user['name']; ?></a>
	<?php } else if( !empty($iv->channel) ) { ?>
		Channel: <a href="<?php echo Config::$absolutePath.'channel/'.$iv->channel['keyword']; ?>"><?php echo $iv->channel['name']; ?></a>
	<?php } else { ?>
		All
	<?php } ?>
</h1>

<div class="userInfo">
	<img class="avatar" width="40" height="40" src="<?php echo Config::$absolutePath.$iv->userInfo['avatar']; ?>"/>
	<div class="name">
		<strong>
			<a href="<?php echo Config::$absolutePath.'user/'.$iv->userInfo['name']; ?>"><?php echo $iv->userInfo['name']; ?></a>
		</strong>
	</div>
	<div class="info">
		Score: <strong><?php echo $iv->userInfo['score']; ?></strong> /
		Images: <strong><?php echo $iv->userInfo['images']; ?></strong> 
		<?php if( !empty($iv->userInfo['website'])) { ?>/
			Website: <strong><a href="<?php echo htmlspecialchars($iv->userInfo['website']); ?>" target="_blank">
				<?php echo htmlspecialchars($iv->userInfo['website']); ?>
			</a></strong>
		<?php } ?>
	</div>
	<div style="clear:both;"></div>
</div>

<div id="viewer">
	<?php if( isset($iv->stream['prev']) ) { ?>
		<a href="<?php echo Config::$absolutePath.$iv->basePath.'view/'.$iv->stream['prev']; ?>" class="prev" id="prevBar" title="Previous">Previous</a>
	<?php } else { ?>
		<div class="noPrev" id="prevBar">Previous</div>
	<?php } ?>
	
	<?php if( isset($iv->stream['next']) ) { ?>
		<a href="<?php echo Config::$absolutePath.$iv->basePath.'view/'.$iv->stream['next']; ?>" class="next" id="nextBar" title="Next">Next</a>
	<?php } else { ?>
		<div class="noNext" id="nextBar">Next</div>
	<?php } ?>
	
	<div id="imageContainer">
		<img id="image" onclick="swap(this, 'scaled', 'full')" class="scaled" src="<?php echo Config::$absolutePath.Config::$images['imagePath'].$iv->image['path']; ?>" alt="<?php echo htmlspecialchars($iv->image['tags']) ?>"/>
	</div>
	
	<div id="imageInfo">
		<div class="rating">
			
			<div style="clear: both;"></div>
			<?php if($user->admin) { ?>
				<div style="float:left;" id="del">
					<div class="load" id="loadDelete"></div>
					<a href="#" onclick="del(<?php echo $iv->image['id']; ?>)">[Delete this photo]</a>
				</div>
			<?php } ?>
		</div>
	
		<div class="date">
			<?php echo date('d. M Y H:i',$iv->image['loggedTS']); ?>
		</div>
		
		
		
		
		
		

		
		
	</div>
</div>

<script type="text/javascript">
	ieAdjustHeight(0);
</script>


<?php include( $templates.'footer.tpl.php' ); ?>