<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl dark:text-gray-200 leading-tight">
            {{ __('Validado Por') }}
        </h2>
    </x-slot>

    @php
        $alfonso_title = "¡Una Herramienta Web Enfocada a la Productividad!";
        $alfonso_op = "Es una herramienta enfocada a reducir los tiempos y movimientos al momento de realizar una consulta médica, ayudando no solo a agilizar el flujo de atención a los pacientes, sino que también ayuda a la digitalización de los expedientes médicos y a llevar una registro de las consultas realizadas, otra de las grandes ventajas es la evaluación del consumo calórico y la recomendación de la alimentación requerida con menús detallados.";
    @endphp
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
                    <img class="rounded" src="img/damian.jpg" alt="damian">
                    <button onclick="opinion('damian')"
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
                    <img class="rounded" src="img/alejandra.jpg" alt="alejandra">
                    <button onclick="opinion('alejandra')"
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
                    <img class="rounded" src="img/cirenia.jpg" alt="cirenia">
                    <button onclick="opinion('cirenia')"
                        class="border p-2 border-orange-700 bg-orange-700  text-bold uppercase text-xs sm:w-52 w-32 rounded absolute mx-2 mb-2 hover:bg-orange-600 text-slate-200">
                        Opinión
                    </button>
                </div>

                <div class="rounded w-full p-2 flex items-end relative">
                    <img class="rounded" src="img/edgar.jpg" alt="edgar">
                    <button onclick="opinion('edgar')"
                        class="border p-2 border-orange-700 bg-orange-700  text-bold uppercase text-xs sm:w-52 w-32 rounded absolute mx-2 mb-2 hover:bg-orange-600 text-slate-200">
                        Opinión
                    </button>
                </div>

                <div class="rounded w-full p-2 flex items-end relative">
                    <img class="rounded" src="img/leonel.jpg" alt="leonel">
                    <button onclick="opinion('leonel')"
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

                            switch(name) {
                                case 'alfonso':
                                    var title = {{ Js::from( $alfonso_title )}};
                                    var opinion = {{ Js::from($alfonso_op) }};
                                    break;
                                default:
                                    var title = "No existe un título aún";
                                    var opinion = "No existe una opinión aún";
                                    break
                            }

                            Swal.fire({
                                title: title,
                                text: opinion,
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
