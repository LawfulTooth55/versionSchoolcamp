<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use App\Models\User;

class Users extends Component
{
    
    use WithFileUploads;

    public $photo, $urlfoto; //archivo img
    public $selected_id, $keyWord, $name, $email;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.users.view', [
            'users' => User::latest()
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('email', 'LIKE', $keyWord)
						->paginate(10),
        ]);
          //para asegurar que se actualice la imagen
          if($this->perfil->foto!=null){
            $this->urlfoto = asset('avatars/'.$this->perfil->foto);
        }else{
            $this->urlfoto=asset('img/fotoPerfil.png');
        }
        
        return view('livewire.users.view');
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->name = null;
		$this->email = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'email' => 'required',
        ]);

        User::create([ 
			'name' => $this-> name,
			'email' => $this-> email
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'User Successfully created.');
    }

    public function edit($id)
    {
        $record = User::findOrFail($id);

        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->email = $record-> email;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'email' => 'required',
        ]);

        if ($this->selected_id) {
			$record = User::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'email' => $this-> email
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'User Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = User::where('id', $id);
            $record->delete();
        }
    }

    public function save()
    {
        $this->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:1024', // 1MB Max
        ]);
        $avatar='avatar'.$this->perfil->matricula.'.'.$this->photo->getClientOriginalExtension();
        $this->photo->storeAs('photos',$avatar);

        $this->perfil->foto = $avatar;
        $this->perfil->save();

        

        $this->cerrarModal();
    }
}
