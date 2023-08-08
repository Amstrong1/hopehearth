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
                            <div class="">
                                <h1 class="text-slate-700 text-xl font-bold">
                                    Devenir partenaire
                                </h1>
                            </div>
                        </div>
                        <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                            <form action="{{ route('partner.store') }}" method="post">
                                @csrf
                                <h6 class="text-slate-400 text-sm mt-3 mb-6 font-bold uppercase">
                                    Veuillez fournir ces informations
                                </h6>
                                <div class="flex flex-wrap">
                                    <div class="w-full md:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                                htmlFor="grid-password">
                                                Nom
                                            </label>
                                            <input type="text" name="name" required
                                                class="border-0 px-3 py-3 placeholder-slate-300 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-line ar transition-all duration-150" />
                                        </div>
                                    </div>
                                    <div class="w-full md:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                                htmlFor="grid-password">
                                                Email
                                            </label>
                                            <input type="email" name="email" required
                                                class="border-0 px-3 py-3 placeholder-slate-300 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                        </div>
                                    </div>
                                    <div class="w-full md:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                                htmlFor="grid-password">
                                                Contact
                                            </label>
                                            <input type="tel" name="tel" required
                                                class="border-0 px-3 py-3 placeholder-slate-300 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                        </div>
                                    </div>

                                    <div class="w-full md:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                                htmlFor="grid-password">
                                                Pays
                                            </label>
                                            <input type="text" name="country" required
                                                class="border-0 px-3 py-3 placeholder-slate-300 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                        </div>
                                    </div>
                                    <div class="w-full md:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                                htmlFor="grid-password">
                                                Ville
                                            </label>
                                            <input type="text" name="city" required
                                                class="border-0 px-3 py-3 placeholder-slate-300 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                        </div>
                                    </div>
                                    <div class="w-full md:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                                htmlFor="grid-password">
                                                Adresse
                                            </label>
                                            <input type="text" name="adress" required
                                                class="border-0 px-3 py-3 placeholder-slate-300 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" />
                                        </div>
                                    </div>

                                    <div class="w-full md:w-12/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-slate-600 text-xs font-bold mb-2"
                                                htmlFor="grid-password">
                                                Motivation
                                            </label>
                                            <textarea type="text" name="object" required
                                                class="border-0 px-3 py-3 placeholder-slate-300 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                rows="4">
                                            </textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4 w-full px-4">
                                    <button type="submit"
                                        class="w-full bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-md p-4 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
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
