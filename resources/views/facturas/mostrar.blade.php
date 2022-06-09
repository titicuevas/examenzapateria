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

                                <th class="p-3 text-align">Nombre</th>
                                <th class="p-3 text-align">Mostrar</th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($facturas as $factura)
                            <tr>
                                <td>{{ $factura->id }}</td>
                                <td>{{ $factura->user->name }}</td>
                                {{--<td>{{ $factura->updated_at }}</td>--}}

                                <td><a href="{{ route('detalles.facturas', $factura) }}">Mostrar detalles</a>
                                </td>
                            </tr>
                                <br>
                            @endforeach

                        </tbody>






                </div>
            </div>
        </div>
    </div>
</x-app-layout>
