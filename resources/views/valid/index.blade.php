<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight dark:text-gray-200">
            {{ __('Validado Por') }}
        </h2>
    </x-slot>

    @php
        $alfonso_title = "¡Una herramienta web enfocada a la productividad!";
        $alfonso_op = "Es una herramienta enfocada a reducir los tiempos y movimientos al momento de realizar una consulta médica, ayudando no solo a agilizar el flujo de atención a los pacientes, sino que también ayuda a la digitalización de los expedientes médicos y a llevar una registro de las consultas realizadas, otra de las grandes ventajas es la evaluación del consumo calórico y la recomendación de la alimentación requerida con menús detallados.";

        $manuel_felix_title = "¡Definitivamente ayuda!";
        $manuel_felix_op = "Definitivamente ayuda a qué nuestro organismo coma lo necesario y nutritivo ,obedeciendo las porciones sugeridas y balanceadas.";

        $leonel_title = "¡Una herramienta altruista!";
        $leonel_op = "La mejor herramienta de autodiagnóstico médico; lo mejor de todo, ALTRUISTA.";

        $frank_title = "¡Una Herramienta de Bastante Utilidad!";
        $frank_op = "Considero que es una herramienta de bastante utilidad para la atención a pacientes.";

        $damian_title = "¡Xción La Medida Exacta es una valiosa herramienta!";
        $damian_op = "Xción la medida exacta es una valiosa herramienta, que en manos de profesionales de la salud: nutriólogos, médicos familiares e internista contribuye a una mejor evaluación del estado nutricional de nuestros pacientes. Nos permite obtener datos valiosos de una forma sencilla y nos permite ofrecerle al paciente una variedad de menús que no sólo satisfagan sus gustos sino que también contribuye al mejoramiento de su estado nutricional.

        En mi consideración está herramienta debería generalizarse en todas las instalaciones de salud. Para de está forma evaluar y validar su eficacia, accesibilidad, y su factibilidad.";

        $edgar_title = "Es una herramienta muy útil¡";
        $edgar_op = "Es una herramienta muy útil que optimiza tiempos y q además te proporciona ya una sugerencia de dieta por semana.";
    @endphp
    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="grid sm:grid-cols-2">
                <div class="flex relative items-end p-2 w-full rounded">
                    <img class="rounded" src="img/ruiz.jpg" alt="ruiz">
                    <button onclick="opinion('ruiz')"
                        class="absolute p-2 mx-2 mb-2 w-32 text-xs uppercase bg-orange-700 rounded border border-orange-700 text-bold sm:w-52 hover:bg-orange-600 text-slate-200">
                        Opinión
                    </button>
                </div>

                <div class="flex relative items-end p-2 w-full rounded">
                    <img class="rounded" src="img/damian.jpg" alt="damian">
                    <button onclick="opinion('damian')"
                        class="absolute p-2 mx-2 mb-2 w-32 text-xs uppercase bg-orange-700 rounded border border-orange-700 text-bold sm:w-52 hover:bg-orange-600 text-slate-200">
                        Opinión
                    </button>
                </div>


                <div class="flex relative items-end p-2 w-full rounded">
                    <img class="rounded" src="img/torres.jpg" alt="torres">
                    <button onclick="opinion('torres')"
                        class="absolute p-2 mx-2 mb-2 w-32 text-xs uppercase bg-orange-700 rounded border border-orange-700 text-bold sm:w-52 hover:bg-orange-600 text-slate-200">
                        Opinión
                    </button>
                </div>

                <div class="flex relative items-end p-2 w-full rounded">
                    <img class="rounded" src="img/manuel_felix.jpg" alt="torres">
                    <button onclick="opinion('manuel_felix')"
                        class="absolute p-2 mx-2 mb-2 w-32 text-xs uppercase bg-orange-700 rounded border border-orange-700 text-bold sm:w-52 hover:bg-orange-600 text-slate-200">
                        Opinión
                    </button>
                </div>

                <div class="flex relative items-end p-2 w-full rounded">
                    <img class="rounded" src="img/alejandra.jpg" alt="alejandra">
                    <button onclick="opinion('alejandra')"
                        class="absolute p-2 mx-2 mb-2 w-32 text-xs uppercase bg-orange-700 rounded border border-orange-700 text-bold sm:w-52 hover:bg-orange-600 text-slate-200">
                        Opinión
                    </button>
                </div>

                <div class="flex relative items-end p-2 w-full rounded">
                    <img class="rounded" src="img/frank.jpg" alt="frank">
                    <button onclick="opinion('frank')"
                        class="absolute p-2 mx-2 mb-2 w-32 text-xs uppercase bg-orange-700 rounded border border-orange-700 text-bold sm:w-52 hover:bg-orange-600 text-slate-200">
                        Opinión
                    </button>
                </div>

                <div class="flex relative items-end p-2 w-full rounded">
                    <img class="rounded" src="img/cirenia.jpg" alt="cirenia">
                    <button onclick="opinion('cirenia')"
                        class="absolute p-2 mx-2 mb-2 w-32 text-xs uppercase bg-orange-700 rounded border border-orange-700 text-bold sm:w-52 hover:bg-orange-600 text-slate-200">
                        Opinión
                    </button>
                </div>

                <div class="flex relative items-end p-2 w-full rounded">
                    <img class="rounded" src="img/edgar.jpg" alt="edgar">
                    <button onclick="opinion('edgar')"
                        class="absolute p-2 mx-2 mb-2 w-32 text-xs uppercase bg-orange-700 rounded border border-orange-700 text-bold sm:w-52 hover:bg-orange-600 text-slate-200">
                        Opinión
                    </button>
                </div>

                <div class="flex relative items-end p-2 w-full rounded">
                    <img class="rounded" src="img/leonel.jpg" alt="leonel">
                    <button onclick="opinion('leonel')"
                        class="absolute p-2 mx-2 mb-2 w-32 text-xs uppercase bg-orange-700 rounded border border-orange-700 text-bold sm:w-52 hover:bg-orange-600 text-slate-200">
                        Opinión
                    </button>
                </div>

                <div class="flex relative items-end p-2 w-full rounded">
                    <img class="rounded" src="img/alfonso.jpg" alt="alfonso">
                    <button onclick="opinion('alfonso')"
                        class="absolute p-2 mx-2 mb-2 w-32 text-xs uppercase bg-orange-700 rounded border border-orange-700 text-bold sm:w-52 hover:bg-orange-600 text-slate-200">
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
                                case 'manuel_felix':
                                    var title = {{ Js::from( $manuel_felix_title ) }};
                                    var opinion = {{ Js::from($manuel_felix_op )}};
                                    break;
                                case 'leonel':
                                    var title = {{ Js::from( $leonel_title )}};
                                    var opinion = {{ Js::from( $leonel_op )}};
                                    break;
                                case 'frank':
                                    var title = {{ Js::from( $frank_title )}};
                                    var opinion = {{ Js::from( $frank_op )}};
                                    break;
                                case 'damian':
                                    var title = {{ Js::from( $damian_title )}};
                                    var opinion = {{ Js::from( $damian_op )}};
                                    break;
                                case 'edgar':
                                    var title = {{ Js::from( $edgar_title )}};
                                    var opinion = {{ Js::from( $edgar_op )}};
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
