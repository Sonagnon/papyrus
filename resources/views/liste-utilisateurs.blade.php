@extends('layouts.app')

@section('contenu')
    <!--div class="row"-->
    	<div class="col-md-12">
    		@if(session()->has('ok'))
			<div class="alert alert-success alert-dismissible">{!! session('ok') !!}
			</div>
			@endif
    		<div class="card">
              	<div class="card-header">
                	<h3 class="card-title">Liste des utilisateurs</h3>
              	</div>
              	<!-- /.card-header -->
              	<div class="card-body">
		            <table id="example1" class="table table-bordered table-striped">
		                <thead>
		                    <tr>
		                		<th>N°</th>
		                		<th>Nom</th>
		                		<th>Prénom</th>
		                		<th>E-mail</th>
		                		<th>Fonction</th>
		                		<th>Action</th>
		              		</tr>
		              	</thead>
		              	<tbody>
		              		@foreach ($users as $user)
			              		<tr>
			                		<td>{!! $user->id !!}</td>
			                		<td>{!! $user->nom !!}</td>
			                		<td>{!! $user->prenom !!}</td>
			                		<td>{!! $user->email !!}</td>
			                		<td>{!! $user->fonction_id !!}</td>
			                		<td>
			                			<div class="btn-group" role="group">
    										<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      											Action
    										</button>
    										<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
												{!! link_to_route('user.show', 'Voir', [$user->id], ['class' => 'btn btn-success btn-block']) !!}
												
												{!! link_to_route('user.edit', 'Modifier', [$user->id], ['class' => 'btn btn-warning btn-block']) !!}
												
												{!! Form::open(['method' => 'DELETE', 'route' => ['user.destroy', $user->id]]) !!} 
													{!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
												{!! Form::close() !!}
											</div>
										</div>	
									</td>
			              		</tr>
		              		@endforeach
		              
		              	</tbody>
		              	<tfoot>
		               
		                    <tr>
		                		<th>N°</th>
		                		<th>Nom</th>
		                		<th>Prénom</th>
		                		<th>E-mail</th>
		                		<th>Fonction</th>
		                		<th>Action</th>
		              		</tr>
		              	
		              	</tfoot>
		            </table>
              	</div>
              	<!-- /.card-body -->

        	</div>
    	
    		</br>
        	<div style="margin-left: 75%; ">
				{!! link_to_route('user.create', 'Enregistrer un nouvel utilisateur', [], ['class' => 'btn btn-info']) !!}
        		</br></br>
        	</div>
        </div>
        
    <!--/div-->
@endsection