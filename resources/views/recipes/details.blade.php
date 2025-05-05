<x-layout>
    <div class="flex justify-between items-center mx-4 mb-4">
        <a href="/" class="inline-block text-black"><i class="fa-solid fa-arrow-left"></i> Back</a>
        
        <form method="POST" action="/recipes/{{$recipe->id}}">
            @csrf
            @method('DELETE')
            <button class="text-red-500 hover:text-red-700">
                <i class="fa-solid fa-trash"></i> Delete
            </button>
        </form>
    </div>
    <div class="mx-4">
        <x-card-bg class="p-10">
            <div class="flex flex-col items-center justify-center text-center">
                <img class="w-48 mr-6 mb-6" src="{{asset('images/img_none_found.jpg')}}" alt="" />

                <h3 class="text-2xl mb-2">{{$recipe->title}}</h3>
                <div class="text-xl font-bold mb-4">{{$recipe->description}}</div>
                <x-recipe-tags :tagsCsv="$recipe->tags" />
                <div class="text-lg my-4">
                    <i class="fa-solid fa-location-dot"></i>{{$recipe->user}}
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        Recipe steps
                    </h3>
                    <div class="text-lg space-y-6">
                        <!-- @foreach(explode("\n", $recipe->steps) as $step) -->
                        <div>{{ $step }} </div>
                        <!-- @endforeach -->
                    </div>
                </div>
            </div>
        </x-card-bg>
    </div>

</x-layout>