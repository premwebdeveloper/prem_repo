<?php echo $__env->make('includes.public_header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div id="app">
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">

				<!-- Collapsed Hamburger -->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<!-- Branding Image -->
				<a class="navbar-brand" href="<?php echo e(url('/')); ?>">
					<?php echo e(config('app.name', 'Laravel')); ?>

				</a>
			</div>

			<div class="navbar-collapse" id="app-navbar-collapse">
				<!-- Left Side Of Navbar -->
				<ul class="nav navbar-nav">
					&nbsp;
				</ul>

				<!-- Right Side Of Navbar -->
				<ul class="nav navbar-nav navbar-right">
					<!-- Authentication Links -->
					<?php if(Auth::guest()): ?>
						<li><a href="<?php echo e(route('login')); ?>">Login</a></li>
						<li><a href="<?php echo e(route('register')); ?>">Register</a></li>
					<?php else: ?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								<?php echo e(Auth::user()->name); ?> <span class="caret"></span>
							</a>

							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="<?php echo e(route('logout')); ?>"
										onclick="event.preventDefault();
												 document.getElementById('logout-form').submit();">
										Logout
									</a>

									<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
										<?php echo e(csrf_field()); ?>

									</form>
								</li>
							</ul>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</nav>

	<?php echo $__env->yieldContent('content'); ?>
</div>
<?php echo $__env->make('includes.public_footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>