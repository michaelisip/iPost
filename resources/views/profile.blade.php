<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>

	<header>
		@foreach($blogger as $user)
			<h1>{{ $user->name }}</h1>
	</header>

	<form method="post" action="/post">
		{{csrf_field()}}
		<input type="hidden" name="blogger_id" value="{{ $user->id }}">

		<label>Subject</label>
		<input type="text" name="subject">
		
		<label>Body</label>
		<textarea name="body"></textarea>

		<button>POST</button>
	</form>
		
		@endforeach

</body>
</html>