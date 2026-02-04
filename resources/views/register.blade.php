<title>Cadastro de usuário</title>

<x-layout>
    <div class="flex flex-col items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-sm space-y-8">
            <!-- Header da Página -->
            <div class="text-center">
                <h1 class="text-2xl font-bold tracking-tight text-gray-900">Criar sua conta</h1>
                <p class="mt-2 text-sm text-gray-500">
                    Já tem uma conta?
                    <a href="/login"
                        class="font-medium text-blue-600 hover:text-blue-500 hover:underline transition-all">Fazer
                        login</a>
                </p>
            </div>

            <!-- Formulário -->
            <form class="mt-8 space-y-5" action="/register" method="POST">
                @csrf
                <div class="space-y-4">
                    <div>
                        <label for="name"
                            class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">Nome
                            completo</label>
                        <input id="name" name="name" type="text" autocomplete="name" required placeholder="Seu nome"
                            value="{{ old('name') }}"
                            class="block w-full rounded-md border border-gray-200 px-3 py-2 text-gray-900 placeholder:text-gray-400 focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500 sm:text-sm transition-all shadow-sm/5 @error('name') border-red-500 @enderror">
                        @error('name')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="email"
                            class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">Email</label>
                        <input id="email" name="email" type="email" autocomplete="email" required
                            placeholder="seu@email.com" value="{{ old('email') }}"
                            class="block w-full rounded-md border border-gray-200 px-3 py-2 text-gray-900 placeholder:text-gray-400 focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500 sm:text-sm transition-all shadow-sm/5 @error('email') border-red-500 @enderror">
                        @error('email')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="password"
                            class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">Senha</label>
                        <input id="password" name="password" type="password" autocomplete="new-password" required
                            placeholder="••••••••"
                            class="block w-full rounded-md border border-gray-200 px-3 py-2 text-gray-900 placeholder:text-gray-400 focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500 sm:text-sm transition-all shadow-sm/5 @error('password') border-red-500 @enderror">
                        @error('password')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="group relative flex w-full justify-center rounded-md bg-blue-500 px-3 py-2.5 text-sm font-semibold text-white transition-all hover:bg-blue-600 focus-visible:outline focus-visible:outline-offset-2 focus-visible:outline-blue-600 active:scale-[0.98] cursor-pointer shadow-sm">
                        Criar conta
                    </button>
                </div>
            </form>

        </div>
    </div>
</x-layout>