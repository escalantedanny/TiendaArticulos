<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'default') | Panel de Administracion</title>
	<link rel="stylesheet" href="{{ asset('plugins/boostrap/css/bootstrap.min.css') }}" >
</head>
<body>
	@include('admin.templates.partials.nav')
		
	<div class="container">
		<div class="row mt-5">
			<div class="col">
				<section class="section-admin">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">@yield('title')</h3>
						</div>
					</div>
					<div class="panel-body">
						@include('flash::message')
						@yield('content')
					</div>
				</section>
			</div>
		</div>
	</div>	
	<footer>
		@include('admin.templates.partials.footer')
	</footer>
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="{{ asset('plugins/boostrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('plugins/boostrap/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('plugins/boostrap/js/popper-1.12.6.min.js') }}"></script>
	
</body>
</html>