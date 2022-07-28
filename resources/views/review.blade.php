@extends('layout')

@section('title_content')
	Отзывы
@endsection

@section('main_content')
	<h1>Форма добавления отзыва</h1>

	@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<form method="POST" action="/review/check">
		@csrf
		<input type="email" name="email" id="email" placeholder="Введите E-Mail" class="form-control"><br>
		<input type="text" name="subject" id="subject" placeholder="Введите тему сообщения" class="form-control"><br>
		<textarea name="message" id="message" cols="30" rows="10" placeholder="Введите сообщение" class="form-control"></textarea><br>
		<button type="submit" class="btn btn-success">Отправить</button>
	</form>
	<br>
	<h1>Все отзывы</h1>
	@foreach ($reviews as $el)
		<div class="alert alert-warning">
			<h3>{{$el->subject}}</h3>
			<b>{{$el->email}}</b>
			<p>{{$el->message}}</p>
		</div>
	@endforeach
@endsection