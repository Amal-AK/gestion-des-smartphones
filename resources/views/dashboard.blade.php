<x-app-layout>
  
	<!-- [ breadcrumb ] start -->
    <div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10">Dashboard</h5>
						</div>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="/dashboard"><i class="feather icon-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#!">Statistiques</a></li>
						
						</ul>
					</div>
				</div>
			</div>
		</div>
		    <!-- page statustic card start -->
			<div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-yellow" id="tel_total"></h4>
                                        <h6 class="text-muted m-b-0">Appareils</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="feather icon-smartphone f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-yellow">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">Nombre total des smartphones</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-up text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-green" id="tel_aff"></h4>
                                        <h6 class="text-muted m-b-0">Appareils</h6>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="feather icon-smartphone f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-green">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">Nombre des smartphones affectés</p>
                                    </div>
                                    <div class="col-3 text-right">
                                        <i class="feather icon-trending-up text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-red" id="tel_endo"></h4>
                                        <h6 class="text-muted m-b-0">Appareils</h6>
                                    </div>
                                    <div class="col-4 text-right">
									<i class="feather icon-smartphone f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-red">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">Nombre des smartphones endommagés</p>
                                    </div>
                                    <div class="col-3 text-right">
									<i class="feather icon-trending-up text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-blue" id="tel_dispo"></h4>
                                        <h6 class="text-muted m-b-0">Appareils</h6>
                                    </div>
                                    <div class="col-4 text-right">
									<i class="feather icon-smartphone f-28"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-c-blue">
                                <div class="row align-items-center">
                                    <div class="col-9">
                                        <p class="text-white m-b-0">Nombre des smartphones disponibles</p>
                                    </div>
                                    <div class="col-3 text-right">
									<i class="feather icon-trending-up text-white f-16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
		<!-- [ breadcrumb ] end -->

		<div class="row">
			<!-- seo start -->
            <div class="col-xl-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h3 id='nb_inter'></h3>
                                <h6 class="text-muted m-b-0">intervenants mobiles<i class="fa fa-caret-up text-c-red m-l-10"></i></h6>
                            </div>
                            <div class="col-6 text-right">
                                <i class="feather icon-bar-chart-2 f-28"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-c-purple"></div>
                </div>
            </div>
            
            <div class="col-xl-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h3 id="nb_rest">1,62,564</h3>
                                <h6 class="text-muted m-b-0">Nombre de restitutions<i class="fa fa-caret-up text-c-red m-l-10"></i></h6>
                            </div>
                            <div class="col-6 text-right">
                                <i class="feather icon-bar-chart-2 f-28"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-c-green"></div>
                </div>
            </div>
            <!-- seo end -->
            
		</div>

		<script src="js/plugins/jquery.min.js"></script>
		<script>

        $.ajax({
        url: "/getStatistiques", 
        type : 'GET',
        dataType : 'json' , 
        success: function(result){
			var toal = $('#tel_total').text(result['data'][0]['total'] ) ; 
			var toal = $('#tel_aff').text(result['data'][0]['total_aff'] ) ; 
			var toal = $('#tel_endo').text(result['data'][0]['total_endo'] ) ; 
			var toal = $('#tel_dispo').text(result['data'][0]['total_dispo'] ) ; 
			var toal = $('#nb_inter').text(result['data'][0]['total_inter'] ) ; 
			var toal = $('#nb_rest').text(result['data'][0]['total_rest'] ) ; 

		}}); 
	</script>	
</x-app-layout>
