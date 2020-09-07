@extends('layouts.app')

@section('contenu')
   
    	<div class="col-md-12">
    		@if(session()->has('ok'))
				<div class="alert alert-success alert-dismissible">		{!! session('ok') !!}
				</div>
			@endif
    		<div class="card">
              	<div class="card-header">
                	<h3 class="card-title">Liste des fonctions</h3>
              	</div>
              	<!-- /.card-header -->
              	<div class="card-body">
		            <table id="example1" class="table table-bordered table-striped">
		                <thead>
		                    <tr>
		                		<th>N°</th>
		                		<th>Fonction</th>
		                		<th>Ordre</th>
		                		<th>Créé le</th>
		                		<th>Action</th>
		              		</tr>
		              	</thead>
		              	<tbody>
		              		@foreach ($fonctions as $fonction)
			              		<tr>
			                		<td>{!! $fonction->id !!}</td>
			                		<td>{!! $fonction->nom !!}</td>
			                		<td>{!! $fonction->ordre !!}</td>
			                		<td>{!! $fonction->created_at !!}</td>
			                		<td>
			                			<div class="btn-group" role="group">
    										<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      											Action
    										</button>
    										<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
												{!! link_to_route('fonction.show', 'Voir', [$fonction->id], ['class' => 'btn btn-success btn-block']) !!}
												
												{!! link_to_route('fonction.edit', 'Modifier', [$fonction->id], ['class' => 'btn btn-warning btn-block']) !!}
												
												{!! Form::open(['method' => 'DELETE', 'route' => ['fonction.destroy', $fonction->id]]) !!} 
													{!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cette fonction ?\')']) !!}
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
		                		<th>Fonction</th>
		                		<th>Ordre</th>
		                		<th>Créé le</th>
		                		<th>Action</th>
		              		</tr>
		              	
		              	</tfoot>
		            </table>
              	</div>
              	<!-- /.card-body -->

        	</div>
    	
    		</br>
        	<div style="margin-left: 75%; ">
				{!! link_to_route('fonction.create', 'Enregistrer une nouvelle fonction', [], ['class' => 'btn btn-info']) !!}
        		</br>
        		</br>
        	</div>
        </div>

        
    
@endsection