<x-app-layout>

        <!-- [ breadcrumb ] start -->
        <div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10">Affectations des smartphones</h5>
						</div>
						<ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="/AjouterAffectation">Ajouter une Affectation</a></li>
							<li class="breadcrumb-item"><a href="#">Affectation ajoutée</a></li>
						
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- [ breadcrumb ] end -->
    <div class="row">
        <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Affectation ajoutée </h5>
                        <div class="d-block mt-4">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
							<strong>Merci ! </strong> Votre affectation à été ajoutée avec succès , veuillez consulter les détails Ci-dessous 
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
					
                        </div>
                      
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                       <th>ID </th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>matricule</th>
                                        <th>Immo</th>
                                        <th>Date d'attribution</th>
                                        <th>Récupéré par </th>
                                        <th>Remis par </th>
                
                                     
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$aff->id_affect}}</td>
                                        <td>{{$acteur->NOM}}</td>
                                        <td>{{$acteur->PRENOM}}</td>
                                        <td>{{$acteur->MATRICULE}}</td>
                                        <td>{{$tel[0]['immo']}}</td>
                                        <td>{{$aff->date_attrib}}</td>
                                        <td>{{$aff->recupere_par}}</td>
                                        <td>{{$aff->remis_par}}</td>
                                
                                    </tr>
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer bg-c-green"></div>
                </div>
            </div>
        </div>
 

 

   

</x-app-layout>