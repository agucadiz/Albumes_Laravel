<x-app-layout>
    <x-slot name="header">
        <h1 class="text-center font-semibold text-xl text-gray-800 leading-tight">
            Artista
        </h1>
    </x-slot>
    <div class="py-6 sm:px-6">
        <div
            class="p-6 bg-white border-gray-200 flex flex-col items-center max-w-7xl mx-auto px-10 shadow-sm sm:rounded-lg">
            <!-- Show -->
            <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $artista->nombre }}</h1>

            <h2 class="mb-2 text-xl font-bold tracking-tight text-gray-900">Lista de Álbumes en los que ha participado</h2>
            <ol>
                <li>
                    @php
                        $titulo = [];
                    @endphp
                    @foreach ($artista->temas as $tema)
                        @foreach ($tema->albumes as $album)
                            @if (!in_array($album->titulo, $titulo))
                                <p class="mb-3 font-normal text-gray-700">{{ $album->titulo }}</p>
                                @php
                                    $titulo[] = $album->titulo;
                                @endphp
                            @endif
                        @endforeach
                        <br>
                    @endforeach
                </li>
            </ol>
        </div>
    </div>
</x-app-layout>
