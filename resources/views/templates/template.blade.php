<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<!-- Mirrored from seantheme.com/hud/layout_starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Apr 2023 21:33:07 GMT -->
<head>
<meta charset="utf-8">
<title>My Application  | @yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content>
	<meta name="author" content>
	
    @include('templates.partial.css')

	@include('templates.partial.js')
	
</head>
<body>
	
	<div id="app" class="app">
		
		@include('templates.partial.headbar')
		
		
		
		@include('templates.partial.sidebar')
		
			
		
		<button class="app-sidebar-mobile-backdrop" data-toggle-target=".app" data-toggle-class="app-sidebar-mobile-toggled"></button>
		
		
		
		@yield('content')
		
		
		<a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
		
		
		@include('templates.partial.app_theme')
		
	</div>
	
	
	<!-- partial js asal dari sini -->
</body>

<!-- Mirrored from seantheme.com/hud/layout_starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Apr 2023 21:33:07 GMT -->
</html>
