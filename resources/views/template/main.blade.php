<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Default') | Panel de administracion</title>
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
	@include('template.partials.nav')
	<section>		
		<div class="container-fluid">		
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="panel panel-default">
						<div class="panel-heading">@yield('title')</div>
						<div class="panel-body"> 
							@include('flash::message')
							@include('template.partials.errors')
							@yield('content')
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer>
		@include('template.partials.footer')
	</footer>
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>	
	<script>
	$('div.alert').not('.alert-important').delay(4000).fadeOut(350);
	</script>
	@yield('js')
</body>
</html>