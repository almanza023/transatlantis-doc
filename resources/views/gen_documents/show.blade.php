@extends('theme.app')
@section('titulo', 'MODULO GESTIÓN DOCUMENTAL')
@section('extra-css')
<link rel="stylesheet" href="{{ asset('theme/lib/dropzone/dropzone.css') }}">
<link rel="stylesheet" href="{{ asset('theme/lib/dropzone/basic.css') }}">
@stop
@section('content')
<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading ">
					<h2 class="text-center ">
						DETALLLES DE DOCUMENTOS
					</h2>
					
				
				</div>
				<div class="panel-body">
                 <table class="table table-bordered table-responsive">
                <tr>
                    <th>Destino</th>
                    <th>{{ $gendocument->destination->full_name }}</th>
                </tr>    
                <tr>
                    <th>Estado</th>
                    <th>{{ $gendocument->status_document->description }}</th>
                </tr> 
                <tr>
                    <th>Documento</th>
                    <th>{{ $gendocument->document->name }}</th>
                </tr>  
                <tr>
                    <th>Tipo Obtención</th>
                    <th>{{ $gendocument->type_obtainment->name }}</th>
                </tr>   
                <tr>
                    <td colspan="2">
                       <center>
                        {!! QrCode::size(250)->generate($gendocument->id_gen_document); !!}
                       </center>
                    </td>
                </tr>
                </table>   
                 
				</div>
			</div>
		</div>
	</div>

@stop
@section('extra-scripts')
<script src="{{ asset('theme/lib/dropzone/dropzone.js') }}"></script>
<script src="{{ asset('js/destination.js') }}"></script>
@if (session()->has('success'))
<script type="text/javascript">
	success('{{ session('success') }}');
</script>


@endif


@stop