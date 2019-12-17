<html lang='en'>
<head>
	<meta name="Check Out" content="Codefactory">
	<meta charset='utf-8'>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Own CSS -->
	<link rel='stylesheet' type='text/css' href='check_out_1.css'>
	<!-- Jquery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<!-- Popper -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<!-- Bootstrap JS -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- Symbols -->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<title>Check Out 1</title>
</head>
<body>

<div class="container">
	<table id="cart" class="table table-hover table-condensed">
    	<thead>
			<tr>
				<th class="th_product">Product</th>
				<th class="th_price">Price</th>
				<th class="th_quantity">Quantity</th>
				<th class="th_subtotal text-center">Subtotal</th>
				<th class="th_buttons"></th>
			</tr>
		</thead>
			<tbody>
				<tr>
					<td data-th="Product">
						<div class="row">
							<div class="test col-sm-2 hidden-xs">
								<img src="https://s3-eu-west-1.amazonaws.com/cover2.galileo-press.de/print/9783836263955_800_2d.png" alt="..." class="img-responsive"/>
							</div>
							<div class="col-sm-10">
								<h4 class="nomargin">Product 1</h4>
									<p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
							</div>
						</div>
					</td>
					<td data-th="Price">$150.00</td>
					<td data-th="Quantity">
						<input type="number" class="form-control text-center" value="1">
					</td>
					<td data-th="Subtotal" class="text-center">150.00</td>
					<td class="actions" data-th="">
						<button class="btn btn-info btn-sm">
							<i class="fa fa-refresh">
							</i>
						</button>
						<button class="btn btn-danger btn-sm">
							<i class="fa fa-trash-o"></i>
						</button>				
					</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
					<td colspan="2" class="hidden-xs"></td>
					<td class="hidden-xs text-center"><strong>Total $150.00</strong></td>
					<td><a href="check_out_2.php" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
				</tr>
			</tfoot>
		</table>
	</div>
</body>
</html>