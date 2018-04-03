<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<style type="text/css" href="{{ asset('ccs/app.css') }}"></style>
	<title{{ $article->category }}</title>
</head>
<body>
	<h1 align="center">{{ $article->title }}</h1>
	<hr>
	<p>{{ $article->content }}</p>
	<br>
	<hr>
	<h3></h3>
	<!-- como saber quien publico la noticia en blade-->
	{{ $article->user->name  }} | <a href="#">{{ $article->category->name }}</a> | 

	<!-- para mostrar el tags, que la relacion de muchos a muchos debemos hacer un recorrido-->


	
</body>
</html>