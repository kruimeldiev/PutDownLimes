@props(['recipe'])

<x-card-bg>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="images/img_none_found.jpg" alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="/recipes/{{$recipe->id}}">{{$recipe->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$recipe->description}}</div>
            <x-recipe-tags :tagsCsv="$recipe->tags" />
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i>{{$recipe->user}}
            </div>
        </div>
    </div>
</x-card-bg>