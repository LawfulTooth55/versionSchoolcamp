<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class Perfil extends Component
{
    use WithFileUploads;
 
    public $photo, $urlfoto; //archivo img
    public $email;
    public $editarEmail=false, $open=false;

    public function mount(){
        $this->perfil=Auth()->user();
        $this->email=$this->perfil->email;
       
        
    }

    public function abrirModal(){
        $this->open=true;
    }
    
    public function cerrarModal(){
        $this->open=false;
    }

    public function editarEmail(){
        $this->editarEmail=true;
    }
    public function guardarEmail(){
        //valida que el email sea único excepto para el usuario mismo que lo tiene registrado
        $this->validate([
            'email' => ['required', Rule::unique('users')->ignore($this->perfil)],
        ]);
        $this->perfil->email=$this->email;
        $this->perfil->save();
        
        $this->editarEmail=false;
    }

    public function render()
    {
        //para asegurar que se actualice la imagen
        if($this->perfil->foto!=null){
            $this->urlfoto = asset('avatars/'.$this->perfil->foto);
        }else{
            $this->urlfoto=asset('img/fotoPerfil.png');
        }
        
        return view('livewire.perfil');
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