<x-app-layout>
    <x-slot name="header">
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
                 {{--   update --}}
                 <a href="{{route('admin.cheese.edit', $cheese)}}" class="btn-links btn-danger ml-4" >edit cheese</a>
              
                 {{--   delete --}}

                 <form action="{{ route('admin.cheese.destroy', $cheese) }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger ml-4" onclick="return confirm('Are you sure you want to delete?')">Delete cheese</button>
            </div>

          
      
        <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
          <table class="table table-hover">
            <tbody>
                <tr>
                    <td class="font-bold"> Name: </td>
                    <td>{{$cheese->name}}</td>
                </tr>
                <tr>
                    <td class="font-bold"> description: </td>
                    <td>{{($cheese->description)}}</td>
                </tr>
                <tr>
                    <td class="font-bold"> cheese Type: </td>
                    <td>{{($cheese->type)}}</td>
                </tr>
                <tr>
                    <td class="font-bold">Customer name: </td>
                    <td>{{$cheese->customer->name}}</td>
                </tr>
                <tr>
                    <td class="font-bold">Customer address: </td>
                    <td> {{$cheese->customer->address}}</td>
                </tr>
            </tbody>
            </table> 
    
           
            

           

           
        </a>
        </div>
     
       

        </div>
    </div>
</x-app-layout>