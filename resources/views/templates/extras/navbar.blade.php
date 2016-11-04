<!-- NavBar-->
	<nav class="navbar-inverse" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ route('home')}}">Buyorsellpets</a>
			</div>

			<div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					
					<li class="menuItem"><a href="{{ route('templates.petsrecord.enterdetails')}}">Make a sell</a></li>
					<li class="menuItem"><a href="{{route('templates.petsrecord.viewallposts')}}">View all</a></li>
					<li class="menuItem"><a href="{{route('templates.lostandfound.index')}}">Lost and found</a></li>
					<li class="menuItem"><a href="#">Register</a></li>
					<li class="menuItem"><a href="#">Signin</a></li>
					
				</ul>
			</div>
		   
		</div>
	</nav> 