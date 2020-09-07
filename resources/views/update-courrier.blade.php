@extends('layouts.app')

@section('contenu')

	<div class=" col-md-12">

    	<div class="card card-primary">
            <div class="card-header">
            	<h3 class="card-title">Modification de courrier</h3>
            </div>
          	<!-- /.card-header -->
          	<!-- form start -->          	

          	{!! Form::model($document, ['route' => ['document.update', $document->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
                <div class="card-body">

                   <div class="row">
                   		<div class="col-sm-6">
                   			<div class="form-group {!! $errors->has('objet') ? 'has-error' : '' !!}">
		                    	<label for="exampleInputEmail1">Objet</label>
		                    	{!! Form::text('objet', null, ['class' => 'form-control', 'placeholder' => 'Objet du courrier', 'type'=>'text']) !!}
                  				{!! $errors->first('objet', '<small class="help-block">:message</small>') !!}
	                    	</div>
                   		</div>
                   		<div class="col-sm-6">
		                   	<div class="form-group {!! $errors->has('reference') ? 'has-error' : '' !!}">
		                    	<label for="exampleInputPassword1">Référence</label>
		                    	
		                    	{!! Form::text('reference', null, ['class' => 'form-control', 'placeholder' => 'Référence courrier', 'type'=>'text']) !!}
                  				{!! $errors->first('reference', '<small class="help-block">:message</small>') !!}
		                   	</div>
				   		</div>
                   </div>
                   
                    <div class="row">
                   	
						<div class="col-sm-6">
							<div class="form-group {!! $errors->has('date') ? 'has-error' : '' !!}">
		                    	<label for="exampleInputEmail1">Date</label>
		                    	
		                    	{!! Form::date('date', null, ['class' => 'form-control', 'placeholder' => 'Date', 'type'=>'date']) !!}
                  				{!! $errors->first('date', '<small class="help-block">:message</small>') !!}
		                    </div>
		                </div>
		                <div class="col-sm-6">
		                   	
	                    	<div class="form-group {!! $errors->has('chemin') ? 'has-error' : '' !!}">
			                    <label for="exampleInputFile">Fichier</label>
			                    <div class="input-group">
			                        {!! Form::file('chemin', null, ['class' =>'custom-file-input', 'placeholder' => 'Choisir le fichier', 'type'=>'file']) !!}
                  					{!! $errors->first('chemin', '<small class="help-block">:message</small>') !!}
			                        
			                      </div>
			                      
			                    </div>
                  			</div>
                  		</div>
					</div>
				
				</div>
                   
        
            <!-- /.card-body -->

	            <div class="card-footer" style="float: right;">   
	            	{!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}            
	            </div>
		{!! Form::close() !!}

          		

          	
        </div>
	</div>
	
		
@endsection