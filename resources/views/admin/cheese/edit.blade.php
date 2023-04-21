<x-app-layout>
    <x-slot name="header">

        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cheese factory') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           
     
        <div class="my-6 p-6 bg-white border-b border-gray-200">


        <form action="{{route('admin.cheese.update', $cheese)}}" method="post">
                @method('put')
                @csrf
                
                <x-text-input 
                type="text" 
                name="name" 
                field="name" 
                placeholder="Name" 
                class="w-full"
                 autocomplete="off"
                 :value=" @old('name', $cheese->name)"
                ></x-text-input>

              

                <x-textarea 
                name="description" 
                rows="10" 
                field="description" 
                placeholder="Type in the description of the cheese" 
                class="w-full mt-6"
                :value=" @old('name', $cheese->description)"></x-textarea>

                <x-textarea 
                name="type" 
                rows="10" 
                field="type" 
                placeholder="Type in the type of cheese." 
                class="w-full mt-6"
                :value="@old('type', $cheese->type)"></x-textarea>

                <x-textarea 
                name="country_origin" 
                rows="10" 
                field="country_origin" 
                placeholder="Type cheese origin." 
                class="w-full mt-6"
                :value="@old('country_origin', $cheese->country_origin)"></x-textarea>


               {{--  @error('description')
                <div class="text-red-600 text-sm">{{$message}}</div> 
                 @enderror --}}

                <button class="mt-6"> Save Cheese</button>
    </form>
        </div>
      

        </div>
    </div>
</x-app-layout>
