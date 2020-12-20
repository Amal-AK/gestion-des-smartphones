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
                            <li class="breadcrumb-item"><a href="#">Ajouter un smartphone</a></li>
							<li class="breadcrumb-item"><a href="#">Formulaire d'ajout</a></li>
						
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
                        <h5>Ajouter un smartphone </h5>

                    </div>
                    <div class="card-body">
                    <form class="row" method="POST" action="/AjouterSmartphone">
                    @csrf
                        <div class="col-sm-4">
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Immo</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="immo" placeholder="Immo" required name='immo'>
                                </div>
                            </div>
                            @error('immo')
                                <div class="alert alert-danger alert-dismissible fade show " role="alert">
                                    <strong>Erreur !</strong> {{$message}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                            @enderror 
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Série 1</label>
                                <div class="col-sm-9">
                                    <input type="string" class="form-control" id="serie1" name='serie1' placeholder="Numéro de série 1 " required>
                                </div>
                            </div>
                            @error('serie1')
                                <div class="alert alert-danger alert-dismissible fade show " role="alert">
                                    <strong>Erreur !</strong> {{$message}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                            @enderror 
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Série 2</label>
                                <div class="col-sm-9">
                                    <input type="string" class="form-control" id="serie2"  name='serie2' placeholder="Numéro de série 2" required>
                                </div>
                            </div>
                            @error('serie2')
                                <div class="alert alert-danger alert-dismissible fade show " role="alert">
                                    <strong>Erreur !</strong> {{$message}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                            @enderror 
                        </div>
                    
                        <div class="col-sm-4">
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Modèle</label>
                                <div class="col-sm-9">
                                    <select onchange='Check(this.value , "selectModel" , "inputmodel");' class="form-control" id='selectModel' name='model' >
                                       @foreach($model as $member)
                                        <option value={{ $member['id_model'] }} >  {{ $member['cod_model'] }} </option>
                                        @endforeach
                                        <option value="0">Autre</option>
                                    </select>
                                    <input type="text" name="new_model" id="inputmodel" style='display:none;' class="form-control" placeholder="Ajouter un nouveau modéle "/>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Marque</label>
                                <div class="col-sm-9">
                                    <select onchange='Check(this.value , "selectMarque" , "inputMarque");' class="form-control" id='selectMarque' name='marque'>
                                           @foreach($marque as $member)
                                            <option value={{ $member['id_marque'] }} >  {{ $member['cod_marque'] }} </option>
                                            @endforeach
                                            <option value="0">Autre</option>
                                    </select>
                                    <input type="text"  id="inputMarque" style='display:none;' class="form-control" placeholder="Ajouter un nouveau modéle " name="new_marque"/>
                                </div>
                            </div>
                        </div>

     
                        <div class="col-sm-4">
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Etat</label>
                                <div class="col-sm-9">
                                    <select  onchange='Check(this.value , "selectEtat" , "inputEtat");' class="form-control" id='selectEtat' name='etat'>
                                        @foreach($etat as $member)
                                        <option value={{ $member['id_etat'] }} >  {{ $member['cod_etat'] }} </option>
                                        @endforeach
                                        <option value="0">Autre</option>
                                           
                                    </select>
                                    <input type="text" name="new_etat" id="inputEtat" style='display:none;' class="form-control" placeholder="Ajouter un nouveau état "/>
                                </div>
                            </div>
                        </div>
     
                      
                        <div class="col-sm-12 d-flex flex-row-reverse mt-3 mb-3" >
                        
                            <button type="submit" class="btn  btn-info m-2" >Confirmer </button>
                      
                         </div>
                    </form>
                    </div>
              
                    <div class="card-footer bg-c-green" ></div>
                </div>
            </div>
        </div>
 

<script src="js/plugins/jquery.min.js"></script>
<script type="text/javascript">

        function Check(val , id1 , id2 ){
            var select=document.getElementById(id1);
            var input=document.getElementById(id2);
            if(val== 0 ) {
            input.style.display='block';
            select.remove() ;  }

            else  {
            input.remove();
            }
        }


</script> 
   

</x-app-layout>