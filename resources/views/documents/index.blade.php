@extends('theme.app')
@section('titulo', 'MODULO DOCUMENTOS')
@section('extra-css')
@stop
@section('content')
<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading ">
					<h2 class="text-center ">
						MODULO DE DOCUMENTOS
					</h2>
					<a href="#modalCreateDocument" data-toggle="modal"
						class="btn btn-primary"><i data-toggle="tooltip" data-placement="top" title=""
							data-original-title="Crear nuevo registro" class="fa fa-save"></i> CREAR NUEVO</a>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
							<thead>
								<tr>
									<th>#</th>
									<th>Nombre</th>
									<th>Versión</th>
									<th>Fecha</th>
									<th>Acciones</th>
								</tr>
							</thead>
							
							<tbody>
								@foreach($documents as $document)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$document->name}}</td>
									<td>{{$document->version}}</td>
									<td>{{$document->date}}</td>
									<td class="text-center">
										<a href="#modalEditDocument" data-toggle="modal" data-id="{{$document->id_document}}" data-name="{{$document->name}}"
											data-version="{{$document->version}}" data-date="{{$document->date}}" data-tipo="{{$document->id_type_document}}"
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

@include('modals.modal_create_document')
@include('modals.modal_edit_document')
@stop
@section('extra-scripts')
<script src="{{ asset('js/datatable.js') }}"></script>
<script src="{{ asset('js/document.js') }}"></script>
@if (session()->has('success'))
<script type="text/javascript">
	success('{{ session('success') }}');
</script>
@endif


@stop