@extends('theme.app')
@section('titulo', 'MODULO GESTIÓN DOCUMENTAL')
@section('extra-css')
@stop
@section('content')
<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading ">
					<h2 class="text-center ">
						MÓDULO GESTIÓN DOCUMENTAL
					</h2>
					
					<a href="{{ route('gen-documents.create') }}" 
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
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

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