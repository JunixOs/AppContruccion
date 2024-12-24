@extends('layouts.app')

@section('content')
<style>
    .fuente-principal{
        text-align: center;
        font-size: 30px;
        font-family:Times New Roman;
        font-style: italic; 
        font-weight: bold;
        padding-bottom: 20px;
    }
    .fuente-secundaria{
        font-size: 20px;
        font-family:Times New Roman;
        font-style: oblique; 
        font-weight: lighter;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="width: 2100px">
            <div class="card">
                <div class="card-header">{{ __('Cuidado de juguetes') }}</div>

                    <div class="card-body" style="max-height: 80vh; overflow-y: scroll">
                        <header>
                            <h1 class="fuente-principal">Algunos consejos para el cuidado de los juguetes</h1>
                        </header>
                        <ol>
                            <li>
                                <header>
                                    <h2 class="fuente-secundaria">
                                        Limpieza regular
                                    </h2>
                                </header>
                                <section style="padding-bottom: 35px">
                                    Limpia los juguetes de tus hijos con frecuencia para evitar que acumulen suciedad, bacterias o gérmenes. Usa un paño húmedo para los juguetes de plástico y metal, y sigue las instrucciones del fabricante para los de tela. Algunos juguetes pueden lavarse a máquina, pero asegúrate de verificar las etiquetas antes.
                                </section>
                            </li>
                            <li>
                                <header>
                                    <h2 class="fuente-secundaria">
                                        Almacenaje adecuado
                                    </h2>
                                </header>
                                <section style="padding-bottom: 35px">
                                    Guarda los juguetes en contenedores, cajas o estanterías para mantenerlos organizados y evitar que se pierdan. Esto también previene que se dañen, ya que muchos juguetes pueden sufrir desgaste si están tirados por el suelo o amontonados de manera desordenada.
                                </section>
                            </li>
                            <li>
                                <header>
                                    <h2 class="fuente-secundaria">
                                        Revisión periódica de piezas pequeñas
                                    </h2>
                                </header>
                                <section style="padding-bottom: 35px">
                                    Revisa regularmente los juguetes en busca de piezas sueltas, rotas o dañadas que puedan representar un riesgo para la seguridad de tus hijos. Si encuentras algo que ya no está en buen estado, repararlo o desecharlo inmediatamente para evitar accidentes.
                                </section>
                            </li>
                            <li>
                                <header>
                                    <h2 class="fuente-secundaria">
                                        Evita la exposición excesiva al sol o humedad
                                    </h2>
                                </header>
                                <section style="padding-bottom: 35px">
                                    Los juguetes de plástico o madera pueden deformarse o descolorecerse si se exponen demasiado tiempo al sol directo. Además, la humedad puede afectar a ciertos materiales. Intenta almacenarlos en un lugar seco y fresco para prolongar su vida útil.
                                </section>
                            </li>
                            <li>
                                <header>
                                    <h2 class="fuente-secundaria">
                                        Educación sobre el cuidado
                                    </h2>
                                </header>
                                <section style="padding-bottom: 35px">
                                    Enseña a tus hijos a cuidar sus juguetes, explicándoles la importancia de no tirarlos o dejarlos en el suelo. Incentiva la responsabilidad sobre el almacenamiento y el manejo adecuado, de modo que ellos mismos puedan ayudar a mantener sus juguetes en buen estado.
                                </section>
                            </li>
                            <li>
                                <header>
                                    <h2 class="fuente-secundaria">
                                        Desinfecta con productos seguros
                                    </h2>
                                </header>
                                <section style="padding-bottom: 35px">
                                    Si bien es importante limpiar los juguetes, también es recomendable desinfectarlos de vez en cuando, especialmente los que los niños ponen en la boca. Utiliza productos de limpieza seguros y recomendados para niños, como toallitas desinfectantes sin productos tóxicos o soluciones naturales.
                                </section>
                            </li>
                            <li>
                                <header>
                                    <h2 class="fuente-secundaria">
                                        Rotación de juguetes
                                    </h2>
                                </header>
                                <section style="padding-bottom: 35px">
                                    Si tienes muchos juguetes, considera la posibilidad de rotarlos. Guarda algunos y luego, de vez en cuando, cambia los juguetes disponibles. Esto no solo mantiene el interés de tus hijos, sino que también ayuda a que los juguetes se desgasten de manera más lenta.
                                </section>
                            </li>
                            <li>
                                <header>
                                    <h2 class="fuente-secundaria">
                                        Evita juguetes con piezas muy pequeñas
                                    </h2>
                                </header>
                                <section style="padding-bottom: 35px">
                                    Si tienes niños pequeños, es fundamental evitar juguetes con piezas pequeñas que puedan representar un peligro de asfixia. Siempre revisa la edad recomendada en las etiquetas y selecciona juguetes adecuados para su edad.
                                </section>
                            </li>
                            <li>
                                <header>
                                    <h2 class="fuente-secundaria">
                                        Protege los juguetes al aire libre
                                    </h2>
                                </header>
                                <section style="padding-bottom: 35px">
                                    Si tus hijos juegan con juguetes en el exterior, como pelotas o bicicletas, asegúrate de guardarlos en un lugar protegido cuando no los usen. El sol, la lluvia o el frío pueden deteriorar materiales como el plástico o el caucho rápidamente.
                                </section>
                            </li>
                            <li>
                                <header>
                                    <h2 class="fuente-secundaria">
                                        Reparación antes de reemplazo
                                    </h2>
                                </header>
                                <section style="padding-bottom: 35px">
                                    Si un juguete se rompe o tiene piezas faltantes, en lugar de descartarlo de inmediato, intenta repararlo. Muchas veces, un simple arreglo puede devolverle la funcionalidad al juguete y darle más tiempo de vida. Si el juguete tiene piezas de repuesto disponibles, asegúrate de tenerlas a mano.
                                </section>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection