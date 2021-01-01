<x-guest-layout>
    <x-hello>
            <x-slot name="header">
                head
            </x-slot>

            <x-slot name="body">
                body
            </x-slot>
        <div class="bluev">
            Hello component 
        </div>
    </x-hello>

    <a href="{{ route('login') }}">Login</a>

    <x-nav-link href="#">
        Home
    </x-nav-link>
</x-guest-layout>