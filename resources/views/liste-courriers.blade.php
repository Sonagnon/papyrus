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
                	<h3 class="card-title">Liste des courriers</h3>
              	</div>
              	<!-- /.card-header -->
              	<div class="card-body">
		            <table id="example1" class="table table-bordered table-striped">
		                <thead>
		                    <tr>
		                		<th>N°</th>
		                		<th>Référence</th>
		                		<th>Objet</th>
		                		<th>Date d'arrivée</th>
		                		<th>Nom</th>
		                		<th>Action</th>
		              		</tr>
		              	</thead>
		              	<tbody>
		              		@foreach ($documents as $document)
			              		<tr>
			                		<td>{!! $document->id !!}</td>
			                		<td>{!! $document->reference !!}</td>
			                		<td>{!! $document->objet !!}</td>
			                		<td>{!! $document->date !!}</td>
			                		<td>{!! $document->chemin !!}</td>
			                		<td>
			                			<div class="btn-group" role="group">
    										<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      											Action
    										</button>
    										<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
												{!! link_to_route('document.show', 'Voir', [$document->id], ['class' => 'btn btn-success btn-block']) !!}
												
												{!! link_to_route('document.edit', 'Modifier', [$document->id], ['class' => 'btn btn-warning btn-block']) !!}
												
												{!! Form::open(['method' => 'DELETE', 'route' => ['document.destroy', $document->id]]) !!} 
													{!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer ce courrier ?\')']) !!}
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
		                		<th>Référence</th>
		                		<th>Objet</th>
		                		<th>Date d'arrivée</th>
		                		<th>Nom</th>
		                		<th>Action</th>
		              		</tr>
		              	
		              	</tfoot>
		            </table>
              	</div>
              	<!-- /.card-body -->

        	</div>
    	
    		</br>
        	<div style="margin-left: 75%; ">
				{!! link_to_route('document.create', 'Enregistrer un nouveau courrier', [], ['class' => 'btn btn-info']) !!}
        		</br></br>
        	</div>
        </div>
        
    <!--/div-->
@endsection