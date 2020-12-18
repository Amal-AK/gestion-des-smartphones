

<!DOCTYPE html>
<html lang="en">

<head>

	<title>Mobilité UGO</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="/css/style.css">


</head>

<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card" >
			<div class="row align-items-center text-center">
            <div class="col-md-12">
            <form method="POST" action="{{ route('register') }}">
              @csrf
			
					<div class="card-body">
						<img src="assets/images/logo-dark.png" alt="" class="img-fluid mb-4">
						<h4 class="mb-3 f-w-400">Créer un compte</h4>
						<div class="form-group mb-3">
							<label class="floating-label" for="name">Nom complet</label>
							<input type="text" class="form-control" id="name" placeholder="" name="name" Required>
						</div>
						<div class="form-group mb-3">
							<label class="floating-label" for="email">Adresse Email </label>
							<input type="text" class="form-control" id="email" placeholder="" name="email" Required>
						</div>
						<div class="form-group mb-4">
							<label class="floating-label" for="Password">Mot de passe </label>
							<input type="password"  name="password" class="form-control" id="password" placeholder="" Required> 
						</div>
						<div class="form-group mb-4">
							<label class="floating-label" for="Password">Confirmer le mot de passe </label>
							<input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="" Required> 
                        </div>
                           <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
						<button class="btn btn-primary btn-block mb-4">S'inscrire</button>
                        <p class="mb-2 text-muted">Vous avez déja un compte ?  <a href="{{ route('login') }}">
                         {{ __('Connectez-vous') }}
                         </a></p>
					</div>
                </form> 
             </div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="/js/vendor-all.min.js"></script>
<script src="/js/plugins/bootstrap.min.js"></script>
<script src="/js/pcoded.min.js"></script>



</body>

</html>
