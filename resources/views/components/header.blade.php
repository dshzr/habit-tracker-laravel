<header class="sticky top-0 z-50 w-full border-b border-gray-100 bg-white shadow-sm/5">
    <div class="mx-auto flex h-12 max-w-full items-center justify-between px-4 transition-all duration-200">
        <!-- Brand / Notion Style Breadcrumb -->
        <div class="flex items-center gap-2 overflow-hidden">
            <a href="/"
                class="flex items-center gap-1.5 rounded px-2 py-1 transition-colors hover:bg-gray-100 cursor-pointer">
                <span class="text-lg">📋</span>
                <span class="text-sm font-medium text-gray-700">HabitTracker</span>
            </a>
        </div>

        <!-- Actions -->
        <div class="flex items-center gap-2">
            @auth
                <span class="text-sm text-gray-600 hidden sm:inline">Olá, <strong>{{ auth()->user()->name }}</strong></span>

                <form action="/logout" method="POST" class="inline">
                    @csrf
                    <button type="submit"
                        class="px-2 py-1 text-sm font-medium text-red-600 transition-colors hover:bg-red-50 rounded cursor-pointer">
                        Sair
                    </button>
                </form>
            @endauth

            @guest
                <a href="/login"
                    class="px-2 py-1 text-sm font-medium text-gray-600 transition-colors hover:bg-gray-100 rounded">
                    Entrar
                </a>

                <a href="/register"
                    class="flex items-center gap-1 rounded bg-blue-500 px-3 py-1 text-sm font-medium text-white transition-colors hover:bg-blue-600 cursor-pointer shadow-sm active:scale-95">
                    Cadastrar
                </a>
            @endguest
        </div>
    </div>
</header>