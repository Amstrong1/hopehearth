<x-app-layout>
    <div class="relative py-3 mx-auto">
        <div class="relative bg-pink-600 pb-32 pt-12">

        </div>
        <section class="relative w-full h-full py-10 min-h-screen -mt-24">
            <div class="container mx-auto px-4 h-full">
                <div class="flex content-center items-center justify-center h-full">
                    <div class="w-full lg:w-8/12 px-4">
                        <div
                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0">
                            <div class="rounded-t mb-0 px-6 py-6">

                                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                                    <div class="text-blueGray-400 text-center my-4 font-bold">
                                        <h1>Faire une demande d'aide</h1>
                                    </div>
                                    <form action="{{ route('request.store') }}" method="POST">
                                        @csrf
                                        <div class="md:grid grid-cols-3 gap-3 my-4">
                                            <div class="my-4">
                                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                    htmlFor="grid-password">
                                                    Code fourni par l'hopital
                                                </label>
                                                <input type="text" name="code"
                                                    class="border-0 px-3 py-3 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                            </div>

                                            <div class="my-4">
                                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                    htmlFor="grid-password">
                                                    Nom
                                                </label>
                                                <input type="text" name="name"
                                                    class="border-0 px-3 py-3 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                            </div>

                                            <div class="my-4">
                                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                    htmlFor="grid-password">
                                                    Prenom
                                                </label>
                                                <input type="text" name="fname"
                                                    class="border-0 px-3 py-3 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                            </div>

                                            <div class="my-4">
                                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                    htmlFor="grid-password">
                                                    Date de naissance
                                                </label>
                                                <input type="date" name="birthday"
                                                    class="border-0 px-3 py-3 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                            </div>

                                            <div class="my-4">
                                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                    htmlFor="grid-password">
                                                    Sexe
                                                </label>
                                                <input type="text" name="sex"
                                                    class="border-0 px-3 py-3 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                            </div>

                                            <div class="my-4">
                                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                    htmlFor="grid-password">
                                                    Profession
                                                </label>
                                                <input type="text" name="career"
                                                    class="border-0 px-3 py-3 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                            </div>

                                            <div class="my-4">
                                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                    htmlFor="grid-password">
                                                    Telephone
                                                </label>
                                                <input type="tel" name="tel"
                                                    class="border-0 px-3 py-3 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                            </div>

                                            <div class="my-4">
                                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                    htmlFor="grid-password">
                                                    Situation matrimoniale
                                                </label>
                                                <input type="text" name="ms"
                                                    class="border-0 px-3 py-3 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                            </div>

                                            <div class="my-4">
                                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                    htmlFor="grid-password">
                                                    Ville
                                                </label>
                                                <input type="text" name="city"
                                                    class="border-0 px-3 py-3 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                            </div>

                                            {{-- <div class="my-4">
                                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                    htmlFor="grid-password">
                                                    Centre d'hospitalisation
                                                </label>
                                                <select name="hospital" id="hospital"
                                                    class="border-0 px-3 py-3 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                                    @foreach ($hospitals as $hospital)
                                                        <option value="{{ $hospital->id }}"> {{ $hospital->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div> --}}

                                            <div class="my-4">
                                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                    htmlFor="grid-password">
                                                    Quartier
                                                </label>
                                                <input type="text" name="block"
                                                    class="border-0 px-3 py-3 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                            </div>

                                            <div class="my-4">
                                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                    htmlFor="grid-password">
                                                    Carré
                                                </label>
                                                <input type="text" name="square"
                                                    class="border-0 px-3 py-3 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                            </div>

                                            <div class="my-4">
                                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                    htmlFor="grid-password">
                                                    Maison
                                                </label>
                                                <input type="text" name="house"
                                                    class="border-0 px-3 py-3 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                            </div>
                                        </div>

                                        <div class="my-2">
                                            <label class="inline-flex items-center cursor-pointer">
                                                <input id="customCheckLogin" type="checkbox"
                                                    class="form-checkbox border-0 rounded text-blueGray-700 ml-1 w-5 h-5 ease-linear transition-all duration-150" />
                                                <span class="ml-2 text-sm font-semibold text-blueGray-600">
                                                    J'accepte les
                                                    <a href="javascript:void(0)" class="text-pink-500">
                                                        conditions d'utilisations
                                                    </a>
                                                </span>
                                            </label>
                                        </div>

                                        <div class="text-center mt-6">
                                            <button type="submit"
                                                class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150">
                                                Soumettre
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
