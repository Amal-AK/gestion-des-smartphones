<x-app-layout>
	<!-- [ breadcrumb ] start -->
    <div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10">Smartphones</h5>
						</div>
						<ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Smartphones</a></li>
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
					<div class="card-header">
						<h5>Liste des smartphones existants dans la base de données </h5>
					</div>
					<div class="card-body">
          
                    <table class="table table-bordered yajra-datatable">
                        <thead>
                            <tr>
                                <th>N</th>
                                <th>Marque</th>
                                <th>Modèle</th>
                                <th>N série 1 </th>
                                <th>N série 2</th>
                                <th>IMMO</th>
                                <th>Affecté?</th>
                                <th>Etat</th>
                                <th>Action</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                     </table>
					</div>
                </div>
            </div>
        </div>


    <script src="js/plugins/jquery.min.js"></script>
    <script src="js/plugins/jquery.dataTables.min.js" defer></script>
    <script src="js/plugins/dataTables.bootstrap4.min.js"> </script>
    <script type="text/javascript">
    

  $(function () {
    
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('smartphone.list') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'cod_marque', name: 'Marque'},
            {data: 'cod_model', name: 'model'},
            {data: 'n_serie1', name: 'serie2'},
            {data: 'n_serie2', name: 'serie1'},
            {data: 'immo', name: 'immo'},
            {data: 'affecte', name: 'immo'},
            {data: 'cod_etat', name: 'immo'},
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ]
    });
  
   
    
  });
</script>

</x-app-layout>