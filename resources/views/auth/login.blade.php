
<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.header')
    <title>Se connecter a Makutano system</title>
</head>
<body>
	 <div id="wrapper">
              <div class="login">
                  <div class="header text-center">
                      <img src="{{ asset('/img/makutano.png') }}" width="200px" style="margin-bottom:20px;">
                      <p class="lead">Connectez-vous à votre compte </p>

                  </div>
                  <form class="form-auth-small" method="POST" action="{{ route('login.custom')}}">
                      {{ csrf_field() }}
                      <div class="form-group">
                          <label for="signin-email" class="control-label sr-only">E-mail</label>
                          <input type="text" class="form-control" id="signin-email" name="prenom" placeholder="nom de l'utilisateur">
                      </div>
                      <div class="form-group">
                          <label for="signin-password" class="control-label sr-only">Mot de passe</label>
                          <input type="password" class="form-control" id="signin-password" name="password" placeholder="mot de passe">
                      </div>
                      <div class="form-group clearfix">
                      </div>
                      <button type="submit" class="btn btn-primary btn-lg btn-block" style="background:rgb(222,0,0);border:1px solid rgb(222,0,0); ">se connecter</button>
                  </form>
              </div>
    </div>
</body>
</html>
