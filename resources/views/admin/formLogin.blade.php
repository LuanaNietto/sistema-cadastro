<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user=scalable=no, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<style type="text/css">
	html,
	body{
		height: 100%;
	}
	body{
		display: -ms-flexbox;
		display: flex;
		-ms-flex-align:center;
		align-items: center;
		padding-top: 40px;
		padding-bottom: 40px;
		background-color: #fsfsfs;
	}
	.form-signin{
		width: 100%;
		max-width: 330px;
		padding: 15px;
		margin: auto;
	}
	.form-signin .checkbox{
		font-weight: 400;
	}
	.form-signin .form-control{
		position: relative;
		box-sizing: border-box;
		height: auto;
		padding: 10px;
		font-size: 16px;
	}
	.form-signin .form-control:focus{
		z-index: 2;
	}
	.form-signin input[type="email"]{
		margin-bottom: -1px;
		border-bottom-right-radius: 0;
		border-bottom-left-radius: 0;
	}
	.form-signin input[type="password"]{
		margin-bottom: 10px;
		border-bottom-right-radius: 0;
		border-bottom-left-radius: 0;
	}
	.btn{
		background-color: #363636;
	}
	
</style>
	
</head>
<body>
	<form class="form-signin" method="post" action="{{ route('admin.login.do') }}">
		@csrf
		<h1> Faça seu login </h1>
		<br>

		@if($errors->all())
            @foreach($errors->all() as $error)
            	<div class="alert alert-danger" role="alert">
 					 {{ $error }}
				</div>
            @endforeach
		@endif


		<label for="email" class="sr-only">Endereço de email</label>
		<input type="email" name="email" id="email" class="form-control" placeholder="Seu email" required="">

		<label for="password" class="sr-only">Senha</label>
		<input type="password" name="password" id="password" class="form-control" placeholder="Senha" required="">

		<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
	</form>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>	

</body>
</html>