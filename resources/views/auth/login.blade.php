<x-app-layout>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
            <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                <div
                    class="absolute inset-0 bg-gradient-to-r from-blue-300 to-blue-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
                </div>
                <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                    <div class="max-w-md mx-auto">
                        <div>
                            <h1 class="text-2xl font-semibold">Se connecter</h1>
                        </div>
                        <div class="mb-4">
                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                htmlFor="grid-password">
                                Login
                            </label>
                            <input type="text" name="login"
                                class="border-1 px-3 py-3 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                        </div>

                        <div class="mb-4">
                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                htmlFor="grid-password">
                                Mot de passe
                            </label>
                            <input type="password" name="password"
                                class="border-1 px-3 py-3 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                        </div>

                        <div class="mb-4">
                            <p> <a class="text-sm" href="{{ route('structure.create') }}"> Creer un compte </a> </p>
                        </div>

                        <div class="text-center mt-6">
                            <button type="submit"
                                class="bg-slate-800 text-white active:bg-slate-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150">
                                Connexion
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>
