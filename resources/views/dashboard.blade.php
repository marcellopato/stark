<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="{{ route('user.index')}}">{{ __('Stark Industries') }}</a>
        </h2>
    </x-slot>

    <div class="content mt-2" style="
    max-width: 500px;
    margin: auto;
">
        <h1>Hello, world!</h1>
        <p><a href="{{ route("user.create") }}">Cadastrar novo usuário</a></p>
        <table class="table table-bordered mt-50" style="width: 500px;margin:auto">
            <tr><p>Usuários - <a href="{{ route("user.index")}}">Todos</a></p></tr>
            @if($users != '')
                @foreach ($users as $user)
                <tr>
                    <div class="media">
                        @if ($user->photo) 
                            <img class="mr-3" src="{{ asset('images/'.$user->photo) }}" alt="{{ $user->name }}" style="max-width: 70px;border-radius: 50%;max-height: 50px;min-width: 50px;">
                        @endif
                        <div class="media-body">
                            <h5 class="mt-0">{{ $user->name }}</h5>
                        </div>
                    </div>
                    </tr>
                @endforeach
                <tr>
            @else
            <tr><p>Não existem usuários cadastrados</p></tr>
            @endif
                <form method="GET" action="#">
                    <x-label for="busca" :value="__('Busca')" />
                    <x-input id="busca" class="block mt-1 w-full" type="text" name="busca" placeholder="Nome, CPF, RG"/>
                </form>
            </tr>
        </table>
    </div>
</x-app-layout>
