<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="{{ route('user.index')}}">{{ __('Stark Industries') }}</a>
        </h2>
    </x-slot>

    <div class="content mt-2" style="width: 500px;margin:auto">
        <h1>Cadastro de usuário</h1>
        <div class="card">
			<div class="card-body">
				@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
				<form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
					@csrf
					<!-- Name -->
					<div>
						<x-label for="name" :value="__('Nome')" />
						<x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"  autofocus />
					</div>
		
					<!-- Email Address -->
					<div class="mt-4">
						<x-label for="email" :value="__('E-mail')" />
						<x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"  />
					</div>
		
					<!-- Password -->
					<div class="mt-4">
						<x-label for="password" :value="__('Senha')" />
						<x-input id="password" class="block mt-1 w-full"
										type="password"
										name="password"
										 autocomplete="new-password" />
					</div>
		
					<!-- Confirm Password -->
					<div class="mt-4">
						<x-label for="password_confirmation" :value="__('Confirme a Senha')" />
		
						<x-input id="password_confirmation" class="block mt-1 w-full"
										type="password"
										name="password_confirmation"  />
					</div>

					<!-- CPF -->
					<div class="mt-4">
						<x-label for="cpf" :value="__('CPF')" />
						<x-input id="cpf" class="block mt-1 w-full" type="text" min-length="8" max-length="8"
						data-mask="00000000000"
						name="cpf" :value="old('cpf')" />
					</div>

					<!-- RG -->
					<div class="mt-4">
						<x-label for="rg" :value="__('RG')" />
						<x-input id="rg" class="block mt-1 w-full" type="text" min-length="8" max-length="8"
						data-mask="000000000"
						name="rg" :value="old('rg')" />
					</div>

					<!-- CEP -->
					<div class="mt-4">
						<x-label for="zipcode" :value="__('CEP')" />
						<x-input id="zipcode" class="block mt-1 w-full" type="text" min-length="8" max-length="8"
						data-mask="00000000"
						name="zipcode" :value="old('zipcode')" />
					</div>

					<!-- Rua -->
					<div class="mt-4">
						<x-label for="street" :value="__('Rua')" />
						<x-input id="street" class="block mt-1 w-full" type="text" name="street" :value="old('street')"  />
					</div>

					<!-- Número -->
					<div class="mt-4">
						<x-label for="number" :value="__('Número')" />
						<x-input id="number" class="block mt-1 w-full" type="text" name="number" :value="old('number')"  />
					</div>

					<!-- Bairro -->
					<div class="mt-4">
						<x-label for="zip" :value="__('Bairro')" />
						<x-input id="zip" class="block mt-1 w-full" type="text" name="zip" :value="old('zip')"  />
					</div>

					<!-- Cidade -->
					<div class="mt-4">
						<x-label for="city" :value="__('Cidade')" />
						<x-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')"  />
					</div>

					<!-- Estado -->
					<div class="mt-4">
						<x-label for="state" :value="__('Estado')" />
						<x-input id="state" class="block mt-1 w-full" type="text" name="state" :value="old('state')"  />
					</div>

					<!-- Foto -->
					<div class="mt-4">
						<x-label for="photo" :value="__('Foto')" />
						<x-input id="photo" class="block mt-1 w-full" type="file" name="photo" :value="old('photo')"  />
					</div>

					<div class="flex items-center justify-end mt-4">
						<x-button>
							{{ __('Cadastrar') }}
						</x-button>
					</div>
				</form>
			</div>
		</div>
    </div>
</x-app-layout>