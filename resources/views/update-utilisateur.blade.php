@extends('layouts.app')

@section('contenu')

	<div class=" col-md-12">

    	<div class="card card-primary">
            <div class="card-header">
            	<h3 class="card-title">Modification d'un utilisateur</h3>
            </div>
          	<!-- /.card-header -->
          	<!-- form start -->          	

          	{!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
                <div class="card-body">

                   <div class="row">
                   		<div class="col-sm-4">
                   			<div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
		                    	<label for="exampleInputEmail1">Nom</label>
		                    	{!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Nom', 'type'=>'text']) !!}
                  				{!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
	                    	</div>
                   		</div>
                   		<div class="col-sm-5">
		                   	<div class="form-group {!! $errors->has('prenom') ? 'has-error' : '' !!}">
		                    	<label for="exampleInputPassword1">Prénoms</label>
		                    	
		                    	{!! Form::text('prenom', null, ['class' => 'form-control', 'placeholder' => 'Prénoms', 'type'=>'text']) !!}
                  				{!! $errors->first('prenom', '<small class="help-block">:message</small>') !!}
		                   	</div>
				   		</div>
				   		<div class="col-sm-3">
		                   	<div class="form-group {!! $errors->has('fonction_id') ? 'has-error' : '' !!}">
		                    	<label for="exampleInputPassword1">Fonction</label>
		                    	
		                    	{!! Form::select('fonction_id', [
                      				'1' => 'Secrétaire',
                      				'2' => 'Chef de cabinet', 
                      				'3' => 'Chef de cabinet adjoint',
                      				'4' => 'Ministre'], null, ['class' => 'form-control', 'placeholder' => 'Fonction', 'type'=>'select']) !!}
                  				{!! $errors->first('fonction_id', '<small class="help-block">:message</small>') !!}
		                   	</div>
				   		</div>
                   </div>
                   
                    <div class="row">
                   	
						<div class="col-sm-6">
							<div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
		                    	<label for="exampleInputEmail1">E-mail</label>
		                    	
		                    	{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'E-mail', 'type'=>'email']) !!}
                  				{!! $errors->first('email', '<small class="help-block">:message</small>') !!}
		                    </div>
		                </div>
		                <div class="col-sm-6">
							<div class="form-group {!! $errors->has('password') ? 'has-error' : '' !!}">
		                    	<label for="exampleInputEmail1">Mot de passe</label>
		                    	
		                    	{!! Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'Mot de passe', 'type'=>'text']) !!}
                  				{!! $errors->first('password', '<small class="help-block">:message</small>') !!}
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