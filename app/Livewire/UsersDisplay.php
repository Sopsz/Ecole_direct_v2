<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class UsersDisplay extends Component
{

    public $user;
    public $users;
    public $classrooms;

    public $new_name;
    public $new_mail;

    #[layout('layouts.mylayout')]
    public function render()
    {
        return view('livewire.users-display');
    }

    public function mount(){
        $this->user = Auth::user();
        $this->users = User::with('classrooms')->get();
        $this->classrooms = Auth::user()->classrooms;
    }

    public function delete_student($id){

        $u = User::find($id);
        $u->delete();
    }

    public function create_user($class_id){
        $u = new User();
        $u->name = $this->new_name;
        $u->email = $u->name.'@gmail.com';
        $u->password = Hash::make("coucou");
        $u->classroom_id = $class_id;
        $u->nb_notes = 0;
        $u->points = 0;
        $u->save();

    }

}
