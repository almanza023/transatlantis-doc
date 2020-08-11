@extends('theme.app')
@section('titulo', 'MODULO TIPO DE CLIENTES')
@section('extra-css')
@stop
@section('content')
<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading ">|
					<h2 class="text-center ">
						MODULO TIPOS DE CLIENTES
					</h2>
					<a href="#modalCreate" data-toggle="modal"
						class="btn btn-primary"><i data-toggle="tooltip" data-placement="top" title=""
							data-original-title="Crear nuevo registro" class="fa fa-save"></i> CREAR NUEVO</a>
				</div>
				<div class="panel-body" style="width: 80%">
					<div class="table-responsive">
						<center>
							<table class="table js-basic-example dataTable" >
								<thead>
									<tr>
										<th>#</th>									
										<th>Descripción</th>
										<th>Acciones</th>
									</tr>
								</thead>
								
								<tbody>
									@foreach($types as $type)
									<tr>
										<td>{{$loop->iteration}}</td>
										<td>{{$type->description}}</td>									
										<td class="text-center">
											<a href="#modalEdit" data-toggle="modal" data-id="{{$type->id_type_customer}}" 
												data-description="{{$type->description}}"
												class=""> <img src="{{ asset('theme/images/edit.png') }}" alt="Editar" width="25px" height="25px" class="img-rounded ">
											</a>
										</td>
	
									</tr>
									@endforeach
								</tbody>
							</table>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>

@include('modals.modal_create_type_customer')
@include('modals.modal_edit_type_customer')
@stop
@section('extra-scripts')
<script src="{{ asset('js/datatable.js') }}"></script>
<script src="{{ asset('js/type_customer.js') }}"></script>
@if (session()->has('success'))
<script type="text/javascript">
	success('{{ session('success') }}');
</script>
@endif


@stop