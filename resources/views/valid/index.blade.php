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

        $leonel_title = "Mejora la atención médica, desde la creación de los expedientes clínicos.";
        $leonel_op = "La implementación de esta herramienta utilizando las tecnologías de la información, ha fomentado un ambiente de innovación dentro de nuestro hospital, nos ha impulsado a explorar y adoptar otras tecnologías que puedan complementar y mejorar aún más la atención médica, desde la creación de los expedientes clínicos, la secuencia de las citas médicas hasta la sugerencia de menús alimenticios. La colaboración entre los médicos especialistas ha sido fundamental para maximizar los beneficios de Xción: La Medida Exacta.";

        $frank_title = "¡Una Herramienta de Bastante Utilidad!";
        $frank_op = "Considero que es una herramienta de bastante utilidad para la atención a pacientes.";

        $damian_title = "¡Xción La Medida Exacta es una valiosa herramienta!";
        $damian_op = "Xción la medida exacta es una valiosa herramienta, que en manos de profesionales de la salud: nutriólogos, médicos familiares e internista contribuye a una mejor evaluación del estado nutricional de nuestros pacientes. Nos permite obtener datos valiosos de una forma sencilla y nos permite ofrecerle al paciente una variedad de menús que no sólo satisfagan sus gustos sino que también contribuye al mejoramiento de su estado nutricional.

        En mi consideración está herramienta debería generalizarse en todas las instalaciones de salud. Para de está forma evaluar y validar su eficacia, accesibilidad, y su factibilidad.";

        $edgar_title = "Es una herramienta muy útil¡";
        $edgar_op = "Es una herramienta muy útil que optimiza tiempos y q además te proporciona ya una sugerencia de dieta por semana.";

        $cirenia_title = "Optimiza la eficiencia en la gestión de la atención médica.";
        $cirenia_op = "Al digitalizar y centralizar los datos de los pacientes, facilita el acceso rápido a la información médica relevante, ahorrando tiempo valioso tanto para los médicos como para el personal administrativo. Este acceso inmediato a la información permite una toma de decisiones más rápida y fundamentada, lo que se traduce en una atención más ágil y efectiva para los pacientes.";

        $alejandra_title = "Permite a los profesionales de la salud realizar diagnósticos más precisos";
        $alejandra_op = "Uno de los beneficios más destacados es su capacidad para mejorar la precisión en la evaluación de los índices corporales esenciales. La herramienta proporciona mediciones exactas y consistentes, lo que permite a los profesionales de la salud realizar diagnósticos más precisos y, en consecuencia, diseñar planes de tratamiento más efectivos. Esta precisión no solo mejora los resultados clínicos, sino que también reduce significativamente el margen de error humano.";

        $torres_title = "Ha revolucionado la manera en que gestionamos y tratamos a nuestros pacientes";
        $torres_op = "Puedo afirmar que la herramienta Porción: La Medida Exacta ha aportado innumerables beneficios a nuestra práctica clínica diaria. Esta innovadora solución tecnológica ha revolucionado la manera en que gestionamos y tratamos a nuestros pacientes, especialmente aquellos con enfermedades crónicas como la diabetes tipo II, hipertensión y desnutrición.";

        $ruiz_title = "Representa un avance significativo en la modernización de los servicios médicos en el Hospital General de Calpulalpan";
        $ruiz_op = "Su impacto positivo en la precisión diagnóstica, la eficiencia operativa y la personalización de la atención médica es innegable, y augura un futuro prometedor en la mejora continua de la calidad de vida de nuestros pacientes. Como especialista, confío plenamente en el potencial de esta herramienta para seguir transformando la práctica médica y fortaleciendo el vínculo entre tecnología y medicina.";

        $langarica_title = "La personalización de los planes de tratamiento es otro beneficio crucial de esta herramienta.";
        $langarica_op = "Porción: La Medida Exacta permite adaptar las recomendaciones dietéticas y los planes de manejo de la enfermedad a las necesidades individuales de cada paciente, teniendo en cuenta sus características particulares y condiciones de salud. Esta personalización no solo mejora la adherencia al tratamiento, sino que también aumenta la satisfacción del paciente al recibir una atención más alineada con sus expectativas y requerimientos personales. Desde una perspectiva operativa, la herramienta también contribuye a la optimización de los recursos del hospital. Al automatizar muchos de los procesos administrativos y clínicos, libera tiempo y recursos que pueden ser redirigidos hacia otras áreas críticas del cuidado de la salud. Esta eficiencia operativa se traduce en una mejor utilización de los recursos y una reducción de costos a largo plazo.";
    @endphp
    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="grid sm:grid-cols-3">
                <div class="flex relative items-end p-2 w-full rounded">
                    <img class="rounded" src="img/langarica.jpg" alt="langarica">
                    <button onclick="opinion('langarica')"
                        class="absolute p-2 mx-2 mb-2 w-32 text-xs uppercase bg-orange-700 rounded border border-orange-700 text-bold sm:w-52 hover:bg-orange-600 text-slate-200">
                        Opinión
                    </button>
                </div>
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
                                case 'langarica':
                                    var title = {{ Js::from( $langarica_title )}};
                                    var opinion = {{ Js::from( $langarica_op )}};
                                    break;
                                case 'ruiz':
                                    var title = {{ Js::from( $ruiz_title )}};
                                    var opinion = {{ Js::from( $ruiz_op )}};
                                    break;
                                case 'torres':
                                    var title = {{ Js::from( $torres_title )}};
                                    var opinion = {{ Js::from( $torres_op )}};
                                    break;
                                case 'alejandra':
                                    var title = {{ Js::from( $alejandra_title )}};
                                    var opinion = {{ Js::from( $alejandra_op )}};
                                    break;
                                case 'cirenia':
                                    var title = {{ Js::from( $cirenia_title )}};
                                    var opinion = {{ Js::from( $cirenia_op )}};
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
                                confirmButtonText: "Cerrar",
                            });
                        }
                    </script>
                @endpush
            </div>
        </div>
    </div>
</x-app-layout>
