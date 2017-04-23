<?php require_once('header.php'); ?>

<div class="container-fluid headline" style="background: #006496; color: #fff;">
	<div class="row">
		<div class="headline-title">
			<h1>Name & Title</h1>
			<p>Resize this responsive page to see the effect!</p> 
		</div>
	</div>
</div>

<div class="container">
	<div class="col-sm-3">
		<h3>Filters</h3>
		<p>Below you can use selections to filter the gallery items.</p>
		<ul>
		  <li><a href="">Only show Videos</a></li>
		  <li><a href="">Only show Pictures</a></li>
		  <li><a href="" >Show all</a></li>
		</ul>
	</div>
	<div class="col-sm-9">
		<div class="lift">
			<?php foreach( $image_folder = glob('img/*.{jpg,png,gif}', GLOB_BRACE) as $image ): ?>
				<div class="col-sm-6">
					<div class="card">
						<img src="<?php echo $image; ?>" class="img-fluid" width="100%" alt="">
						<div class="card-body">
							<p><small>Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Nostrud in laboris.</small></p>
							<br />
							<span class="label label-default">Default</span>
							<span class="label label-primary">Primary</span>
							<span class="label label-success">Success</span>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
	
</div>

<?php require_once('footer.php'); ?>

