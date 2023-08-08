<x-app-layout>
    <div class="relative bg-slate-50">

        <div class="relative bg-pink-600 md:pt-32 pb-32 pt-12 md:sticky top-0">
            <div class="px-4 md:px-10 mx-auto w-full text-center text-white">
                <h1 class="text-2xl font-bold">Detail de la demande</h1>
            </div>
        </div>
        <div class="px-4 md:px-10 mx-auto w-full -mt-24">
            <div class="flex flex-wrap">
                <div class="w-full md:w-1/3 px-4">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-4 md:sticky top-10">
                        <div class="p-6">
                            <div class="mt-6 lg:px-4">
                                <h3 class=" text-lg font-semibold leading-normal mb-2 text-slate-700">
                                    {{ $patient->prenom }}
                                </h3>
                                <div class="text-slate-600 my-2">
                                    <span class="font-semibold mb-2 text-slate-700">Code de la demande :
                                    </span>{{ $patient->code }}
                                </div>
                                <div class="text-slate-600 my-2">
                                    <span class="font-semibold mb-2 text-slate-700">
                                        Profession :
                                    </span>
                                    {{ $patient->career }}
                                </div>
                                <div class="text-slate-600 my-2">
                                    @php
                                        $hosto = DB::table('requests')
                                            ->join('hospitals', 'hospitals.id', '=', 'requests.hospital_id')
                                            ->select('hospitals.name')
                                            ->where('code', $patient->request_code)
                                            ->first();
                                    @endphp
                                    <span class="font-semibold mb-2 text-slate-700">
                                        Hopital :
                                    </span>
                                    {{ $hosto->name }}
                                </div>
                                <div class="text-slate-600 my-2">
                                    <div class="justify-between">
                                        <span class="font-semibold mb-2 text-slate-700">
                                            Sexe : </span>
                                        {{ $patient->sex }}
                                    </div>
                                </div>
                                <div class="text-slate-600 my-2">
                                    <div class="justify-between"><span class="font-semibold mb-2 text-slate-700">Age
                                            :
                                        </span>{{ dateDiff(date('Y-m-d'), $patient->birthday) }}
                                        {{ ' ans' }}
                                    </div>
                                </div>
                                <div class="text-slate-600 my-2">
                                    <span class="font-semibold mb-2 text-slate-700">
                                        Traitement :
                                    </span>
                                    {{ $patient->treatment }}
                                </div>
                                <div class="text-slate-600 my-2">
                                    <span class="font-semibold mb-2 text-slate-700">
                                        Coût :
                                    </span>
                                    {{ number_format($patient->cost, 0, '', ' ') }}
                                </div>
                                <div class="text-slate-600 my-2">
                                    @php
                                        $gift = DB::table('gifts')
                                            ->select(DB::raw('SUM(amount) as total'))
                                            ->where('validrequest_id', $patient->request_id)
                                            ->first();
                                    @endphp
                                    <span class="font-semibold mb-2 text-slate-700">
                                        Déja recu :
                                    </span>
                                    {{ number_format($gift->total, 0, '', ' ') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-2/3 px-4">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-4">
                        <div class="p-6">
                            <h3
                                class="text:lg font-semibold leading-normal mb-2 text-slate-700 uppercase text-center">
                                Offrir une carte cadeau
                            </h3>
                            <a href="{{ route('gift.create', [$patient->id, 100]) }}">
                                <button type="button"
                                    class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-4 rounded-lg shadow hover:shadow-md outline-none focus:outline-none ease-linear m-4 transition-all duration-150">
                                    <i class="fas fa-gift"></i>
                                    100
                                </button>
                            </a>
                            <a href="{{ route('gift.create', [$patient->id, 200]) }}">
                                <button type="button"
                                    class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-4 rounded-lg shadow hover:shadow-md outline-none focus:outline-none ease-linear m-4 transition-all duration-150">
                                    <i class="fas fa-gift"></i>
                                    200
                                </button>
                            </a>
                            <a href="{{ route('gift.create', [$patient->id, 500]) }}">
                                <button type="button"
                                    class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-4 rounded-lg shadow hover:shadow-md outline-none focus:outline-none ease-linear m-4 transition-all duration-150">
                                    <i class="fas fa-gift"></i>
                                    500
                                </button>
                            </a>
                            <a href="{{ route('gift.create', [$patient->id, 1000]) }}">
                                <button type="button"
                                    class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-4 rounded-lg shadow hover:shadow-md outline-none focus:outline-none ease-linear m-4 transition-all duration-150">
                                    <i class="fas fa-gift"></i>
                                    1000
                                </button>
                            </a>
                            <a href="{{ route('gift.create', [$patient->id, 2000]) }}">
                                <button type="button"
                                    class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-4 rounded-lg shadow hover:shadow-md outline-none focus:outline-none ease-linear m-4 transition-all duration-150">
                                    <i class="fas fa-gift"></i>
                                    2000
                                </button>
                            </a>
                            <a href="{{ route('gift.create', [$patient->id, 'custom']) }}">
                                <button type="button"
                                    class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-4 rounded-lg shadow hover:shadow-md outline-none focus:outline-none m-4 ease-linear transition-all duration-150">
                                    <i class="fas fa-gift"></i>
                                    Autres
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
