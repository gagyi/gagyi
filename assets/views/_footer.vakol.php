		</main>
		<?php if (Saettem\Gomba\Auth\Auth::loggedIn()): ?>
			<?php if (Saettem\Gomba\Auth\Auth::user()->user_id == -1): ?>
				<div class="m-4">
					<h1 class="center font-900 text-pink-500"><?= Saettem\Gomba\Routes\Router::$uri ?></h1>
					<?= Saettem\Gomba\Tarolas\Tarolas::showQueries() ?>
				</div>
			<?php endif; ?>
		<?php endif ?>

		<footer class="text-gray-600 border-top pt-5 pb-0 mb-0">
			<div class="inline-block middle">
				<span class="font-18 middle"><?=Saettem\Gomba\Support\Support::$config['application_emoji']?></span>
				<span class="font-28 font-100 middle"><?=Saettem\Gomba\Support\Support::$config['application_name']?></span>
				<a class="middle" tabindex=-1 href="https://www.saettem.com" title="Saettem"><img src="https://www.saettem.com/Saettem1.png" alt="" height=50></a>
				<a class="middle" tabindex=-1 href="https://gold.saettem.com/forum/3/42"><?=Saettem\Gomba\Support\Support::$config['application_major_version']?>/<?=\Saettem\Gomba\Support\Support::$config['application_minor_version']?></a>
				<span class="middle italic text-gray-500 capitalize"><?=Saettem\Gomba\Support\Support::$config['application_maturity']?></span>
				<span class="middle">&copy; Concentrix 2016-2019.</span>
				<span class="middle">Based on <a href="https://gomba.ttq.fr">🍄 Gomba</a> &copy; <a tabindex=-1 href="https://ttq.fr">TTQ</a></span>
			</div>
		</footer>

		<script>
			function team(e) {
				var team = e.id.substr(5);
				location.href = '/set-team/?team=' + team;
			}
			function metric(e) {
				var metric = e.id.substr(7);
				location.href = '/set-metric/?metric=' + metric;
			}
			function month(e) {
				var month = e.id;
				location.href = '/set-month/?month=' + month;
			}
		</script>

	</body>
</html>
