
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Mobilité UGO</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
	<!-- vendor css -->
	<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">  
    <link rel="stylesheet" href="/css/style.css">
    
    

</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar menu-light ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="/images/user.png" alt="User-Profile-Image">
						<div class="user-details">
							<div id="more-details">{{ Auth::user()->name }}</div>
						</div>
					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-unstyled">
							<li class="list-group-item"><a href="user-profile.html"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
							<li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Settings</a></li>
							<li class="list-group-item"><a href="auth-normal-sign-in.html"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
						</ul>
					</div>
				</div>
				
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
					    <label>Dashboard</label>
					</li>
					<li class="nav-item">
					    <a href="{{route('dashboard')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Acceuil</span></a>
					</li>
				
					<li class="nav-item pcoded-menu-caption">
					    <label>Gestion de mobilité</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="fa fa-share"></i></span><span class="pcoded-mtext">Affectations</span></a>
					    <ul class="pcoded-submenu">
                            <li><a href="afficherAffectations">Afficher</a></li>
					        <li><a href="AjouterAffectation">Ajouter</a></li>
							<li><a href="#">Scan d'une décharge</a></li>
					   
					    </ul>
                    </li>
  
                    <li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="fa fa-mobile-alt"></i></span><span class="pcoded-mtext">Smartphones</span></a>
					    <ul class="pcoded-submenu">
                            <li><a href="indexSmartphone">Afficher</a></li>
					        <li><a href="/ajoutSmartphone">Ajouter</a></li>
					   
					    </ul>
					</li>
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="fa fa-undo-alt"></i></span><span class="pcoded-mtext">Restitutions</span></a>
					    <ul class="pcoded-submenu">
                            <li><a href="#">Afficher</a></li>
					        <li><a href="#">Ajouter</a></li>
					      
					   
					    </ul>
					</li>

				</ul>
				<div class="card text-center">
					<div class="card-block">
						<img src='images/seaal.png' width="70"></img>
					</div>
				</div>
		
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
		<div class="m-header">
			<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
			<a href="#!" class="b-brand">
						<!-- ========   change your logo hear   ============ -->
			 <h4 class="mt-2 text-white"> UGO  </h4>
			</a>
			<a href="#!" class="mob-toggler">
				<i class="feather icon-more-vertical"></i>
			</a>
		   </div>
				<div class="collapse navbar-collapse">
				
					<ul class="navbar-nav ml-auto">
						<li>
							<div class="dropdown drp-user">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                  
                                    <i class="feather icon-user"></i>
                                      Logout
								</a>
								<div class="dropdown-menu dropdown-menu-right profile-notification">
									<div class="pro-head">
										<img src="/images/user.png" class="img-radius" alt="User-Profile-Image">
										
										<span>{{ Auth::user()->name }}</span>
										<a href="{{route('logout')}}" class="dud-logout" title="Logout">
                                            <i class="feather icon-log-out"></i>
										</a>
									</div>
									<ul class="pro-body">
										<li><a href="#" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
										
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
			
	</header>
	<!-- [ Header ] end -->
	
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
       
            <main>
                {{ $slot }}
            </main>
    </div>
</div>

    <!-- Required Js -->
    <script src="js/vendor-all.min.js"></script>
    <script src="js/plugins/bootstrap.min.js"></script>
	<script src="js/pcoded.min.js"></script>
	<script src="js/ripple.js"></script>


</body>

</html>
