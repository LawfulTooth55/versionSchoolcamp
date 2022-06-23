<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Editar Taller</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
            <div class="form-group">
                <label for="nomtaller"></label>
                <input wire:model="nomtaller" type="text" class="form-control" id="nomtaller" placeholder="Nombre taller">@error('nomtaller') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="cupo"></label>
                <input wire:model="cupo" type="text" class="form-control" id="cupo" placeholder="Cupo">@error('cupo') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn" data-dismiss="modal">Salir</button>
                <button type="button" wire:click.prevent="update()" class="btn" data-dismiss="modal">Guardar</button>
            </div>
       </div>
    </div>
</div>
