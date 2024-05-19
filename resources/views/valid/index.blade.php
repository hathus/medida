<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl dark:text-gray-200 leading-tight">
            {{ __('Validado Por') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid sm:grid-cols-2">
                <div class="rounded w-full p-2 flex items-end relative">
                    <img class="rounded" src="img/ruiz.jpg" alt="ruiz">
                    <button onclick="opinion('ruiz')"
                        class="border p-2 border-orange-700 bg-orange-700  text-bold uppercase text-xs sm:w-52 w-32 rounded absolute mx-2 mb-2 hover:bg-orange-600 text-slate-200">
                        Opinión
                    </button>
                </div>

                <div class="rounded w-full p-2 flex items-end relative">
                    <img class="rounded" src="img/torres.jpg" alt="torres">
                    <button onclick="opinion('torres')"
                        class="border p-2 border-orange-700 bg-orange-700  text-bold uppercase text-xs sm:w-52 w-32 rounded absolute mx-2 mb-2 hover:bg-orange-600 text-slate-200">
                        Opinión
                    </button>
                </div>


                <div class="rounded w-full p-2 flex items-end relative">
                    <img class="rounded" src="img/frank.jpg" alt="frank">
                    <button onclick="opinion('frank')"
                        class="border p-2 border-orange-700 bg-orange-700  text-bold uppercase text-xs sm:w-52 w-32 rounded absolute mx-2 mb-2 hover:bg-orange-600 text-slate-200">
                        Opinión
                    </button>
                </div>

                <div class="rounded w-full p-2 flex items-end relative">
                    <img class="rounded" src="img/cirenia_b.jpg" alt="cirenia_b">
                    <button onclick="opinion('cirenia_b')"
                        class="border p-2 border-orange-700 bg-orange-700  text-bold uppercase text-xs sm:w-52 w-32 rounded absolute mx-2 mb-2 hover:bg-orange-600 text-slate-200">
                        Opinión
                    </button>
                </div>

                <div class="rounded w-full p-2 flex items-end relative">
                    <img class="rounded" src="img/alejandra.jpg" alt="alejandra">
                    <button onclick="opinion('alejandra')"
                        class="border p-2 border-orange-700 bg-orange-700  text-bold uppercase text-xs sm:w-52 w-32 rounded absolute mx-2 mb-2 hover:bg-orange-600 text-slate-200">
                        Opinión
                    </button>
                </div>

                <div class="rounded w-full p-2 flex items-end relative">
                    <img class="rounded" src="img/damian.jpg" alt="damian">
                    <button onclick="opinion('damian')"
                        class="border p-2 border-orange-700 bg-orange-700  text-bold uppercase text-xs sm:w-52 w-32 rounded absolute mx-2 mb-2 hover:bg-orange-600 text-slate-200">
                        Opinión
                    </button>
                </div>

                <div class="rounded w-full p-2 flex items-end relative">
                    <img class="rounded" src="img/serafin.jpg" alt="serafin">
                    <button onclick="opinion('serafin')"
                        class="border p-2 border-orange-700 bg-orange-700  text-bold uppercase text-xs sm:w-52 w-32 rounded absolute mx-2 mb-2 hover:bg-orange-600 text-slate-200">
                        Opinión
                    </button>
                </div>

                <div class="rounded w-full p-2 flex items-end relative">
                    <img class="rounded" src="img/alfonso.jpg" alt="alfonso">
                    <button onclick="opinion('alfonso')"
                        class="border p-2 border-orange-700 bg-orange-700  text-bold uppercase text-xs sm:w-52 w-32 rounded absolute mx-2 mb-2 hover:bg-orange-600 text-slate-200">
                        Opinión
                    </button>
                </div>

                @push('scripts')
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                    <script>
                        function opinion(name) {
                            Swal.fire({
                                title: "Sweet!",
                                text: "mi opinión aquí",
                                imageUrl: "img/" + name + ".jpg",
                                imageWidth: 500,
                                imageAlt: name,
                                confirmButtonColor: "#3085d6",
                                confirmButtonText: "Listo!",
                            });
                        }
                    </script>
                @endpush
            </div>
        </div>
    </div>
</x-app-layout>
