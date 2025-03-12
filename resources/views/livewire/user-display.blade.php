<div class="w-full">
    <a href="/users-display">
        <button
            class="bg-blue-400 rounded m-1 p-2 hover:bg-blue-800 disabled:cursor-not-allowed disabled:bg-gray-600">
            Retour
        </button>
    </a><br><br>
    <table class="table-auto w-full border-collapse">
        <tr>
            <th class="text-left">Nom:</th>
            <th class="text-left">Classe:</th>
            <th class="text-left">Statut:</th>
            <th class="text-left">Moyenne:</th>
        </tr>
        <tr>
            <td> {{ $user->name }} </td>
            @if($user->is_admin == 1)
                <td> Admin </td>
            @else
                <td> Elève </td>
            @endif
            <td> {{ $classroom_name }} {{ $classroom_letter }} </td>
            <td>
                @if($user->nb_notes == 0)
                    <p> 0 </p>
                @else
                    <p> {{ number_format($user->points/$user->nb_notes, 2) }} </p>
                @endif
            </td>
        </tr>
    </table><br><br><br>

    <h1> Gestion des points:</h1>
    <table class="w-full">
        <tr class="flex justify-between w-full">
            <td>
                <button
                    class="bg-blue-600 rounded m-1 p-2 hover:bg-blue-800 disabled:cursor-not-allowed disabled:bg-gray-600"
                    wire:click="add_five()"
                    wire:loading.attr="disabled">
                    +5 &#x1F6B6;&#x1F3FB;&#x200D;&#x2642;&#xFE0F;&#x200D;&#x27A1;&#xFE0F;
                </button>
                <button
                    class="bg-green-600 rounded m-1 p-2 hover:bg-green-800 disabled:cursor-not-allowed disabled:bg-gray-600"
                    wire:click="add_four()"
                    wire:loading.attr="disabled">
                    +4 	&#x1F6B2;
                </button>
                <button
                    class="bg-yellow-600 rounded m-1 p-2 hover:bg-yellow-800 disabled:cursor-not-allowed disabled:bg-gray-600"
                    wire:click="add_three()"
                    wire:loading.attr="disabled">
                    +3 &#x1F695;
                </button>
                <button
                    class="bg-orange-600 rounded m-1 p-2 hover:bg-orange-800 disabled:cursor-not-allowed disabled:bg-gray-600"
                    wire:click="add_two()"
                    wire:loading.attr="disabled">
                    +2 &#x1F68B;
                </button>
                <button
                    class="bg-red-600 rounded m-1 p-2 hover:bg-red-800 disabled:cursor-not-allowed disabled:bg-gray-600"
                    wire:click="add_one()"
                    wire:loading.attr="disabled">
                    +1 &#x1F697;
                </button>
                <button
                    class="bg-gray-700 rounded m-1 p-2 hover:bg-gray-800 disabled:cursor-not-allowed disabled:bg-gray-600"
                    wire:click="minus_one()"
                    wire:loading.attr="disabled">
                    -1 &#x1F6F8;
                </button>
            </td>
            <td class="ml-auto">
                <button
                    class="bg-red-600 rounded m-1 p-2 hover:bg-red-800 disabled:cursor-not-allowed disabled:bg-gray-600"
                    wire:click="revert()"
                    wire:loading.attr="disabled">
                    Annuler
                </button>
            </td>
        </tr>
    </table>

</div>
