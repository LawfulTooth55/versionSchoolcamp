@section('title', __('Talleres'))
<section class="py-32">
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i></i>
								Talleres Activos </h4>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Buscar Taller">
						</div>
						@can("EditarTalleres")
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
							<i class="fa fa-plus"></i> Añadir Taller
						</div>
						@endcan
					</div>
				</div>

				<div class="card-body">
					@include('livewire.tallers.create')

					@include('livewire.tallers.update')
					<div class="table-responsive">
						<table class="table table-bordered table-sm">
							<thead class="thead">
								<tr>
									<td>#</td>
									<th>Taller</th>
									@Auth()
									@can("EditarTalleres")
									<th>Editar talleres</th>
									@else
									<th>Acciones</th>
									@endcan
									@endauth()

								</tr>
							</thead>
							<tbody>
								@foreach($tallers as $row)
								<tr>
									<td>{{ $loop->iteration }}</td>
									<td>{{ $row->nomtaller }}</td>
									@Auth()
									@can("EditarTalleres")

									@else
									<td>
										<div class="btn-group">
											<button type="button" class="btn btn-sm  black-text"><a href="{{ url('/registroalumno/create') }}">
													Registrate
												</a>
											</button>
										</div>
									</td>
									@endcan
									@endauth()



									@can("EditarTalleres")
									<td width="90">
										<div class="btn-group">
											<button type="button" class="btn btn-sm dropdown-toggle black-text" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Acciones
											</button>
											<div class="dropdown-menu dropdown-menu-right">
												<a data-toggle="modal" data-target="#updateModal" href="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Editar </a>
												<a class="dropdown-item" onclick="confirm('Confirm Delete Taller id {{$row->id}}? \nDeleted Tallers cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Eliminar </a>
											</div>
										</div>
									</td>
									@endcan
									@endforeach
							</tbody>
						</table>
						{{ $tallers->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>