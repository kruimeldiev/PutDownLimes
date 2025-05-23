<x-layout>
    @include('partials._hero')
    @include('partials._search')

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        @foreach($recipes as $recipe)
        <x-recipe-card :recipe="$recipe" />
        @endforeach

    </div>

    <div class="mt-6 p4">
        <!-- TODO: Link to the sign up page -->
    </div>
</x-layout>