<!DOCTYPE html>
<html lang="fr">

<head>

	<title>Mobilité UGO</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />

	<!-- vendor css -->
	<link rel="stylesheet" href="/css/style.css">

</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content" style="width : 400px ">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12" >
                        <!-- Session Status -->
                      <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form method="POST" action="{{ route('login') }}">

                    @csrf
					<div class="card-body">
						
						<h4 class="mb-3 f-w-400">Se connecter</h4>
						<div class="form-group mb-3">
							<label class="floating-label" >Adresse Email</label>
							<input type="text" class="form-control" id="email" placeholder="" name="email" Required>
						</div>
						<div class="form-group mb-4">
							<label class="floating-label" >Mot de passe </label>
							<input type="password" class="form-control" id="password" placeholder="" name="password"  Required>
                        </div>
                          <!-- Validation Errors -->
                       <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <button class="btn btn-block btn-primary mb-4">Connecter</button>
                        <div class="mb-2 text-muted">
							
                         @if (Route::has('password.request'))
                        <p class="mb-2 text-muted">Mot de passe oublié ?  <a href="{{ route('password.request') }}">
                         {{ __('Rénitialiser') }}
                         </a></p>
                   
                         @endif
						</div>
						<div class="mb-2 text-muted">
						<p class="mb-2 text-muted">Vous n'avez pas de compte ?  <a href="{{ route('register') }}">
                         {{ __('Créer') }}
                         </a></p>
			
						</div>
					
                    </div>
                 </form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

</body>
<script src="/js/vendor-all.min.js"></script>
<script src="/js/plugins/bootstrap.min.js"></script>
<script src="/js/pcoded.min.js"></script>

</html>


