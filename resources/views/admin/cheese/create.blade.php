<x-app-layout>
    <x-slot name="header">

        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cheese factory') }}
        </h2>

     

        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           
        <div class="my-6 p-6 bg-white border-b border-gray-200">


            <form action="{{route('admin.cheese.store')}}" method="post">
                @csrf
                <input type="text" 
                name="name" 
                field="name" 
                placeholder="name" 
                class="w-full"
                 autocomplete="off"
                 :value="@old('name')"></input>

                @error('name')
                   <div class="text-red-600 text-sm">{{$message}}</div> 
                @enderror

                <x-textarea 
                name="description" 
                rows="10" 
                field="description" 
                placeholder="Type in the description of the cheese" 
                class="w-full mt-6"
                :value="@old('description')"></x-textarea>

                <x-textarea 
                name="type" 
                rows="10" 
                field="type" 
                placeholder="Type in the type of cheese." 
                class="w-full mt-6"
                :value="@old('description')"></x-textarea>

                <x-textarea 
                name="country_origin" 
                rows="10" 
                field="country_origin" 
                placeholder="Type cheese origin." 
                class="w-full mt-6"
                :value="@old('description')"></x-textarea>


               {{--  @error('description')
                <div class="text-red-600 text-sm">{{$message}}</div> 
                 @enderror --}}

                <button class="mt-6"> Save Cheese</button>
        </div>
      

        </div>
    </div>
</x-app-layout>
