<x-layout>
    <table class="w-1/2 mx-auto text-left">
        <tr>
            <th>Car</th>
            <th>Price</th>
            <th>Production year</th>
            <th>Fuel</th>
            <th>Gearbox</th>
            <th>Created at</th>
        </tr>

        @foreach($cars as $car)
        @if(auth()->id() === $car->user_id)
        <tr>
            <td class="pt-8">{{$car->name}}</td>
            <td class="pt-8">{{$car->price}}</td>
            <td class="pt-8">{{$car->prod_year}}</td>
            <td class="pt-8">{{$car->fuel}}</td>
            <td class="pt-8">{{$car->gearbox}}</td>
            <td class="pt-8">{{$car->created_at}}</td>
            <td class="pt-8"><a href="/cars/edit/{{$car->id}}" class="bg-amber-600 py-2 px-4 rounded-lg hover:bg-gray-900 hover:text-white">Edit</a></td>
            <td class="pt-8"><form action="/cars/delete/{{$car->id}}" method="POST">
                @csrf
                <button type="submit" class="bg-red-700 text-white p-2 rounded-lg hover:bg-gray-900">Delete</button>
            </form></td>
        </tr>
        @endif
        @endforeach

    </table>
</x-layout>