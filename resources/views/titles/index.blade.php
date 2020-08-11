@extends('theme.app')
@section('titulo', 'MODULO DE TITULOS')
@section('extra-css')
@stop
@section('content')
<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading ">
					<h2 class="text-center ">
						MODULO DE TITULOS
					</h2>
					<a href="#modalCreate" data-toggle="modal"
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
									<th>Descripción</th>
									<th>Acciones</th>
								</tr>
							</thead>
							
							<tbody>
								@foreach($titles as $title)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$title->name}}</td>	
									<td>{{$title->description}}</td>									
									<td class="text-center">
										<a href="#modalEdit" data-toggle="modal" data-id="{{$title->id_title}}" 
											data-name="{{$title->name}}" data-description="{{$title->description}}"
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

@include('modals.modal_create_title')
@include('modals.modal_edit_title')
@stop
@section('extra-scripts')
<script src="{{ asset('js/datatable.js') }}"></script>
<script src="{{ asset('js/title.js') }}"></script>
@if (session()->has('success'))
<script type="text/javascript">
	success('{{ session('success') }}');
</script>
@endif


@stop