<html lang='en'>
<head>
	<meta name="Codefactory News" content="Codefactory">
	<meta charset='utf-8'>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Own CSS -->
	<link rel='stylesheet' type='text/css' href='news_feed.css'>
	<!-- Magnific CSS -->
	<link rel='stylesheet' type='text/css' href='magnific-popup.css'>
	<!-- Jquery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<!-- Popper -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<!-- Bootstrap JS -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- JSON -->
	<script type="text/javascript" src ="list_of_new_products.json"></script>
	<title>Codefactory News</title>
</head>
<body>


<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h1 id="heading_1" class="text-center">
				<img id="insta_pic" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/800px-Instagram_logo_2016.svg.png" alt="..." class="img-responsive"/>
				NEWS ;)
			</h1>
		</div>
		<div class="col-lg-2 hidden-xs">
			
		</div>
	</div>
</div>

<div class="container">
	<div class="row gallery" id="instafeed">
	</div>	
</div>



	<!-- Insta JS -->
	<script type="text/javascript" src ="./js/news_feed.js"></script>
	<!-- Magnific JS -->
	<script type="text/javascript" src ="./js/magnific.min.js"></script>
	<!-- Own JS -->
	<script type="text/javascript" src ="./js/instafeed.min.js"></script>
</body>
</html>