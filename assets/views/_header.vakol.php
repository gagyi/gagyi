<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1" name="viewport">

		<link rel="stylesheet" href="/css/variables.css">
		<link rel="stylesheet" href="/css/prism.css">
		<link rel="stylesheet" href="/css/master.css">
		<link rel="stylesheet" href="/css/desktop.css">
		<link rel='shortcut icon' href="/gold2-icon.png">

		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

		<script src='/sorttable.js'></script>
		<!-- <script src='/prism.js'></script> -->
		<script src="https://unpkg.com/feather-icons"></script>
		<script src='https://cdn.plot.ly/plotly-latest.min.js'></script>

		<title>
			<?php if(Saettem\Gomba\Auth\Auth::loggedIn()): ?>
				<?php if (Saettem\Gomba\Auth\Auth::user()->unreadNotificationsCount()): ?>
					(<?= Saettem\Gomba\Auth\Auth::user()->unreadNotificationsCount() ?>)
				<?php endif ?>		
			<?php endif ?>
			<?=Saettem\Gomba\Support\Support::$config['application_emoji']?> 
			<?=Saettem\Gomba\Support\Support::$config['application_name']?>
			<?php if(isset($title)):?>
				 - <?=$title?>
			<?php endif ?>
			</title>
	</head>
	<body>
		<div class="sticky nav-bar card-<?php if (Saettem\Gomba\Auth\Auth::loggedIn() && Saettem\Gomba\Auth\Auth::user()): ?><?php if (Saettem\Gomba\Auth\Auth::user()->team()): ?><?= Saettem\Gomba\Auth\Auth::user()->team()->team_shortname ?><?php endif; ?><?php endif; ?>"><div>
			<!-- Left part -->
			<div class="header-left">
				<span class="font-24">
					<?=Saettem\Gomba\Support\Support::$config['application_emoji']?>
				</span>

				<?= static::view('_logo') ?>
				<?php if (Saettem\Gomba\Auth\Auth::loggedIn()): ?>
					<?= static::view('_team') ?>
					<?= static::view('_metric') ?>
					<?= static::view('_date') ?>
				<?php endif ?>
			</div>

			<?php if (Saettem\Gomba\Auth\Auth::loggedIn()): ?>
				<div class="header-middle">
					<a class="middle top-icon <?php if (Saettem\Gomba\Routes\Router::$uri == '/'): ?>selected<?php endif; ?>" href="/"><img title="Dashboard" src="/zondicons/home 1.svg" width=24 height=24></a>
					<a class="middle top-icon <?php if (Saettem\Gomba\Routes\Router::$uri == '/analysis'): ?>selected<?php endif; ?>" href="/analysis"><img title="Analysis" src="/zondicons/stethoscope 1.svg" width=24 height=24></a>
					<a class="middle top-icon <?php if (Saettem\Gomba\Routes\Router::$uri == '/coaching'): ?>selected<?php endif; ?>" href="/coaching"><img title="Coaching" src="/zondicons/heart 1.svg" width=24 height=24></a>
					<a class="middle top-icon <?php if (Saettem\Gomba\Routes\Router::$uri == '/rota'): ?>selected<?php endif; ?>" href="/rota"><img title="Rota" src="/zondicons/calendar 1.svg" width=24 height=24></a>
					<a class="middle top-icon <?php if (Saettem\Gomba\Routes\Router::$uri == '/trends'): ?>selected<?php endif; ?>" href="/trends"><img title="Trends" src="/zondicons/chart 1.svg" width=24 height=24></a>
					<a class="middle top-icon <?php if (Saettem\Gomba\Routes\Router::$uri == '/custom-views'): ?>selected<?php endif; ?>" href="/custom-views"><img title="Custom" src="/zondicons/view-list 1.svg" width=24 height=24></a>
					<a class="middle top-icon <?php if (Saettem\Gomba\Routes\Router::$uri == '/forum'): ?>selected<?php endif; ?>" href="/forum"><img title="Forums" src="/zondicons/conversation 1.svg" width=24 height=24></a>
					<a class="middle top-icon <?php if (Saettem\Gomba\Routes\Router::$uri == '/shouts'): ?>selected<?php endif; ?>" href="/shouts"><img title="Shouts" src="/zondicons/announcement 1.svg" width=24 height=24></a>
					<a class="middle top-icon <?php if (Saettem\Gomba\Routes\Router::$uri == '/users'): ?>selected<?php endif; ?>" href="/users"><img title="Users" src="/zondicons/user-group 1.svg" width=24 height=24></a>
					<a class="middle top-icon <?php if (Saettem\Gomba\Routes\Router::$uri == '/notifications'): ?>selected<?php endif; ?>" href="/notifications"><img title="Notifications" src="/zondicons/notification 1.svg" width=24 height=24>
						<?php if (Saettem\Gomba\Auth\Auth::user()->unreadNotificationsCount()): ?>
							<span class="notifications-counter badge font-10 bg-red-500 text-white rounded font-600" style="padding: 1px 2px 1px 2px;position: relative; left: -7px; top: -12px">
								<?= Saettem\Gomba\Auth\Auth::user()->unreadNotificationsCount() ?>
							</span>
						<?php endif; ?>
					</a>
				</div>
				<div class="header-right profilebadge">
					<?= Saettem\Gomba\Auth\Auth::user()->badge(24,'/profile') ?>
				</div>
			<?php else: ?>
				<div class="col middle" style="line-height: 3.7">
					<a href="/login">Login</a>
					<a href="/register">Register</a>
				</div>
			<?php endif ?>
			</div>
		</div>

		<main>
			<?php if(isset($error)): ?><div class="bg-red p-1 inline-block text-white rounded">Error: <?= $error ?></div><?php endif ?>
