<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Registroalumno;

class Registroalumnos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $user_id, $taller_id;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.registroalumnos.view', [
            'registroalumnos' => Registroalumno::latest()
						->orWhere('user_id', 'LIKE', $keyWord)
						->orWhere('taller_id', 'LIKE', $keyWord)
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
		$this->user_id = null;
		$this->taller_id = null;
    }

    public function store()
    {
        $this->validate([
        ]);

        Registroalumno::create([ 
			'user_id' => $this-> user_id,
			'taller_id' => $this-> taller_id
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Registroalumno Successfully created.');
    }

    public function edit($id)
    {
        $record = Registroalumno::findOrFail($id);

        $this->selected_id = $id; 
		$this->user_id = $record-> user_id;
		$this->taller_id = $record-> taller_id;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
        ]);

        if ($this->selected_id) {
			$record = Registroalumno::find($this->selected_id);
            $record->update([ 
			'user_id' => $this-> user_id,
			'taller_id' => $this-> taller_id
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Registroalumno Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Registroalumno::where('id', $id);
            $record->delete();
        }
    }
}
