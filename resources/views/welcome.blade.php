<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Simple House Template</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />
	<link href="css/templatemo-style.css" rel="stylesheet" />
</head>

<body>

	<div class="container">
		<!-- Top box -->
		<!-- Logo & Site Name -->
		<div class="placeholder">
			<div class="parallax-window" data-parallax="scroll" data-image-src="img/simple-house-01.jpg">
				<div class="tm-header">
					<div class="row tm-header-inner">
						<div class="col-md-6 col-12">
							<img src="img/simple-house-logo.png" alt="Logo" class="tm-site-logo" />
							<div class="tm-site-text-box">
								<h1 class="tm-site-title">G. Restaurant</h1>
								<h6 class="tm-site-description">Happiness is a full belly</h6>
							</div>
						</div>
						<nav class="col-md-6 col-12 tm-nav">
							<ul class="tm-nav-ul">
								<li class="tm-nav-li"><a href="/" class="tm-nav-link active">Home</a></li>
								<li class="tm-nav-li"><a href="/about" class="tm-nav-link">About</a></li>
								<li class="tm-nav-li"><a href="/contact" class="tm-nav-link">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Welcome to G. Restaurant</h2>
				<p class="col-12 text-center">Where professionalism and quality meets</p>
			</header>

			<div class="tm-paging-links">
				<nav>
					<ul>
						@foreach($menu as $menu_name)
						<li class="tm-paging-item"><a href="#" data-menu="{{strtolower(str_replace(' ','_',$menu_name->name))}}" class="tm-paging-link active">{{$menu_name ->name}}</a></li>

						@endforeach
					</ul>

				</nav>
			</div>

			<!-- Gallery -->
			<div class="row tm-gallery">
				@foreach($menu as $menu_name)
				@foreach($menu_name->meals as $meal)
				<!-- gallery page 1 -->
				<div id="tm-gallery-page-{{strtolower(str_replace(' ','_',$menu_name->name))}}" class="tm-gallery-page">
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>

							<img src="{{url('/storage/'.$meal->image)}}" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">{{$meal->name}}</h4>
								<p class="tm-gallery-description">{{$meal->description}}</p>
								<p class="tm-gallery-price">{{$meal->price}} Egp</p>
							</figcaption>

						</figure>
					</article>


				</div> <!-- gallery page 1 -->
				@endforeach
				@endforeach



			</div>

		</main>

		<footer class="tm-footer text-center">
			<p>Copyright &copy; 2020 G. Restaurant

				| Design: G.</p>
		</footer>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script>
		$(document).ready(function() {
			// Handle click on paging links
			$('.tm-paging-link').click(function(e) {
				e.preventDefault();

				var page = $(this).data('menu');
				console.log(page);
				$('.tm-gallery-page').addClass('hidden');
				$('#tm-gallery-page-' + page).removeClass('hidden');
				$('.tm-paging-link').removeClass('active');
				$(this).addClass("active");
			});
		});
	</script>
</body>

</html>