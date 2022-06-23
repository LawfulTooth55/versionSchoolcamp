<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Event;

class Events extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $ID, $nomevento, $descripcion, $status;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.events.view', [
            'events' => Event::latest()
						->orWhere('nomevento', 'LIKE', $keyWord)
						->orWhere('descripcion', 'LIKE', $keyWord)
						->orWhere('status', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		
		$this->nomevento = null;
		$this->descripcion = null;
		$this->status = null;
    }

    public function store()
    {
        $this->validate([
		
		'nomevento' => 'required',
		'descripcion' => 'required',
		'status' => 'required',
        ]);

        Event::create([ 
			
			'nomevento' => $this-> nomevento,
			'descripcion' => $this-> descripcion,
			'status' => $this-> status
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Evento creado.');
    }

    public function edit($id)
    {
        $record = Event::findOrFail($id);

       
        $this->selected_id = $id;
		$this->nomevento = $record-> nomevento;
		$this->descripcion = $record-> descripcion;
		$this->status = $record-> status;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'nomevento' => 'required',
		'descripcion' => 'required',
		'status' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Event::find($this->selected_id);
            $record->update([ 
			'nomevento' => $this-> nomevento,
			'descripcion' => $this-> descripcion,
			'status' => $this-> status
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Evento modificado.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Event::where('id', $id);
            $record->delete();
        }
    }
}
