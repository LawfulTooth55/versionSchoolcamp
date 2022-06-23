@section('title', __('Events'))
<section class="py-32">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<div style="display: flex; justify-content: space-between; align-items: center;">
							<div class="float-left">
								<h4><i></i>
									Lista de Eventos </h4>
							</div>
							@if (session()->has('message'))
							<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
							@endif
							<div>
								<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Buscar Eventos">
							</div>
							@can("EditarTalleres")
							<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">

								<i class="fa fa-plus"></i> Añadir Eventos

							</div>
							@endcan
						</div>
					</div>

					<div class="card-body">
						@include('livewire.events.create')
						@include('livewire.events.update')
						<div class="table-responsive">
							<table class="table table-bordered table-sm">
								<thead class="thead">
									<tr>
										<td>#</td>
										<th>Evento</th>
										<th>Descripción</th>
										@can("EditarTalleres")
										<th>Status</th>
										<td>Acciones</td>
										@endcan
									</tr>
								</thead>
								<tbody>
									@foreach($events as $row)
									<tr>
										<td>{{ $loop->iteration }}</td>

										<td>{{ $row->nomevento }}</td>
										<td>{{ $row->descripcion }}</td>
										@can("EditarTalleres")
										<td>{{ $row->status }}</td>

										<td width="90">
											<div class="btn-group">
												<button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													Actions
												</button>
												<div class="dropdown-menu dropdown-menu-right">
													<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Editar </a>
													<a class="dropdown-item" onclick="confirm('Confirm Delete Event id {{$row->id}}? \nDeleted Events cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Eliminar </a>
												</div>
											</div>
										</td>
										@endcan
										@endforeach
								</tbody>
							</table>
							{{ $events->links() }}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>