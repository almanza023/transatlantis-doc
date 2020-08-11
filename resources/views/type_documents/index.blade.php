@extends('theme.app')
@section('titulo', 'TIPO DE DOCUMENTOS')
@section('extra-css')
@stop
@section('content')
<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading ">
					<h2 class="text-center ">
						MODULO TIPO DE DOCUMENTOS
					</h2>
					<a href="#modalCreateDependence" data-toggle="modal"
						class="btn btn-primary"><i data-toggle="tooltip" data-placement="top" title=""
							data-original-title="Crear nuevo registro" class="fa fa-save"></i> CREAR NUEVO</a>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
							<thead>
								<tr>
									<th>#</th>
									<th>Descripcion</th>
									<th>Accion</th>
								</tr>
							</thead>
							
							<tbody>
								@foreach($type_documents as $type)
								<tr>
									<td>{{$loop->iteration}}</td>									
									<td>{{$type->description}}</td>
									<td class="text-center">
										<a href="#modalEditTypeDocument" data-toggle="modal" data-id="{{$type->id_type_document}}" 
											data-description="{{$type->description}}"
											class=""> <img src="{{ asset('theme/images/edit.png') }}" alt="Editar" width="25px" height="25px">
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

@include('modals.modal_create_type_document')
@include('modals.modal_edit_type_document')
@stop
@section('extra-scripts')
<script src="{{ asset('js/datatable.js') }}"></script>
<script src="{{ asset('js/type_document.js') }}"></script>
@if (session()->has('success'))
<script type="text/javascript">
	success('{{ session('success') }}');
</script>
@endif


@stop