<x-app-layout>

        <!-- [ breadcrumb ] start -->
        <div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10">Ajout des smartphones</h5>
						</div>
						<ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="/ajoutSmartphone">Ajouter un smartphone</a></li>
							<li class="breadcrumb-item"><a href="#">Smartphone Ajouté</a></li>
						
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
                        <h5>Smartphone ajouté </h5>
                        <div class="d-block mt-4">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
							<strong>Merci ! </strong> Votre smartphone à été ajouté avec succès , veuillez consulter les détails Ci-dessous 
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
                                        <th>Immo</th>
                                        <th>Série 1</th>
                                        <th>Série 2 </th>
                                        <th>Etat</th>
                                        <th>Modèle</th>
                                        <th>Marque </th>
                                        <th>Affecté ?</th>
                
                                     
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$tel->id_smart }}</td>
                                        <td>{{$tel->immo}}</td>
                                        <td>{{$tel->n_serie1}}</td>
                                        <td>{{$tel->n_serie2}}</td>
                                        <td>{{$etat->cod_etat}}</td>
                                        <td>{{$model->cod_model}}</td>
                                        <td>{{$marque->cod_marque}}</td>
                                        <td>{{$tel->affecte}}</td>
                                
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