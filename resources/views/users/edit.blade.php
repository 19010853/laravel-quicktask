<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('User Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('User Edit') }}
                </div>
            </div>
            <form action="{{ route('users.update', $user) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mt-4">
                    <x-input-label for="username" :value="__('Username')" />

                    <x-text-input id="username" class="block mt-1 w-full"
                                    type="text"
                                    name="username"
                                    value="{{ $user->username }}"
                                    required autocomplete="username" />
                    
                    <x-input-error :messages="$errors->get('username')" class="mt-2" />
                </div>
                <x-primary-button class="mt-4">
                    {{ __('Edit') }}
                </x-primary-button>
            </form>
            <a href="{{ route('users.index') }}">
                <x-primary-button class="mt-4">
                    {{ __('Back') }}
                </x-primary-button>
            </a>
        </div>
    </div>
</x-app-layout>