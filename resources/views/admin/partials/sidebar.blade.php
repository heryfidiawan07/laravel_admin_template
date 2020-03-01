<aside id="sidebar-wrapper">
	<div class="sidebar-brand">
		<a href="">{{ env('APP_NAME') }}</a>
	</div>
	<div class="sidebar-brand sidebar-brand-sm">
		<a href="index.html">St</a>
	</div>
	<ul class="sidebar-menu">
		<li class="menu-header">Dashboard</li>
		<li class="active">
			<a class="nav-link" href="#"><i class="fa fa-columns"></i> <span>Dashboard</span></a>
		</li>
		<li class="menu-header">Template</li>
		<li class="dropdown">
			<a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Layout</span></a>
			<ul class="dropdown-menu">
				<li><a class="nav-link" href="/home">Home</a></li>
				<li><a class="nav-link" href="/index">Index</a></li>
				<li><a class="nav-link" href="/show">Show</a></li>
				<li><a class="nav-link" href="/page">Page</a></li>
				<li><a class="nav-link" href="/domain">Domain</a></li>
			</ul>
		</li>
	</ul>
</aside>