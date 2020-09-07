@extends('layouts.app')

@section('contenu')

	<div class=" col-md-12">

    	<div class="card card-primary">
            <div class="card-header">
            	<h3 class="card-title">Modification de fonction</h3>
            </div>
          	<!-- /.card-header -->
          	<!-- form start -->          	

          	{!! Form::model($fonction, ['route' => ['fonction.update', $fonction->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
                <div class="card-body">

                   <div class="row">
                   		<div class="col-sm-6">
                   			<div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
		                    	<label for="exampleInputEmail1">Titre de la fonction</label>
		                    	{!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Titre de la fonction', 'type'=>'text']) !!}
                  				{!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
	                    	</div>
                   		</div>
                   		<div class="col-sm-6">
		                   	<div class="form-group {!! $errors->has('ordre') ? 'has-error' : '' !!}">
		                    	<label for="exampleInputPassword1">Ordre de la fonction</label>
		                    	
		                    	{!! Form::select('ordre', [
                      				'1' => 'Quatrième niveau',
                      				'2' => 'Troisième niveau', 
                      				'3' => 'Deuxième niveau ',
                      				'4' => 'Premier niveau'], null, ['class' => 'form-control', 'placeholder' => 'Ordre de la fonction', 'type'=>'select']) !!}
                  				{!! $errors->first('ordre', '<small class="help-block">:message</small>') !!}
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