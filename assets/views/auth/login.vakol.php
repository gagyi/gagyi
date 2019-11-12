<?= static::view('_header') ?>

<div class="container">
	<div class="row">
		<div class="col-4">
			<div class="card">
				<div class="card-body">
					<h2>
						Log in
					</h2>
					<?php if(Saettem\Gomba\Request\Request::has('error')): ?>
						<div class="bg-red p-4 inline-block text-white rounded">
							Error: <?= Saettem\Gomba\Request\Request::get('error') ?>
						</div>
					<?php endif ?>

					<form class="" action="/login" method="post">
						<div class="form-group">
							<label for="username">User name:</label>
							<input class="form-element" autofocus type="text" name="username" value="">
						</div>
						<div class="form-group">
							<label for="password">Password:</label>
							<input class="form-element" type="password" name="password" value="">
						</div>

						<div class="form-group">
							<button class="btn btn-primary" type="submit">Submit</button>
						</div>
					</form>
				</div>

				<?= static::view('_swemix') ?>

			</div>
		</div>
	</div>
</div>

<?= static::view('_footer') ?>
