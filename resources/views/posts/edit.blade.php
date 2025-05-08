<x-app-layout>
    @section('body-class', 'bg-white')
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <form class="w-full max-w-lg justify-between" action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')

            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="title">
                        Título
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="title" name="title" type="text" placeholder="Título del post"
                        value="{{ $post->title }}" required>
                    @error('title')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="category">
                        Categoría
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="category" name="category" type="text" placeholder="Categoría del post"
                        value="{{ $post->category }}" required>
                    @error('category')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="content">
                        Contenido
                    </label>
                    <textarea
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="content" name="content" placeholder="Escribe el contenido del post" required>{{ $post->content}}</textarea>
                    @error('content')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="published_at">
                        Fecha de publicación
                    </label>
                    <input type="date"
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="published_at" name="published_at"
                        value="{{ old('published_at', optional($post->published_at)->format('Y-m-d')) }}" required>
                    @error('published_at')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Editar Post
                </button>
            </div>
        </form>
    </div>
</x-app-layout>

