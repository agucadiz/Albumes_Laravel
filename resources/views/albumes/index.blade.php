<x-app-layout>
    <x-slot name="header">
        <h2 class="text-center font-semibold text-xl text-gray-800 leading-tight">
            Álbumes
        </h2>
    </x-slot>
    <div class="py-6 sm:px-6">
        <div
            class="p-6 bg-white border-gray-200 flex flex-col items-center max-w-7xl mx-auto px-10 shadow-sm sm:rounded-lg">
            <div class="border border-gray-200 shadow">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Título
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Año
                            </th>
                            <th class="relative px-6 py-3">
                                <span class="sr-only">Edit/Delete</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ($albumes as $album)
                            <tr class="whitespace-nowrap">
                                <td class="px-6 py-4">
                                    <div class="text-sm font-medium text-gray-900">
                                        <a href=" {{ route('albumes.show', $album) }} ">
                                            {{ $album->titulo }}
                                        </a>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm font-medium text-gray-900">
                                        <a href=" {{ route('albumes.show', $album) }} ">
                                            {{ $album->anyo }}
                                        </a>
                                    </div>
                                </td>
                                <td class="px-6 py-4 inline-flex">
                                    <form action="" method="GET">
                                        <button
                                            class="py-1 px-4 text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded text-sm text-center mr-2 mb-2">
                                            Editar
                                        </button>
                                    </form>
                                    <form action="{{ route('albumes.destroy', $album) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            class="py-1 px-4 text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded text-sm text-center mr-2 mb-2">
                                            Borrar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="flex justify-center">
                <a href="{{ route('albumes.create') }}">
                    <button
                        class="mt-5 py-1 px-4 text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded text-sm text-center mr-2 mb-2">
                        Añadir Álbum
                    </button>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
