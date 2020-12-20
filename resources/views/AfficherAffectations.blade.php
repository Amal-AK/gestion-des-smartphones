
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
                            <li class="breadcrumb-item"><a href="#">Affectations</a></li>
							<li class="breadcrumb-item"><a href="#">Afficher</a></li>
						
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- [ breadcrumb ] end -->
        <div class="row">
			<!-- [ progress ] start -->
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header d-flex justify-content-between">
                        <h5 class="mt-2">Liste des affectations des smartphones </h5>
                        <button class="btn  btn-success"  data-toggle="modal" data-target="#Modal" >Voir plus</button>
					</div>
					<div class="card-body">
                    <table class="table table-bordered table-striped yajra-datatable">
                        <thead>
                            <tr>
                                <th>N</th>
                                <th>IMMO</th>
                                <th>nom</th>
                                <th>prénom </th>
                                <th>matricule</th>
                                <th>date d'attribution</th>
                                <th>recupéré par </th>
                                <th>remis par</th>
                           
                            </tr>
                        </thead><tbody>
                        </tbody>
                     </table>
                   
					</div>
                    <div class="card-footer bg-c-green" ></div>
                </div>
            </div>
        </div>

<!-- [ modal ] start -->
			<div class="col-sm-12">
			
						<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Voir plus de détails </h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <form method='POST' action="VoirAffectation">
                                    @csrf
									<div class="modal-body">
											<div class="form-group">
												<label for="recipient-name" class="col-form-label">Immo du smartphone</label>
												<input type="number" class="form-control" required name="immo">
											</div>
											<div class="form-group">
												<label for="recipient-name" class="col-form-label">Matricule de l'intervenant</label>
												<input type="number" class="form-control" required name="matricule">
											</div>
									
									</div>
									<div class="modal-footer m-2">
										<button type="button" class="btn  btn-secondary" data-dismiss="modal">Fermer</button>
										<button type="submit" class="btn  btn-primary">Confirmer</button>
                                    </div>
                                    </form>
								</div>
							</div>
						</div>
			
			</div>
<!-- [ modal ] end -->


    <script src="js/plugins/jquery.min.js"></script>
    <script src="js/plugins/jquery.dataTables.min.js" defer></script>
    <script src="js/plugins/dataTables.bootstrap4.min.js"> </script>
    <script type="text/javascript">
    

  $(function () {
    
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('affectations.list') }}",
        columns: [
            {data: 'DT_RowIndex' , orderable: true,searchable: true },
            {data: 'immo' , orderable: true,searchable: true},
            {data: 'NOM', orderable: true,searchable: true},
            {data: 'PRENOM' ,  orderable: true,searchable: true},
            {data: 'MATRICULE' , orderable: true,searchable: true},
            {data: 'date_attrib', orderable: true,searchable: true},
            {data: 'recupere_par',orderable: true,searchable: true},
            {data: 'remis_par',orderable: true,searchable: true},
           
        ]
    });
  
   
    
  });
</script>

</x-app-layout>