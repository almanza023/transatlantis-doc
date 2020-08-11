@extends('theme.app')
@section('titulo', 'MODULO INFORMACION DE LA EMPRESA')
@section('extra-css')
@stop
@section('content')
<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading ">
					<h2 class="text-center ">
						MODULO INFORMACIÓN DE LA EMPRESA
					</h2>					
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
							<thead>
								<tr>
									<th>#</th>		
									<th>Nit</th>
									<th>Nombre</th>
									<th>Teléfono</th>
									<th>Correo</th>
									<th>Dirección</th>
									<th>Acciones</th>
								</tr>
							</thead>
							
							<tbody>
								@foreach($companies as $company)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$company->nit}}</td>	
									<td>{{$company->name}}</td>									
									<td>{{$company->phone}}</td>									
									<td>{{$company->email}}</td>									
									<td>{{$company->address}}</td>									
									<td class="text-center">
										<a href="#modalEdit" data-toggle="modal" data-id="{{$company->id}}" 
											data-name="{{$company->name}}" data-nit="{{$company->nit}}" data-phone="{{$company->phone}}"
											data-email="{{$company->email}}" data-address="{{$company->address}}"
											class=""> <img src="{{ asset('theme/images/edit.png') }}" alt="Editar" width="25px" height="25px" class="img-rounded ">
										</a>
									</td>

								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>


@include('modals.modal_edit_company')
@stop
@section('extra-scripts')
<script src="{{ asset('js/datatable.js') }}"></script>
<script src="{{ asset('js/company.js') }}"></script>
@if (session()->has('success'))
<script type="text/javascript">
	success('{{ session('success') }}');
</script>
@endif


@stop