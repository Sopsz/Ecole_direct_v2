<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Classroom;

class UserDisplay extends Component
{
    public $user;
    public $classroom_name;
    public $classroom_letter;

    public function mount(int $user_id)
    {
        $this->user = User::find($user_id);
        $this->classroom_name = Classroom::find($this->user->classroom_id)->label;
        $this->classroom_letter = Classroom::find($this->user->classroom_id)->letter;
    }
    #[layout('layouts.mylayout')]
    public function render()
    {
        return view('livewire.user-display');
    }

    public function add_five(){
        $this->user->points += 5;
        $this->user->nb_notes += 1;
        $this->user->last_note = 5;
        $this->user->save();
    }
    public function add_four(){
        $this->user->points += 4;
        $this->user->nb_notes += 1;
        $this->user->last_note = 4;
        $this->user->save();
    }
    public function add_three(){
        $this->user->points += 3;
        $this->user->nb_notes += 1;
        $this->user->last_note = 3;
        $this->user->save();
    }
    public function add_two(){
        $this->user->points += 2;
        $this->user->nb_notes += 1;
        $this->user->last_note = 2;
        $this->user->save();
    }
    public function add_one(){
        $this->user->points += 1;
        $this->user->nb_notes += 1;
        $this->user->last_note = 1;
        $this->user->save();
    }

    public function minus_one(){
        $this->user->points += -1;
        $this->user->nb_notes += 1;
        $this->user->last_note = -1;
        $this->user->save();
    }
    public function revert(){
        if ($this->user->last_note != null){
            $this->user->points -= $this->user->last_note;
            $this->user->nb_notes -= 1;
            $this->user->last_note = null;
            $this->user->save();
        }
    }

}
