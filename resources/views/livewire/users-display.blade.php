<div class="w-full">
    @forelse($classrooms as $classroom)
        <div class="flex justify-between w-full">
            <h1> {{ $user->name }} </h1><br>
            <h1> {{ $classroom->label }} </h1>
            <a href="/dashboard" class="ml-auto">
                <button
                    class="bg-blue-400 rounded m-1 p-2 hover:bg-blue-800 disabled:cursor-not-allowed disabled:bg-gray-600">
                    Tableau de bord
                </button>
            </a>
        </div>

        <form action="/submit" method="post" wire:submit="create_user({{ $classroom->id }}) ">
            <label for="name">Nom :</label><br>
            <input type="text" id="name" name="name" required wire:model="new_name" class="w-1/4 rounded text-black">
            <button type="submit" class="bg-blue-400 w-1/4 rounded m-1 p-2 hover:bg-blue-800 disabled:cursor-not-allowed disabled:bg-gray-600">Ajouter l'élève</button>
            <br><br><br>
        </form>

        <div class="flex justify-between w-full">
            <p> Nom & Moyenne</p>
        </div>
        @foreach($classroom->users as $user)
            <hr>
            <div class="flex justify-between w-full">
                <p> {{ $user->name }} </p>
                @if($user->nb_notes == 0)
                    <p class="ml-auto"> 0 </p>
                @else
                    <p class="ml-auto"> {{ number_format($user->points/$user->nb_notes, 2) }} </p>
                @endif
                    <a href="/user-display/{{ $user->id }}">
                        <button
                            class="bg-blue-400 rounded m-1 p-2 hover:bg-blue-800 disabled:cursor-not-allowed disabled:bg-gray-600">
                            + Info
                        </button>
                    </a>
                    <button
                        class="bg-red-600 rounded m-1 p-2 hover:bg-red-800 disabled:cursor-not-allowed disabled:bg-gray-600"
                        wire:click="delete_student({{ $user->id }})"
                        wire:loading.attr="disabled"
                        wire:target="delete_student({{ $user->id }})">
                        Delete
                    </button>
            </div>
        @endforeach
    @empty
        <p> no classroom </p>

    @endforelse
    <hr>
</div>
