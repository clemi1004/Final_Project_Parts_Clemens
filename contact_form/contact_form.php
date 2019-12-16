<html lang='en'>
<head>
	<meta name="Contact Form" content="Codefactory">
	<meta charset='utf-8'>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Own CSS -->
	<link rel='stylesheet' type='text/css' href='contact_form.css'>
	<!-- Jquery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<!-- Popper -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<!-- Bootstrap JS -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<title>Contact Form</title>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-10 offset-1">
	      <div class="col-md-8 offset-md-2">
	        <div class="well well-sm">
	          <form class="form-horizontal" action="" method="post">
	          <fieldset>
	            <legend class="text-center">Contact us</legend>
	    
	            <!-- Name input-->
	            <div class="form-group">
	              <label class="col-md-3 control-label" for="name">Name</label>
	              <div class="col-md-12">
	                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
	              </div>
	            </div>
	    
	            <!-- Email input-->
	            <div class="form-group">
	              <label class="col-md-3 control-label" for="email">Your E-mail</label>
	              <div class="col-md-12">
	                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
	              </div>
	            </div>
	    
	            <!-- Message body -->
	            <div class="form-group">
	              <label class="col-md-3 control-label" for="message">Your message</label>
	              <div class="col-md-12">
	                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
	              </div>
	            </div>
	    
	            <!-- Form actions -->
	            <div class="form-group">
	              <div class="col-md-12 text-right">
	                <button type="submit" class="button_settings btn btn-lg">Submit</button>
	              </div>
	            </div>
	          </fieldset>
	          </form>
	        </div>
	      </div>
		</div>
	</div>
</div>

</body>
</html>