<x-app-layout>
	<!-- [ breadcrumb ] start -->
    <div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10">Affectations</h5>
						</div>
						<ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Affectation </a></li>
                            <li class="breadcrumb-item"><a href="afficherAffectations">Afficher </a></li>
							<li class="breadcrumb-item"><a href="#">Voir Plus </a></li>
						
						</ul>
					</div>
				</div>
			</div>
		</div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header ">
                        <h5 class="mt-2">Détails de l'affectation Numéro :  {{$data->id_affect}} </h5>
                       
					</div>
					<div class="card-body f-flex justify-content-center row">
                        <ul class="list-group striped col-md-11">
                            <li class="list-group-item text-white  bg-light"></li>
                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center ">
                              
                                L'id de l'affectation  : {{$data->id_affect}}
                                <span class="badge bg-success text-white badge-pill"><i class="fas fa-edit"></i></span>
                            </li>
                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                       
                                La date de l'affectation  : {{$data->date_attrib}}
                                <span class="badge bg-success text-white badge-pill"><i class="fas fa-edit"></i></span>
                            </li>
                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                      
                            Le matricule de l'intervenant : {{$data->MATRICULE}}
                            <span class="badge bg-success text-white badge-pill"><i class="fas fa-edit"></i></span>
                            </li>
                         
                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center ">
                      
                             Nom et Prénom de l'intervenant  : {{$data->PRENOM.' '.$data->NOM}}
                             <span class="badge bg-success text-white badge-pill"><i class="fas fa-edit"></i></span>
                            </li>
                        
                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                      
                            Le numéro de téléphone de l'intervenant  : {{$data->N_TEL}}
                            <span class="badge bg-success text-white badge-pill"><i class="fas fa-edit"></i></span>
                            </li>
                            @if($data->fonction != null )
                                <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                             
                                   Le poste de l'intervenant  : {{$data->PRENOM}}
                                   <span class="badge bg-success text-white badge-pill"><i class="fas fa-edit"></i></span>
                                </li>
                            @endif
                            @if($data->cod_centre != null )
                                <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                             
                                   Le centre de travail de l'intervenant  : {{$data->cod_centre}}
                                   <span class="badge bg-success text-white badge-pill"><i class="fas fa-edit"></i></span>
                                </li>
                            @endif
                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                     
                            Le IMMO de smartphone : {{$data->immo}}
                            <span class="badge bg-success text-white badge-pill"><i class="fas fa-edit"></i></span>
                            </li>
                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        
                              Le Numéro de Série 1 : {{$data->n_serie1}}
                              <span class="badge bg-success text-white badge-pill"><i class="fas fa-edit"></i></span>
                            </li>
                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        
                                Le Numéro de Série 2 : {{$data->n_serie2}}
                                <span class="badge bg-success text-white badge-pill"><i class="fas fa-edit"></i></span>
                            </li>
                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                       
                              Le Modèle : {{$data->cod_model.' , La marque : '.$data->cod_marque}}
                              <span class="badge bg-success text-white badge-pill"><i class="fas fa-edit"></i></span>
                            </li>
                            @if($data->cod_etat != null )

                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">

                              L'état de smartphone : {{$data->cod_etat}}
                              <span class="badge bg-success text-white badge-pill"><i class="fas fa-edit"></i></span>
                            </li>
                            @endif

                                 @if($data->recupere_par != null )

                                <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">

                          
                                Récupéré par : {{$data->recupere_par}}
                                <span class="badge bg-success text-white badge-pill"><i class="fas fa-edit"></i></span>
                                </li>
                                @endif

                                @if($data->remis_par != null )
                                <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            
                                Remis par : {{$data->remis_par}}
                                <span class="badge bg-success text-white badge-pill"><i class="fas fa-edit"></i></span>
                                </li>
                                @endif

                                @if($data->commentaire != null )
                                <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            
                                Remarque : {{$data->commentaire}}
                                <span class="badge bg-success text-white badge-pill"><i class="fas fa-edit"></i></span>
                                </li>
                                @endif
                        </ul>
                        <div class="col-md-11 d-flex mt-4 flex-row-reverse ">

                            <button class="btn btn-danger has-ripple m-1" data-toggle="modal" data-target="#ModalCenter"> Supprimer  </button>
                         </div>
                    </div>
                    <div class="card-footer bg-light" ></div>
                </div>
            </div>     
        </div>


        <div id="ModalCenter" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
              <form method="POST" action ="deleteAffectation">
              @csrf
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalCenterTitle">Confirmer la suppression</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
                        <input  name="id_affect" type="hidden" value='{{$data->id_affect}}' >
						<p class="mb-0">Êtes-vous sûr de vouloir supprimer l'affectation  {{$data->id_affect}} ?</p>
					</div>
					<div class="modal-footer">
					    <button type="button" class="btn  btn-success" data-dismiss="modal">Annuler</button>
						<button type="submit" class="btn  btn-danger" >Confirmer</button>
					</div>
				</div>
                </form>
			</div>
		</div>

</x-app-layout>