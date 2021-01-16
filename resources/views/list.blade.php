<!DOCTYPE html>
<html>
<head>
	<title>Page</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>
<body>

	<a href="/create">შექმნა</a>

	<div class="container">
		<div class="col-md-10 offset-1 mt-3">
			<table class="table table-flat">
				<tr>
					<td>id</td>
					<td>სახელი/გვარი</td>
					<td>მისამართი</td>
					<td>ბიოგრაფია</td>
				</tr>
				@foreach($persons as $person)
					<tr>
						<td>{{ $person->id }}</td>
						<td>{{ $person->name }} {{ $person->lastname }}</td>
						<td>{{ $person->address }}</td>
						<td>{{ $person->bio }}</td>
					</tr>
				@endforeach
			</table>
		</div>
	</div>

</body>
</html>




