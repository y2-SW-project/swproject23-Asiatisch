<x-app-layout>
    <x-slot name="header">

        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cheese factory') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

           
        @forelse ($cheeses as $cheese)
        <div class="my-6 p-6 bg-white border-b border-gray-200">
            <a href="{{route('user.cheese.show', $cheese)}}">

            
            <h2 class="font-bold text-2xl">
                {{$cheese->name}}
            </h2>

            <p class="mt-2">
                {{Str::limit($cheese->description, 200)}}
            </p>

            <span class="block mt-4 text-sm opacity-70">  {{$cheese->updated_at->diffForHumans()}}</span>
        </a>
        </div>
      @empty 
      <p>no cheeses yet.</p>
        @endforelse
        {{-- {{$cheeses->links()}} --}}

        </div>
    </div>
</x-app-layout>
