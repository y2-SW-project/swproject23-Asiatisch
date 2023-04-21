<x-app-layout>
    <x-slot name="header">

        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cheese factory') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class='flex'>
                <p class="opacity-70">
                    <strong>Created:</strong>{{$cheese->created_at->diffForHumans()}}
                </p>
                <p class="opacity-70 ml-8">
                    <strong>updated at :</strong>{{$cheese->updated_at->diffForHumans()}}
                </p>
            </div>
                 {{--   update --}}
             {{--     <a href="{{route('admin.cheese.edit', $cheese)}}" class="btn-links btn-danger ml-4" >edit cheese</a>
               --}}
                 {{--   delete --}}

          {{--        <form action="{{ route('admin.cheese.destroy', $cheese) }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger ml-4" onclick="return confirm('Are you sure you want to delete?')">Delete cheese</button>
            </div>
 --}}
          
      
        <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
           
            
            <h2 class="font-bold text-4xl">
                {{$cheese->name}}
            </h2>

            <p class="mt-6 whitespace-pre-wrap">{{($cheese->description)}} </p>
                
           

           
        </a>
        </div>
     
       

        </div>
    </div>
</x-app-layout>