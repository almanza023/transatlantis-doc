@extends('theme.app')
@section('titulo', 'Listado de Categorias de Productos')
@section('extra-css')
@stop
@section('content')
<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading ">
					<h2 class="text-center ">
						MODULO DE DEPENDENCIAS
					</h2>
					<a href="#modalCreate" data-toggle="modal"
						class="btn btn-primary"><i data-toggle="tooltip" data-placement="top" title=""
							data-original-title="Crear nuevo registro" class="fa fa-save"></i> CREAR NUEVO</a>
				</div>
				<div class="panel-body" >
					<div class="table-responsive" >
						
							<table class="table js-basic-example dataTable"  style="width:100%">
								<thead>
									<tr>
										<th>N°</th>
										<th>Categoria</th>
										<th>Descripcion</th>
										<th>Accion</th>
									</tr>
								</thead>
								
								<tbody>
									@foreach($dependences as $dependence)
									<tr>
										<td>{{$loop->iteration}}</td>
										<td>{{$dependence->name}}</td>
										<td>{{$dependence->description}}</td>
										<td class="text-center">
											<a href="#modalEdit" data-toggle="modal" data-id="{{$dependence->id_dependence}}" data-name="{{$dependence->name}}"
												data-description="{{$dependence->description}}"
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

@include('modals.modal_create_dependence')
@include('modals.modal_edit_dependence')
@stop
@section('extra-scripts')
<script src="{{ asset('js/datatable.js') }}"></script>
<script src="{{ asset('js/dependence.js') }}"></script>
@if (session()->has('success'))
<script type="text/javascript">
	success('{{ session('success') }}');
</script>
@endif


@stop