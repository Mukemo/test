<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	@include('partials.header')
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="{{ asset('img/logo-dark.png') }}" alt="Klorofil Logo"></div>
								<p class="lead">connecter vous a votre compte</p>
							</div>
							<form class="form-auth-small" action="index.php">
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">E-mail</label>
									<input type="email" class="form-control" id="signin-email" placeholder="e-mail">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Mot de passe</label>
									<input type="password" class="form-control" id="signin-password"  placeholder="mot de passe">
								</div>
								<div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<input type="checkbox">
										<span>se rappeler de moi.</span>
									</label>
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">se connecter</button>
								<div class="bottom">
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="#">s'enregistrer.</a></span>
								</div>
							</form>
						</div>
					</div>
					{{-- <div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Free Bootstrap dashboard template</h1>
							<p>by The Develovers</p>
						</div>
					</div> --}}
					{{-- <div class="clearfix"></div> --}}
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
