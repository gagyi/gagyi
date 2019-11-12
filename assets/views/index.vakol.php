<?php echo static::view('_header', compact('title')) ?>
<div class="container-fluid">
	<div class="row">
		<div class="col p-0 pl-1">
			<table class="table">
				<?= static::view('_dashboardbody', compact('teams', 'metrics')) ?>
			</table>
		</div>
	</div>
</div>
<?= static::view('_footer') ?>
