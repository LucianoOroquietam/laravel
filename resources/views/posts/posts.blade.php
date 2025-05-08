<x-app-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-950 px-4 py-12">
        <section class="max-w-3xl w-full bg-gray-900 rounded-lg shadow-xl text-white p-8 space-y-6">
            <article>
                <header class="mb-6">
                    <h1 class="text-4xl font-bold text-indigo-400">{{ $post->title }}</h1>
                    <p class="text-sm text-gray-400">
                        Publicado el {{ $post->created_at->format('d \d\e F, Y') }}
                    </p>
                </header>

                <div class="prose prose-invert max-w-none">
                    {!! nl2br(e($post->content)) !!}
                </div>

                <div class="mt-8">
                    <a href="/posts/{{ $post->id }}/editPost"
                        class="inline-block px-4 py-2 bg-green-600 hover:bg-green-500 rounded-md text-white font-semibold transition">
                        Editar Post
                     </a>

                </div>

                <div class="mt-8">
                    <form action="/posts/{{ $post->id }}" method="POST"
                        onsubmit="return confirm('¿Estás seguro de que querés eliminar este post?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="inline-block px-4 py-2 bg-red-600 hover:bg-red-500 rounded-md text-white font-semibold transition">
                            Eliminar Post
                        </button>
                    </form>
                </div>



                <div class="mt-8">
                    <a href="/"
                        class="inline-block px-4 py-2 bg-indigo-600 hover:bg-indigo-500 rounded-md text-white font-semibold transition">
                        ← Volver al listado
                    </a>
                </div>
            </article>
        </section>
    </div>
</x-app-layout>
