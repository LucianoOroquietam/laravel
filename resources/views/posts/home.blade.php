<x-app-layout>
    <section class="max-w-4xl mx-auto px-4 py-10 space-y-6">

        @if (session('success'))
            <div id="toast-success"
                class="fixed top-20 left-1/2 transform -translate-x-1/2 z-50 p-4 text-green-800 bg-green-100 border border-green-400 rounded-lg shadow"
                role="alert">
                <div class="flex items-center justify-between w-full">
                    <div class="text-sm font-medium">
                        {{ session('success') }}
                    </div>
                    <button type="button"
                        class="ml-4 bg-green-100 text-green-800 hover:text-green-900 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 justify-center items-center"
                        onclick="document.getElementById('toast-success').remove()">
                        <span class="sr-only">Cerrar</span>
                        &times;
                    </button>
                </div>
            </div>
        @endif







        <h2 class="text-3xl font-bold text-white mb-6">Listado de Posts</h2>

        <button class="text-black hover:text-gray-300 font-bold py-2 px-4 rounded bg-white hover:bg-gray-800">
            <a href="/posts/create">Crear Post</a>
        </button>

        @foreach ($posts as $post)
            <article class="bg-gray-800 rounded-lg p-6 shadow-md border border-gray-700">
                <h3 class="text-xl font-semibold text-white mb-2">
                    <a href="/posts/{{ $post->id }}">
                        {{ $post->title }}
                    </a>
                </h3>
                <p class="text-sm text-gray-400">Publicado el {{ date('d/m/Y', strtotime($post->published_at)) }}</p>
            </article>
        @endforeach

    </section>

    <script>
        if (document.getElementById('toast-success')) {
            setTimeout(() => {
                const toast = document.getElementById('toast-success');
                toast.classList.add('opacity-0', 'transition-opacity', 'duration-500');
                setTimeout(() => toast.remove(), 500);
            }, 3000);
        }
    </script>
</x-app-layout>
