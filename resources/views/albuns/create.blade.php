<x-layout.albuns>
    <div class=" ">
        <h1 class="text-2xl font-bold mb-4">Criar Álbum</h1>
        <form action="{{ route('albuns.store') }}" method="POST" class="bg-white p-6 rounded shadow-md">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Título</label>
                <input type="text" name="title" id="title" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="artist" class="block text-sm font-medium text-gray-700">Artista</label>
                <input type="text" name="artist" id="artist" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="release_date" class="block text-sm font-medium text-gray-700">Data de Lançamento</label>
                <input type="date" name="release_date" id="release_date" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
            </div>
        </form>
    </div>
</x-layout.albuns>
