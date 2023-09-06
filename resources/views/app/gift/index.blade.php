<x-app-layout>
    <div class="relative bg-slate-50">

        <div class="relative bg-pink-600 md:pt-32 pb-32 pt-12">
            <div class="px-4 md:px-10 mx-auto w-full text-center text-white">
                <h1 class="text-2xl font-bold">Liste des demandes</h1>
            </div>
        </div>
        <div class="px-4 md:px-10 mx-auto w-full -mt-24">
            <div class="flex flex-wrap">
                @forelse ($lists as $list)
                    <div class="w-full lg:w-1/4 md:w-4/12 px-4">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-4">
                            <div class="p-6">
                                <div class="mt-6">
                                    <h3 class="text-md font-semibold leading-normal mb-2 text-slate-700">
                                        {{ $list->fname_patient }}
                                    </h3>

                                    <div class="text-slate-600 my-2 text-sm">
                                       <span class="font-bold">Hopital : </span> {{ $list->hospital->name }}
                                    </div>

                                    <div class="text-slate-600 my-2 text-sm">
                                        <span class="font-bold">Traitement :</span> {{ $list->treatment }}
                                    </div>

                                    <div class="text-slate-600 my-2 text-sm">
                                        <span class="font-bold">Traitement :</span> {{ 'Coût : ' . number_format($list->cost, 0, '', ' ') }}
                                    </div>

                                    <div class="text-slate-600 my-2 text-sm">
                                        @php
                                            $gift = DB::table('gifts')
                                                ->select(DB::raw('SUM(amount) as total'))
                                                ->where('validrequest_id', $list->id)
                                                ->groupByRaw('validrequest_id')
                                                ->first();
                                        @endphp
                                        @if (isset($gift->total))
                                        <span class="font-bold">Montant déja récolté : </span> {{ number_format($gift->total, 0, '', ' ') }}
                                        @else
                                        <span class="font-bold">Montant déja récolté : </span>  0
                                        @endif
                                    </div>

                                    <div class="text-slate-600 my-2 text-sm flex justify-between">
                                        <div> <span class="font-bold">Sexe : </span> {{ $list->sex }} </div>
                                        <div> <span class="font-bold">Age : </span> {{ dateDiff(date('Y-m-d'), $list->birthday) }} {{ ' ans' }} </div>
                                    </div>

                                    <div class="text-center mt-4 w-full">
                                        <a href="{{ route('gift.show', [$list->id]) }}"
                                            class="w-64 bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
                                            Voir plus
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <span>Aucune données à afficher</span>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
