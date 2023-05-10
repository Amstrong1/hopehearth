<x-app-layout>
    <div class="relative bg-blueGray-50">
        <!-- Header -->
        <div class="relative bg-pink-600 md:pt-32 pb-32 pt-12">
            <div class="px-4 md:px-10 mx-auto w-full">
                <h1 class="text-white font-bold m-4">Patient : {{ $req_valid->nom . ' ' . $req_valid->prenom }}</h1>
                @if ($req_valid !== null)
                    <div>
                        <!-- Card stats -->
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4">
                                        <div class="flex flex-wrap">
                                            <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                                <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                                                    Somme demandé
                                                </h5>
                                                <span class="font-semibold text-xl text-blueGray-700">
                                                    {{ $req->cost }}
                                                </span>
                                            </div>
                                            <div class="relative w-auto pl-4 flex-initial">
                                                <div
                                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-lightBlue-500">
                                                    <i class="far fa-chart-bar"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4">
                                        <div class="flex flex-wrap">
                                            <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                                <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                                                    Total recus
                                                </h5>
                                                <span class="font-semibold text-xl text-blueGray-700">
                                                    {{ number_format($gift_sum->total, 0, '', ' ') }}
                                                </span>
                                            </div>
                                            <div class="relative w-auto pl-4 flex-initial">
                                                <div
                                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-orange-500">
                                                    <i class="fas fa-chart-pie"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4">
                                        <div class="flex flex-wrap">
                                            <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                                <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                                                    Nombre de dons recus
                                                </h5>
                                                <span class="font-semibold text-xl text-blueGray-700">
                                                    {{ $gift_count }}
                                                </span>
                                            </div>
                                            <div class="relative w-auto pl-4 flex-initial">
                                                <div
                                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-pink-500">
                                                    <i class="fas fa-users"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                    <div class="flex-auto p-4">
                                        <div class="flex flex-wrap">
                                            <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                                <form action="{{ route('request.end') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" value="{{ $req_valid->code }}" name="code">
                                                    <input type="hidden" value="{{ $req->hospital_id }}" name="hospital">
                                                    <input type="hidden"
                                                        value="{{ number_format($gift_sum->total, 0, '', ' ') }}"
                                                        name="amount">
                                                    <button type="submit"
                                                        class="bg-red-500 text-white text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 m-1 ease-linear transition-all duration-150">
                                                        retirer
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="relative w-auto pl-4 flex-initial">
                                                <div
                                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500">
                                                    <i class="fas fa-exclamation-triangle"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-sm text-blueGray-400 mt-2">
                                            <small class="">
                                                En lancant un retrait la demande d'aide est annulé
                                            </small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if ($gifts->count() !== 0)
                        <div class="md:px-10 mx-auto w-full">
                            <div class="flex flex-wrap mt-4">
                                <div class="w-full mb-12">
                                    <div
                                        class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
                                        <div class="rounded-t mb-0 px-4 py-3 border-0">
                                            <div class="flex flex-wrap items-center">
                                                <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                                                    <h3 class="font-semibold text-lg text-blueGray-700">
                                                        Liste des dons
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block w-full overflow-x-auto">
                                            @foreach ($gifts as $gift)
                                                <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                                    <div
                                                        class="relative flex flex-col min-w-0 break-words bg-red-500 rounded mb-6 m-2 shadow-lg">
                                                        <div class="flex-auto p-4">
                                                            <div class="flex flex-wrap">
                                                                <div
                                                                    class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                                                    <span class="font-semibold text-md text-white">
                                                                        {{ 'Montant : ' . $gift->amount }}
                                                                    </span>
                                                                </div>
                                                                <div class="relative w-auto pl-4 flex-initial">
                                                                    <div
                                                                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-white">
                                                                        <i class="fas fa-gift text-red-500"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p class="text-sm text-white mt-2">
                                                                <small class="">
                                                                    {{ 'Date : ' . $gift->created_at }}
                                                                </small>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
