<x-layout>

    <div class="flex justify-center">
        <div class="w-96">
            <form method="POST" action="/login" enctype="multipart/form-data">
                @csrf

                <div class="mb-6">
                    <label for="email" class="inline-block text-lg mb-2">
                        Email
                    </label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email"
                        value="{{old('email')}}" />
                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="inline-block text-lg mb-2">
                        Password
                    </label>
                    <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"
                        value="{{old('password')}}" />
                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                        Login
                    </button>

                    <a href="/" class="text-black ml-4"> Back </a>
                </div>
            </form>
        </div>
</x-layout>