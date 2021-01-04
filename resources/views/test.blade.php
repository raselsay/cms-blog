<x-guest-layout>
    <div>
        {{-- @if (auth()->user()->isAdmin())
           <span>Create project</span>
        @endif --}}
        @can('create')
            <span>create project</span>
        @endcan
    </div>
</x-guest-layout>