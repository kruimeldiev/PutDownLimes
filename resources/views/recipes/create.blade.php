<x-layout>
    <x-card-bg class="p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Post a recipe
            </h2>
            <p class="mb-4">Share a recipe with the world!</p>
        </header>

        <form method="post" action="/recipes">
            @csrf
            <div class="mb-6">
                <label for="company" class="inline-block text-lg mb-2">Title</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                    value="{{old('title')}}" />
                @error('title')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Description
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="4"
                    placeholder="Include tasks, requirements, salary, etc"> {{old('description')}}</textarea>
                @error('description')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags (Comma Separated)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                    placeholder="Example: Laravel, Backend, Postgres, etc" value="{{old('tags')}}" />
                @error('tags')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <!-- <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Ingredients (Comma Separated)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="ingredients"
                    placeholder="Example: Laravel, Backend, Postgres, etc" />
                @error('ingredients')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div> -->

            <div class="mb-6">
                <label for="steps" class="inline-block text-lg mb-2">
                    Steps (Comma Separated)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="steps"
                    placeholder="Example: Laravel, Backend, Postgres, etc" value="{{old('steps')}}" />
                @error('steps')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <!-- <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Image
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="image" />
            </div> -->

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Share recipe
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card-bg>
</x-layout>