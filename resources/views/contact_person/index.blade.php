@extends('theme.app')
@section('titulo', 'MODULO CONTACTOS')
@section('extra-css')
@stop
@section('content')
<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading ">
					<h2 class="text-center ">
						MÓDULO CONTACTOS
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
									<th>Dirección</th>
									<th>Acciones</th>
								</tr>
							</thead>
							
							<tbody>
								@foreach($contacts as $contact)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$contact->first_name. ' '.$contact->last_name}}</td>	
									<td>{{$contact->phone}}</td>									
									<td>{{$contact->email}}</td>									
									<td>{{$contact->address}}</td>									
									<td class="text-center">
										<a href="#modalEdit" data-toggle="modal" data-id="{{$contact->id_contact_person}}" 
											data-firstname="{{$contact->first_name}}" data-lastname="{{$contact->last_name}}" data-phone="{{$contact->phone}}"
											data-email="{{$contact->email}}" data-address="{{$contact->address}}"
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
@include('modals.modal_create_contact')
@include('modals.modal_edit_contact')
@stop
@section('extra-scripts')
<script src="{{ asset('js/datatable.js') }}"></script>
<script src="{{ asset('js/contact.js') }}"></script>
@if (session()->has('success'))
<script type="text/javascript">
	success('{{ session('success') }}');
</script>
@endif


@stop