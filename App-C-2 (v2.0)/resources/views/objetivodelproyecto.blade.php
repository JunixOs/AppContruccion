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
                <div class="card-header">{{ __('Objetivo del proyecto') }}</div>

                    <div class="card-body" style="max-height: 80vh; overflow-y: scroll">
                        <p>
                            Antes de comenzar a hablar del proyecto en si, es mejor hacer un breve repaso por el impacto de aquellos problemas en los cuales nos centramos para desarrollar esta web
                        </p>
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
                                        <img src="{{ asset('/images/Desierto de Atacama.webp')}}" alt="El Desierto de Atacama, un cementerio de la moda rapida" class="imagen" style="width: 50vw;height:40vh">
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
                                        La contaminacion
                                    </h2>
                                </header>
                                <section>
                                    <p>

                                    </p>
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