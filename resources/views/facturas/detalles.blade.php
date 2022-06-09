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
                                <th class="p-3 text-align">Id</th>
                                <th class="p-3 text-align">Denominacion</th>
                                <th class="p-3 text-align">Precio</th>
                                <th class="p-3 text-align">Cantidad</th>

                            </tr>

                        </thead>


                        <br>
                        <tbody>
                            @foreach ($factura->lineas as $linea)
                                <tr>
                                    <td>{{ $linea->zapato_id }}</td>
                                    <td>{{ $linea->zapato->denominacion }}</td>
                                    <td>{{ $linea->zapato->precio }}€</td>
                                    <td>{{ $linea->cantidad }}</td>



                                </tr>
                            @endforeach

                        </tbody>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
