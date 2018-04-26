@extends('layouts.default')
@section('content')
	<div class="jumbotron">
		<h1>Hellp Laravel</h1>
		<p class="lead">
			你现在看到的是 <a href="#">SB</a>
		</p>
		<p>
			come on
		</p>
		<p>
			<a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
		</p>
	</div>
@stop
