<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Zapatos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">



                    <table class="table text-gray-400 border-separate space-y-6 text-sm">
                        <thead class="bg-blue-500 text-white">
                            <tr>
                                <th class="p-3">Id</th>
                                <th class="p-3 text-left">Codigo</th>
                                <th class="p-3 text-left">Denominacion</th>
                                <th class="p-3 text-left">Precio</th>
                                <th class="p-3 text-left">Añadir</th>


                            </tr>
                        </thead>
                        {{-- {{$zapatos}} --}}

                        <tbody>
                            @foreach ($zapatos as $zapato)
                                <tr>
                                    <td>{{ $zapato->id }}</td>
                                    <td>{{ $zapato->codigo }}</td>
                                    <td>{{ $zapato->denominacion }}</td>
                                    <td>{{ $zapato->precio }}</td>

                                    <td>
                                        <form action="{{ route('carritos.meter', $zapato) }}" method="post">
                                            @csrf
                                            @method('POST')
                                            <button type="submit">Añadir</button>

                                        </form>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>




                </div>
            </div>
        </div>
    </div>
</x-app-layout>
