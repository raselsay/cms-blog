<x-guest-layout>
    <div>
        @can('create')
          <span>Create post</span>
        @endcan

        @can('create')
          <span>update post</span>
        @endcan
        
        @can('delete')
          <span>Delete post</span>
        @endcan
    </div>
</x-guest-layout>