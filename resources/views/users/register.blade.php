<x-layout>
    <form action="/register" method="POST" class="mt-12">
        @csrf
        <div class="flex items-center flex-col">
            <h2 class="mb-4 text-2xl">Register an account!</h2>
            <div>
                <label for="name">Username</label><br>
                <input type="text" name="name" class="bg-gray-400 rounded-md pl-2">

                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div>
                <label for="email">E-mail</label><br>
                <input type="email" name="email" class="bg-gray-400 rounded-md pl-2">

                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div>
                <label for="password">Password</label><br>
                <input type="password" name="password" class="bg-gray-400 rounded-md pl-2">

                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div>
                <label for="password_confirmation">Password Again</label><br>
                <input type="password" name="password_confirmation" class="bg-gray-400 rounded-md pl-2">

                @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <a href="/login" class="text-blue-800">Already registered? Sign in!</a>
            <input type="submit" value="Register" class="bg-orange-600 p-2 text-white rounded-lg mt-2 cursor-pointer hover:bg-gray-900 hover:text-orange-600 font-bold mb-6">
        </div>
    </form>
</x-layout>