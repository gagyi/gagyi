<?= static::view('_header') ?>

<div class="container">
	<div class="row">
		<div class="col-3">
			<div class="card">
				<?= static::view('_swemix2') ?>
				<div class="card-body">
					<h2>
						Register
					</h2>

					<?php if(isset($error)): ?>
						<div class="bg-red p-1 inline-block text-white rounded">
							Error: <?= $error ?>
						</div>
					<?php endif ?>

					<form class="" action="/register" method="post">
						<div class="form-group">
							<label for="username">User name:</label>
							<input class="form-element" autofocus type="text" name="username" value="">
						</div>

						<div class="form-group">
							<label for="password">Password:</label>
							<input class="form-element" type="password" name="password" value="">
						</div>

						<div class="form-group">
							<label for="password">Confirm Password:</label>
							<input class="form-element" type="password" name="confirm-password" value="">
						</div>

						<div class="form-group">
							<button class="btn btn-primary" type="submit">Register</button>
						</div>
					</form>
				</div>
				<?= static::view('_swemix') ?>
			</div>
		</div>
	</div>
</div>

<?= static::view('_footer') ?>
