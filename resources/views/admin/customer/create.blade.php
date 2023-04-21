<x-app-layout>
    <x-slot name="header">

        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Customer') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           
        <div class="my-6 p-6 bg-white border-b border-gray-200">


            <form action="{{route('admin.customer.store')}}" method="post">
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
                name="email" 
                rows="10" 
                field="email" 
                placeholder="Type in the customers email" 
                class="w-full mt-6"
                :value="@old('email')"></x-textarea>

                <x-textarea 
                name="address" 
                rows="10" 
                field="type" 
                placeholder="Type in the address" 
                class="w-full mt-6"
                :value="@old('address')"></x-textarea>

              


               {{--  @error('description')
                <div class="text-red-600 text-sm">{{$message}}</div> 
                 @enderror --}}

                <button class="mt-6"> Save customer</button>
        </div>
      

        </div>
    </div>
</x-app-layout>
