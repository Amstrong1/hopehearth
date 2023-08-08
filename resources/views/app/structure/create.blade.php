<x-app-layout>
    <div class="relative py-3 mx-auto">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-300 to-blue-600 shadow-lg">
        </div>
        <div class="container mx-auto px-4 h-full mt-10">
            <div class="flex content-center items-center justify-center h-full">
                <div class="w-full lg:w-8/12 px-4">
                    <div
                        class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-slate-200 border-0">
                        <div class="rounded-t mb-0 px-6 py-6">

                            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                                <div class="text-slate-400 text-center my-4 font-bold">
                                    <h1>Ajouter une structure</h1>
                                </div>
                                <form method="post" action="{{ route('structure.store') }}">
                                    @csrf
                                    <div class="md:grid grid-cols-2 gap-2">
                                        {{-- <div class="mb-4">
                                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                                htmlFor="grid-password">
                                                Type
                                            </label>
                                            <select name="type" id=""
                                                class="border-0 px-3 py-3 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                                <option value="H">Hopital</option>
                                                <option value="ONG">ONG</option>
                                            </select>
                                        </div> --}}

                                        <div class="mb-4">
                                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                                htmlFor="grid-password">
                                                Raison sociale
                                            </label>
                                            <input type="text" name="name"
                                                class="border-0 px-3 py-3 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                        </div>

                                        <div class="mb-4">
                                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                                htmlFor="grid-password">
                                                Pays
                                            </label>
                                            <input type="text" name="country"
                                                class="border-0 px-3 py-3 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                        </div>

                                        <div class="mb-4">
                                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                                htmlFor="grid-password">
                                                Ville
                                            </label>
                                            <input type="text" name="city"
                                                class="border-0 px-3 py-3 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                        </div>

                                        <div class="mb-4">
                                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                                htmlFor="grid-password">
                                                Adresse
                                            </label>
                                            <input type="text" name="adress"
                                                class="border-0 px-3 py-3 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                        </div>

                                        <div class="mb-4">
                                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                                htmlFor="grid-password">
                                                Nom d'utilisateur
                                            </label>
                                            <input type="text" name="login"
                                                class="border-0 px-3 py-3 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                        </div>


                                        <div class="mb-4">
                                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                                htmlFor="grid-password">
                                                Mot de passe
                                            </label>
                                            <input type="password" name="password"
                                                class="border-0 px-3 py-3 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                        </div>

                                        <div class="text-center mt-6">
                                            <button type="submit"
                                                class="bg-slate-800 text-white active:bg-slate-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                                                type="button">
                                                Enregistrer
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
