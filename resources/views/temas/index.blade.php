<x-app-layout>
    <x-slot name="header">
        <h1 class="text-center font-semibold text-xl text-gray-800 leading-tight">
            Temas
        </h1>
    </x-slot>
    <div class="py-6 sm:px-6">
        <div
            class="p-6 bg-white border-gray-200 flex flex-col items-center max-w-7xl mx-auto px-10 shadow-sm sm:rounded-lg">
            <!-- Sesiones -->
            @if (session()->has('error'))
                <div class="bg-red-100 p-4 mb-4 text-sm text-red-700" role="alert">
                    <span class="font-semibold">{{ session('error') }}</span>
                </div>
            @endif

            @if (session()->has('success'))
                <div class="bg-green-100 p-4 mb-4 text-sm text-green-700" role="alert">
                    <span class="font-semibold">{{ session('success') }}</span>
                </div>
            @endif

            <!-- Tabla -->
            @if ($temas->isNotEmpty())
                <div class="border border-gray-200 shadow">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Título
                                </th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nº Artistas
                                </th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nº Álbumes
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($temas as $tema)
                                <tr class="whitespace-nowrap">
                                    <td class="px-6 py-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ $tema->titulo }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ $tema->artistas->count() }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ $tema->albumes->count() }}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="border border-gray-200 shadow">
                    <div class="bg-green-100 rounded-lg p-4 mt-4 mb-4 text-sm text-green-700 w-96 text-center"
                        role="alert">
                        No hay témas.
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
