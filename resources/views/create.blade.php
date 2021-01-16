<!DOCTYPE html>
<html>
<head>
	<title>Page</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>
<body>

	<a href="/list">ყველას ნახვა</a>

	<div class="container">
		<form action="/submit" method="post" class="col-md-6 offset-3 mt-3">
			<div class="form-group">
				<input type="text" name="name" class="form-control" placeholder="სახელი">
			</div>
			<div class="form-group">
				<input type="text" name="lastname" class="form-control" placeholder="გვარი">
			</div>
			<div class="form-group">
				<input type="text" name="address" class="form-control" placeholder="მისამართი">
			</div>
			<div class="form-group">
				<textarea type="text" name="bio" class="form-control" placeholder="ბიოგრაფია"></textarea>
			</div>
			<div class="form-group">
				<input type="date" name="birth_date" class="form-control" placeholder="დაბადების თარიღი">
			</div>
			@csrf
			<div class="form-group">
				<button name="submit" class="btn btn-success">გაგზავნა</button>
			</div>
		</form>
	</div>

</body>
</html>