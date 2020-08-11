@extends('theme.app')
@section('titulo', 'MODULO DESTINO')
@section('extra-css')
@stop
@section('content')
<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading ">
					<h2 class="text-center ">
						MÓDULO DESTINOS
					</h2>
					
					<a href="#modalCreate" data-toggle="modal"
						class="btn btn-primary"><i data-toggle="tooltip" data-placement="top" title=""
							data-original-title="Crear nuevo registro" class="fa fa-save"></i> CREAR NUEVO</a>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table js-basic-example dataTable">
							<thead>
								<tr>
									<th>N°</th>		
									<th>Nombre</th>
									<th>Teléfono</th>
									<th>Correo</th>
									<th>Titúlo</th>
									<th>Acciones</th>
								</tr>
							</thead>
							
							<tbody>
								@foreach($destinations as $item)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$item->full_name}}</td>	
									<td>{{$item->phone}}</td>									
									<td>{{$item->email}}</td>									
									<td>{{$item->title->name}}</td>									
									<td class="text-center">
										<a href="#modalEdit" data-toggle="modal" data-id="{{$item->id_destination}}" 
											data-firstname="{{$item->first_name}}" data-lastname="{{$item->last_name}}" data-phone="{{$item->phone}}"
											data-email="{{$item->email}}" data-address="{{$item->address}}" data-nid="{{$item->nid}}" data-title="{{$item->id_title}}"
											data-type="{{$item->id_type_customer}}" data-dep="{{$item->municipality->id_departament}}"  data-mun="{{$item->id_municipality}}" 
											data-des="{{$item->description}}" 
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
@include('modals.modal_create_destination')
@include('modals.modal_edit_destination')
@stop
@section('extra-scripts')
<script src="{{ asset('js/datatable.js') }}"></script>
<script src="{{ asset('js/destination.js') }}"></script>
@if (session()->has('success'))
<script type="text/javascript">
	success('{{ session('success') }}');
</script>
@endif


@stop