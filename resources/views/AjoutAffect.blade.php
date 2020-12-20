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
                            <li class="breadcrumb-item"><a href="#">Ajouter une Affectation</a></li>
							<li class="breadcrumb-item"><a href="#">Formulaire d'ajout</a></li>
						
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- [ breadcrumb ] end -->
        <div class="row">
			<!-- [ progress ] start -->
			<div class="col-sm-12">
                <form method="POST" action="/AjouterAffectation">
                @csrf
				     <div class="card">
                  
					    <div class="card-header bg-light" >
						    <h5  >Ajouter les coordonnées de l'intervenant </h5>
				    	</div>
					    <div class="card-body">
                           <div class="row d-flex justify-content-between">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="password">Nom</label>
                                        <input type="text" class="form-control" id="nom" placeholder="" required name="nom">
                                    </div>

                                @error('nom')
                                    <div class="alert alert-danger alert-dismissible fade show " role="alert">
                                        <strong>Erreur !</strong> {{$message}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                @enderror

                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="password">Prénom</label>
                                        <input type="text" class="form-control" id="prenom" placeholder="" name="prenom" required>
                                    </div>

                                    @error('prenom')
                                    <div class="alert alert-danger alert-dismissible fade show " role="alert">
                                        <strong>Erreur!</strong> {{$message}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    @enderror
                                 
                                </div>
                              
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="password">Numéro de téléphone </label>
                                        <input type="text" class="form-control" id="tel" placeholder="" name='tel'>
                                    </div>

                                    @error('tel')
                                    <div class="alert alert-danger alert-dismissible fade show " role="alert">
                                        <strong>Erreur!</strong> {{$message}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    @enderror


                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="password">Matricule</label>
                                        <input type="text" class="form-control" id="matricule" placeholder="" required name="matricule"> 
                                    </div>

                                    @error('matricule')
                                    <div class="alert alert-danger alert-dismissible fade show " role="alert">
                                        <strong>Erreur!</strong> {{$message}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputState">Centre de travail</label>
                                         <select id="inputState" class="form-control" name="centre">
                                             <option value="1" selected >DA.C.USINE Baraki</option>
                                             <option value="2" >DA.C.USINE Beni Messous</option>
                                             <option value="3"> DA.C.USINE.Réghaia</option>
                                             <option value="4"> DP.C.Boudouaou</option>
                                             <option value="5"> DP.C.Cherchel</option>
                                             <option value="6"> DP.C.El Harrach</option>
                                             <option value="7"> DP.C.Mazafran</option>
                                             <option value="8"> DP.C.Rouiba</option>
                                             <option value="9"> DP.C.SAA</option>
                                             <option value="10"> DP.C.Taksebt</option>
                                             <option value="11"> DP.C.Tipasa</option>
                                             <option value="12"> DP.C.Usine Relais</option>
                                             <option value="13"> DP.C.Villes Nouvelles</option>
                                             <option value="14">DG </option>

                                         </select>
                                    </div>              
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputCity">Fonction</label>
                                        <input type="text" class="form-control" id="fonction" name="fonction" placeholder='Ajouter sa fonction'>
                                    </div>
                                    @error('fonction')
                                    <div class="alert alert-danger alert-dismissible fade show " role="alert">
                                        <strong>Erreur!</strong> {{$message}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                  @enderror
                                </div>
                            </div>
                    </div>
                    <div class="card-footer bg-light" ></div>
                </div>
                <div class="card">
                    <div class="card-header  bg-light">
                    <h5  >Ajouter les informations de l'affectation </h5>
                    </div>
                    <div class="card-body">
                         <div class="row d-flex justify-content-between">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="floating-label" for="Email">Immo</label>
                                    <input type="number" class="form-control" id="immo" required name='immo' >
                                </div>
                                @error('immo')
                                    <div class="alert alert-danger alert-dismissible fade show " role="alert">
                                        <strong>Erreur!</strong> {{$message}} 
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="floating-label" for="Email">Remis Par </label>
                                    <input type="text" class="form-control" id="remis"  name="remis"  required>
                                </div>
                                @error('remis')
                                    <div class="alert alert-danger alert-dismissible fade show " role="alert">
                                        <strong>Erreur!</strong> {{$message}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="floating-label" for="Email">Récupéré par </label>
                                    <input type="text" class="form-control" id="recupere" required name="recupere"  required>
                                </div>
                                @error('recupere')
                                    <div class="alert alert-danger alert-dismissible fade show " role="alert">
                                        <strong>Erreur!</strong> {{$message}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">date d'attiribution</label>
                                    <input type="date" class="form-control" id="date_attr" placeholder="date d'attribution" name='date_attr' required>
                                </div>
                                @error('date_attr')
                                    <div class="alert alert-danger alert-dismissible fade show " role="alert">
                                        <strong>Erreur!</strong> {{$message}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Etat du smartphone</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="etat">
                                            <option value="1" selected>Armoire</option>
                                            <option value="2">OK HDK</option>
                                            <option value="6">En marche</option>
                                            <option value="5">Déja utilisé</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                     <label for="exampleFormControlTextarea1">Remarque</label>
                                    <textarea class="form-control" id="remarque" name="remarque" rows="3" placeholder='Ajouter un commentaire ...'></textarea>
                                </div>
                            </div>
            
                            <div class="col-sm-12 d-flex">
                                <button class="btn btn-success has-ripple" id="submit" type="submit">Confirmer</button>
                            </div>
                          
                        </div>
                    </div>
                    <div class="card-footer bg-light" ></div>
                </div>
            </form>
		</div>
	</div>
 

 
</x-app-layout>