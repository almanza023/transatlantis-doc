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
						SUBIDA DE DOCUMENTOS
					</h2>
					
				
				</div>
				<div class="panel-body">
                    
                   <form action="{{ route('gen-documents.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row-group">
                        <label for="">Fecha</label>
                      <input type="date" class="form-control" name="date" id="date">
                    </div>
                    
                    <div class="form-row-group">
                        <label for="">Documentos</label>
                        <select name="id_document" id="id_document" class="form-control">
                            @foreach ($documents as $item)
                                <option value="{{ $item->id_document }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-row-group">
                        <label for="">Estado Documento</label>
                        <select name="id_status_document" id="id_status_document" class="form-control">
                            @foreach ($status_documents as $item)
                                <option value="{{ $item->id_status_document }}">{{ $item->description }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-row-group">
                        <label for="">Tipo de Obtención</label>
                        <select name="id_type_obtainment" id="id_type_obtainment" class="form-control">
                            @foreach ($type_obtainments as $item)
                                <option value="{{ $item->id_type_obtainment }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-row-group">
                        <label for="">Destino</label>
                        <select name="id_destination" id="id_destination" class="form-control">
                            @foreach ($destinations as $item)
                                <option value="{{ $item->id_destination }}">{{ $item->full_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-row-group">
                        <label for="">Descripción</label>
                       <textarea name="description" id="description" cols="2" rows="2" class="form-control"></textarea>
                    </div>

                    <div class="form-row-group">
                        <label for="">Archivos</label><br>
                        <input name="file" type="file"  class="form-control" />
                    </div>
                  
                    <div class="form-row-group">
                        <br>
                      
                        <button type="submit" class="btn btn-success" id="submit">GUARDAR</button>
                    </div>
                    
                  
                   </form>
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

<script>
    Dropzone.options.myDropzone = {
        autoProcessQueue: false,
        uploadMultiple: true,
        maxFilezise: 10,
        maxFiles: 2,
        
        init: function() {
            var submitBtn = document.querySelector("#submit");
            myDropzone = this;
            
            submitBtn.addEventListener("click", function(e){
                e.preventDefault();
                e.stopPropagation();
                myDropzone.processQueue();
            });
            this.on("addedfile", function(file) {
                alert("file uploaded");
            });
            
            this.on("complete", function(file) {
                myDropzone.removeFile(file);
            });

            this.on("success", 
                myDropzone.processQueue.bind(myDropzone)
            );
        }
    };
</script>
@endif


@stop