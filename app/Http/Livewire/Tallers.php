<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Taller;

class Tallers extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nomtaller, $cupo;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.tallers.view', [
            'tallers' => Taller::latest()
						->orWhere('nomtaller', 'LIKE', $keyWord)
						
						->orWhere('cupo', 'LIKE', $keyWord)
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
		$this->nomtaller = null;
		
		$this->cupo = null;
    }

    public function store()
    {
        $this->validate([
		'nomtaller' => 'required',
		
		'cupo' => 'required',
        ]);

        Taller::create([ 
			'nomtaller' => $this-> nomtaller,
			
			'cupo' => $this-> cupo
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Taller creado exitosamente.');
    }

    public function edit($id)
    {
        $record = Taller::findOrFail($id);

        $this->selected_id = $id; 
		$this->nomtaller = $record-> nomtaller;
		
		$this->cupo = $record-> cupo;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'nomtaller' => 'required',
		
		'cupo' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Taller::find($this->selected_id);
            $record->update([ 
			'nomtaller' => $this-> nomtaller,
			
			'cupo' => $this-> cupo
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Taller editado exitosamente.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Taller::where('id', $id);
            $record->delete();
        }
    }
}
