<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">



                    <table class="table text-neutral-900 border-separate space-y-6 text-sm text-center">
                        <thead class="bg-blue-500 text-white">
                            <tr>
                                <th class="p-3 text-align">Denominacion</th>
                                <th class="p-3 text-align">Precio</th>
                                <th class="p-3 text-align">Cantidad</th>
                                <th class="p-3 text-align">Precio Total</th>
                                <th class="p-3 text-align">Operaciones</th>


                            </tr>

                        </thead>
                        <tbody>
                            {{-- {{$carritos}} --}}

                            @forelse ($carritos as $carrito)
                                <tr>
                                    <td>{{ $carrito->zapato->denominacion }}</td>
                                    <td>{{ $carrito->zapato->precio }}€</td>
                                    <td>{{ $carrito->cantidad }}</td>
                                    <td>{{ $carrito->cantidad * $carrito->zapato->precio }}€</td>

                                    <td>

                                        <form action="{{ route('carritos.restar', $carrito) }}" method="post">
                                            @csrf
                                            @method('POST')
                                            <button
                                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
                                                -
                                            </button>
                                            <br>

                                        </form>








                                        <br>
                                        <form action="{{ route('carritos.sumar', $carrito) }}" method="post">
                                            @csrf
                                            @method('POST')
                                            <button
                                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">
                                                +
                                            </button>

                                        </form>
                                    </td>
                                </tr>
                                <br>
                            @empty
                                no hay articulos
                            @endforelse

                        </tbody>
                    </table>
                    <br>
                    <form action="{{ route('carritos.vaciar') }}" method="post">
                        @csrf
                        @method('POST')
                        <button type="submit">Vaciar carrito</button>

                    </form>
                    <br>
                    Total: {{ $total }}€


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
