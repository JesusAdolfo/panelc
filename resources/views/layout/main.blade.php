<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>@yield('title', 'Bleu Sky~')</title>
    <link rel="shortcut icon" href="{{ asset('css/imgs/favicon.ico') }}">
	<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.4/readable/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

	<link rel="stylesheet" href="{{asset('css/blog.css')}}">
	<link rel="stylesheet" href="{{asset('css/trumbowyg.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.theme.css')}}">

</head>
<body>
	@yield('content')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="{{asset('js/animatescroll.min.js')}}"></script>
	<script src="{{asset('js/trumbowyg.min.js')}}"></script>
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<script>
  	  $(document).ready(function() {
	 
	  $("#owl-demo").owlCarousel({
	 
	      autoPlay: 3000, //Set AutoPlay to 3 seconds
	 	  lazyLoad : true,
	      items : 4,
	      itemsDesktop : [1199,3],
	      itemsDesktopSmall : [979,3]
	 
	  });
	 
	});

  	 $(document).ready(function() {
 
	  $("#owl-demo2").owlCarousel({
	 
	      navigation : false, // Show next and prev buttons
	      slideSpeed : 300,
	      paginationSpeed : 400,
	      singleItem:true,
	      autoPlay: 3000,
	 
	      // "singleItem:true" is a shortcut for:
	      // items : 1, 
	      // itemsDesktop : false,
	      // itemsDesktopSmall : false,
	      // itemsTablet: false,
	      // itemsMobile : false
	 
	  });
	 
	}); 
	</script>
	
	@yield('js')

	@section('confirmation-modal')
		@include('layout.partials.confirmation-modal')
</body>
</html>