<x-app-layout>
    <div class="relative bg-slate-50">
        <!-- Header -->
        <div class="relative bg-pink-600 pb-32 pt-12">

        </div>
        <div class="px-4 md:px-10 w-full -mt-24">
            <div class="flex flex-wrap">
                <div class="w-full lg:w-8/12 px-4 mx-auto">
                    <div
                        class="relative flex flex-col justify-center min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-slate-100 border-0">
                        <div class="rounded-t bg-white mb-0 px-6 py-6">
                            <div class="text-center flex justify-between">
                                <h1 class="text-slate-700 text-xl font-bold">
                                    Faire une demande d'aide
                                </h1>
                            </div>
                        </div>
                        <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                            <form action="{{ route('request.store') }}" method="post">
                                @csrf
                                <div class="md:grid grid-cols-3 gap-3 my-4">
                                    <div class="my-4">
                                        <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password">
                                            Code fourni par l'hopital
                                        </label>
                                        <input required type="text" name="code"
                                            class="border-0 px-3 py-3 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                    </div>

                                    <div class="my-4">
                                        <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password">
                                            Nom
                                        </label>
                                        <input required type="text" name="name"
                                            class="border-0 px-3 py-3 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                    </div>

                                    <div class="my-4">
                                        <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password">
                                            Prenom
                                        </label>
                                        <input required type="text" name="fname"
                                            class="border-0 px-3 py-3 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                    </div>

                                    <div class="my-4">
                                        <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password">
                                            Date de naissance
                                        </label>
                                        <input required type="date" name="birthday"
                                            class="border-0 px-3 py-3 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                    </div>

                                    <div class="my-4">
                                        <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password">
                                            Sexe
                                        </label>
                                        <select name="sex" id=""
                                            class="border-0 px-3 py-3 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                            <option value="F">Féminin</option>
                                            <option value="M">Masculin</option>
                                        </select>
                                    </div>

                                    <div class="my-4">
                                        <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password">
                                            Profession
                                        </label>
                                        <input required type="text" name="career"
                                            class="border-0 px-3 py-3 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                    </div>

                                    <div class="my-4">
                                        <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password">
                                            Telephone
                                        </label>
                                        <input required type="tel" name="tel"
                                            class="border-0 px-3 py-3 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                    </div>

                                    <div class="my-4">
                                        <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password">
                                            Situation matrimoniale
                                        </label>
                                        <input required type="text" name="ms"
                                            class="border-0 px-3 py-3 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                    </div>

                                    <div class="my-4">
                                        <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password">
                                            Ville
                                        </label>
                                        <input required type="text" name="city"
                                            class="border-0 px-3 py-3 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                    </div>

                                    {{-- <div class="my-4">
                                        <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password">
                                            Centre d'hospitalisation
                                        </label>
                                        <select name="hospital" id="hospital"
                                            class="border-0 px-3 py-3 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                            @foreach ($hospitals as $hospital)
                                                <option value="{{ $hospital->id }}"> {{ $hospital->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div> --}}

                                    <div class="my-4">
                                        <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password">
                                            Quartier
                                        </label>
                                        <input required type="text" name="block"
                                            class="border-0 px-3 py-3 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                    </div>

                                    <div class="my-4">
                                        <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password">
                                            Carré
                                        </label>
                                        <input required type="text" name="square"
                                            class="border-0 px-3 py-3 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                    </div>

                                    <div class="my-4">
                                        <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password">
                                            Maison
                                        </label>
                                        <input required type="text" name="house"
                                            class="border-0 px-3 py-3 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                    </div>
                                </div>

                                <div class="my-2">
                                    <label class="inline-flex items-center cursor-pointer">
                                        <input required id="customCheckLogin" type="checkbox"
                                            class="form-checkbox border-0 rounded text-slate-700 ml-1 w-5 h-5 ease-linear transition-all duration-150" />
                                        <span class="ml-2 text-sm font-semibold text-slate-600">
                                            J'accepte les
                                            <a href="{{ route('cgu') }}" class="text-pink-500">
                                                conditions d'utilisations
                                            </a>
                                        </span>
                                    </label>
                                </div>

                                <div class="text-center mt-6">
                                    <button type="submit"
                                        class="bg-slate-800 text-white active:bg-slate-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150">
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

</x-app-layout>
