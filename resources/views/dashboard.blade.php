<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Stark Industries') }}
        </h2>
    </x-slot>

    <div class="content text-center mt-2">
        <h1>Hello, world!</h1>
        <p><a href="{{ route("user.create") }}">Casdastrar novo usuário</a></p>
        <table>
            <tr>Usuários</tr>
            @foreach ($users as $user)
                <tr>{{ $user->username }}</tr>
            @endforeach
        </table>
    </div>
</x-app-layout>
