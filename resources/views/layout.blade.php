<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield('title_content')</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">
	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark text-white border-bottom shadow-sm">
		<h5 class="my-0 mr-md-auto font-weight-normal">LY Сайт на Laravel 9</h5>
		<nav class="my-2 my-md-0 mr-md-3">
			<a class="p-2 text-white" href="/">Главная</a>
			<a class="p-2 text-white" href="/about">О нас</a>
		</nav>
<a class="btn btn-warning" href="/review">Отзывы</a> 
	</div>
	<div class="container">@yield('main_content')</div>
</body>
</html>