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
                            <li class="breadcrumb-item"><a href="/dashboard"><i class="feather icon-home"></i></a></li>
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
                    <table class="table table-bordered table-striped yajra-datatable">
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
                        </thead><tbody>
                        </tbody>
                     </table>
					</div>
                    <div class="card-footer bg-c-blue" ></div>
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
        responsive: true,
        serverSide: true,
        ajax: "{{ route('smartphone.list') }}",
        columns: [
            {data: 'DT_RowIndex', orderable: true, searchable: true},
            {data: 'cod_marque', orderable: true, searchable: true},
            {data: 'cod_model', norderable: true, searchable: true},
            {data: 'n_serie1', orderable: true, searchable: true},
            {data: 'n_serie2', orderable: true, searchable: true},
            {data: 'immo', orderable: true, searchable: true},
            {data: 'affecte', orderable: true, searchable: true},
            {data: 'cod_etat', orderable: true, searchable: true},
            {data: 'action'},
        ]
    });
  
  } );

  $('.yajra-datatable').on('click', '.delete', function (e) { 
    e.preventDefault();
    var id = this.value ; 
    var choice = confirm(this.getAttribute('data-confirm'));

    if(choice){
       this.parentElement.parentElement.parentElement.remove(); 
       $.ajax({
        url: "removeSmartphone", 
        type : 'GET',
        dataType : 'json' , 
        data: {  'id': id }
    });
    } 
    
 } );

</script>

</x-app-layout>