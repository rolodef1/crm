<nav class="navbar navbar-default">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">CRM</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			@if(Auth::check())
			<ul class="nav navbar-nav">
				<li><a href="">Dashboard</a></li>
				@if(Auth::user()->admin())
				<li><a href="">Usuarios</a></li>
				<li><a href="">Roles</a></li>
				@endif
				<li><a href="">Clientes</a></li>    
			</ul>
			<ul class="nav navbar-nav navbar-right">    
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}} <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="{{route('logout')}}">Salir</a></li>
					</ul>
				</li>        
			</ul>
			@endif
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>