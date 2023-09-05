<x-app-layout>
    @include('app.admin.partials.sidenav')

    <div class="relative bg-slate-50 md:ml-64">
        <!-- Header -->
        <div class="relative bg-pink-600 pb-32 pt-12">
            <h3 class="font-semibold text-lg text-white m-2 text-center">
                Création de requête
            </h3>
        </div>
        <div class="px-4 md:px-10 mx-auto w-full -m-24">
            <div class="flex flex-wrap">
                <div class="w-full px-4">
                    <div
                        class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-slate-100 border-0">

                        <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                            <form method="post" action="{{ route('req.store') }}">
                                @csrf

                                <div class="rounded-t mb-0 px-6 py-6">
                                    <div class="text-center flex justify-between">
                                        <h6 class="text-slate-700 text-md font-bold">
                                            Informations docteur
                                        </h6>
                                    </div>
                                </div>
                                <div class="md:grid grid-cols-3 gap-3 my-4">
                                    <div class="my-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                                htmlFor="grid-password">
                                                Nom
                                            </label>
                                            <input type="text" name="doctor_name"
                                                class="border-0 px-3 py-3 placeholder-slate-300 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-line ar transition-all duration-150" />
                                        </div>
                                    </div>
                                    <div class="my-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                                htmlFor="grid-password">
                                                Prenom
                                            </label>
                                            <input type="text" name="doctor_fname"
                                                class="border-0 px-3 py-3 placeholder-slate-300 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                        </div>
                                    </div>
                                    <div class="my-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                                htmlFor="grid-password">
                                                Contact
                                            </label>
                                            <input type="tel" name="doctor_tel"
                                                class="border-0 px-3 py-3 placeholder-slate-300 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="rounded-t mt-2 px-6 py-6">
                                    <div class="text-center flex justify-between">
                                        <h6 class="text-slate-700 text-md font-bold">
                                            Dossier du patient
                                        </h6>
                                    </div>
                                </div>

                                <div class="md:grid grid-cols-3 gap-3 my-4">
                                    <div class="my-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                                htmlFor="grid-password">
                                                Nom du patient
                                            </label>
                                            <input type="text" name="name_patient"
                                                class="border-0 px-3 py-3 placeholder-slate-300 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-line ar transition-all duration-150" />
                                        </div>
                                    </div>
                                    <div class="my-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                                htmlFor="grid-password">
                                                Prenom du patient
                                            </label>
                                            <input type="text" name="fname_patient"
                                                class="border-0 px-3 py-3 placeholder-slate-300 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-line ar transition-all duration-150" />
                                        </div>
                                    </div>
                                    <div class="my-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                                htmlFor="grid-password">
                                                Contact du patient
                                            </label>
                                            <input type="tel" name="tel_patient"
                                                class="border-0 px-3 py-3 placeholder-slate-300 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-line ar transition-all duration-150" />
                                        </div>
                                    </div>
                                    <div class="my-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                                htmlFor="grid-password">
                                                Diagnostic
                                            </label>
                                            <input type="text" name="diagnostic"
                                                class="border-0 px-3 py-3 placeholder-slate-300 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-line ar transition-all duration-150" />
                                        </div>
                                    </div>
                                    <div class="my-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                                htmlFor="grid-password">
                                                Traitement
                                            </label>
                                            <input type="text" name="treatment"
                                                class="border-0 px-3 py-3 placeholder-slate-300 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                        </div>
                                    </div>
                                    <div class="my-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                                htmlFor="grid-password">
                                                Coût prévisionnel
                                            </label>
                                            <input type="number" name="cost"
                                                class="border-0 px-3 py-3 placeholder-slate-300 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                        </div>
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

                                <div class="mt-4 w-full px-4">
                                    <button type="submit"
                                        class="w-full bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-md p-4 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                                        type="button">
                                        Confirmer
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
