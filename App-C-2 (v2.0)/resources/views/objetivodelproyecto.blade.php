@extends('layouts.app')

@section('content')
<style>
    .centrar-objeto{
        display: grid;
        align-content: center;
    }
    .imagen{
        background-size: cover;
        margin: 0 auto;
    }
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
                <div class="card-header">{{ __('¿Cuanto contaminamos?') }}</div>

                    <div class="card-body" style="max-height: 80vh; overflow-y: scroll">
                        <header>
                            <h1 class="fuente-principal">La contaminacion que genera nuestro consumo</h1>
                        </header>
                        <ul>
                            <li>
                                <header>
                                    <h2 class="fuente-secundaria">
                                        La contaminacion de la industria textil
                                    </h2>
                                </header>
                                <section>
                                    <p>
                                        Segun estudios y cifras recientes, Al año se fabrican 150.000 millones de prendas. Es decir, 62 millones de toneladas de ropa y complementos.
                                        De toda esta cantidad, el 30% se venden con un precio menor al precio original, y el otro 30% jamas se vende.
                                    </p>
                                    <p>
                                        460.000 millones de dólares es lo que la economía mundial pierde cada año por las prendas que la industria y la gente tira cuando podrían seguir usándolas perfectamente.
                                        Se estima que el 50% de la ropa que fabrican las cadenas de fast fashion acaba en la basura en menos de un año, lo cual se traduce en 12.8 millones de toneladas de desperdicios que van a parar a vertederos de todo el mundo.

                                        En la basura o en las incineradoras, mucha de esta ropa, que no encuentra salida en otros mercados o como donativos a los desfavorecidos, acaba generando nuevas toneladas de CO2 al ser quemada. Segun estimaciones, solo quemar un kilogramo (kg) de CO2
                                        supone generar 1.36 kilos de dióxido de carbono por megavatio hora. Esto, comparado con otros combustibles, es contaminante que quemar carbón (1.13 kilos por megavatio hora) o gas natural (61 kilos por megavatio hora).
                                    </p>
                                    <p>
                                        Y, si las predicciones de consumo y población se mantienen, pasaremos de producir 62.000 millones de toneladas de ropa a producir 102.000.
                                        El occidental medio solo se pone una prenda entre 7 y 10 veces antes de tirarla o tenerla guardada acumulando polvo.
                                        A día de hoy, la industria textil es la segunda más contaminante del mundo, por delante de la ganadera y sólo por detrás de la petrolera.
                                        Ella sola es la responsable del 20% de todos los tóxicos que se vierten en el agua. 
                                    </p>
                                    <div class="centrar-objeto">
                                        <img src="{{ asset('/images/Desierto de Atacama.webp') }}" alt="El Desierto de Atacama, un cementerio de la moda rapida" class="imagen" style="width: 50vw;height:50vh">
                                    </div>
                                    <footer>
                                        <small>
                                            Recuperado de: <a href="https://www.xataka.com/magnet/150-000-millones-prendas-ropa-al-ano-otras-cifras-que-tiendas-no-quieren-que-pienses">150.000 millones de prendas de ropa al año (y otras cifras en las que las tiendas no quieren que pienses)</a>

                                        </small>
                                    </footer>
                                </section>
                            </li>
                            <li>
                                <header>
                                    <h2 class="fuente-secundaria" style="padding-top: 20px">
                                        La contaminacion de los juguetes
                                    </h2>
                                </header>
                                <section>
                                    <p>
                                        La industria del juguete es una de las más importantes y lucrativas a nivel mundial, derivando en impactos socioeconómicos de carácter positivo para los países en donde están instaladas las principales fábricas; 
                                        pero también es una  de las  industrias  que  genera  contaminación ambiental y riesgos para la salud humana, principalmente por  la utilización de plásticos  y otras sustancias. Si bien se han hecho múltiples esfuerzos por reducir, reutilizar y reciclar, 
                                        además  de  que  algunas  empresas  importantes  en  este  rubro  se  han  propuesto  metas  y compromisos con el cuidado del ambiente; el incremento continuo de la población humana en el mundo, actualmente estimada en unos 8 mil  millones de habitantes, obliga a  que se inviertan más recursos en investigación, innovación y desarrollo (I+I+D), frente al escenario presente y futuro.
                                    </p>
                                    <p>
                                        Cerca del 90 % de todos los juguetes producidos son completamente  de plástico,  40 %  son del tipo  disruptor hormonal,  interfiriendo en  el sistema endocrino, mimetizándose con hormonas y alterando el equilibrio de los procesos internos del cuerpo.
                                    </p>
                                    <p>
                                        La mayor preocupación de la industria del juguete en materia ambiental,  consiste en la constante generación de contaminantes; dado que los plásticos perduran en el ecosistema por mucho más tiempo del que fueron utilizados, comprometiendo la vida de por lo menos 700 especies.
                                        Un juguete icónico es el  balón de  fútbol,  del  cual se venden en el  mundo más  de  40 millones de unidades al año; sin embargo, desde la obtención de la materia prima hasta la fabricación, representa el 65% de su huella de carbono, que se traduce en unos 3,5 kg CO2 equivalente por unidad (El Periódico, 2022). 
                                        En Francia, por ejemplo, se estima que cada año se tiran a la basura unos 40 millones de juguetes, porque al dañarse no tienen reparación o no venden los  repuestos por  separado, para poder arreglarlos y  prolongar su  uso
                                    </p>
                                    <p>
                                        Otros  contaminantes  importantes  son  los  metales  pesados  y  otras sustancias,  siendo  el antimonio,  bario, bromo,  cadmio,  cromo, plomo  y  selenio  los  más comunes. La  presencia de  metales pesados en el ambiente y en los alimentos puede derivar en intoxicaciones, provocando daños irreparables en la salud humana y animal, como efectos teratogénicos, cáncer o la muerte. 
                                    </p>
                                    <div class="centrar-objeto">
                                        <img src="{{asset('images/Contaminacion juguetes.jpeg')}}" alt="Contaminacion de los juguetes" class="imagen" style="width: 50vw;height:50vh">
                                    </div>
                                    <footer>
                                        <small>
                                            Recuperado de: <a href="https://www.researchgate.net/publication/370375242_JUGUETES_DE_PLASTICO_CONTAMINACION_AMBIENTAL_Y_RIESGOS_PARA_LA_SALUD_HUMANA">JUGUETES DE PLÁSTICO: CONTAMINACIÓN AMBIENTAL Y RIESGOS PARA LA SALUD HUMANA</a>
                                        </small>
                                    </footer>
                                </section>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection