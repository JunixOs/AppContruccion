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
                <div class="card-header">{{ __('Cuidado de prendas') }}</div>

                    <div class="card-body" style="max-height: 80vh; overflow-y: scroll">
                        <header>
                            <h1 class="fuente-principal">Algunos consejos para el cuidado de la ropa</h1>
                        </header>
                        <ol>
                            <li>
                                <header>
                                    <h2 class="fuente-secundaria">
                                        Lee las etiquetas de cuidado
                                    </h2>
                                </header>
                                <section style="padding-bottom: 35px">
                                    Siempre revisa las instrucciones de lavado en las etiquetas de tus prendas. 
                                    Estas indican la temperatura del agua, el tipo de ciclo de lavado y si la prenda necesita un tratamiento especial como lavado a mano o 
                                    secado en secadora.
                                </section>
                            </li>
                            <li>
                                <header>
                                    <h2 class="fuente-secundaria">
                                        Lava con agua fría y a bajas revoluciones
                                    </h2>
                                </header>
                                <section style="padding-bottom: 35px">
                                    El agua fría ayuda a preservar los colores y las fibras de las prendas, evitando que se desgasten o encojan. 
                                    Además, utiliza un ciclo de lavado suave o de baja velocidad para no dañar las telas delicadas.
                                </section>
                            </li>
                            <li>
                                <header>
                                    <h2 class="fuente-secundaria">
                                        Usa detergente adecuado
                                    </h2>
                                </header>
                                <section style="padding-bottom: 35px">
                                    Elige detergentes suaves y específicos para el tipo de prenda o tejido que estás lavando (como detergentes para ropa de color o para prendas delicadas). 
                                    Esto ayuda a mantener la calidad de la ropa por más tiempo.
                                </section>
                            </li>
                            <li>
                                <header>
                                    <h2 class="fuente-secundaria">
                                        Secado al aire
                                    </h2>
                                </header>
                                <section style="padding-bottom: 35px">
                                    Evita usar la secadora con frecuencia, ya que el calor excesivo puede debilitar las fibras de las prendas, haciendo que se desgasten más rápido. Lo ideal es colgar la ropa en un lugar fresco y seco para que se airee de forma natural.
                                </section>
                            </li>
                            <li>
                                <header>
                                    <h2 class="fuente-secundaria">
                                        Almacenaje adecuado
                                    </h2>
                                </header>
                                <section style="padding-bottom: 35px">
                                    Guarda tus prendas en un lugar seco, fresco y oscuro. Usa perchas para prendas como camisas y blusas, y dobla aquellas que puedan perder su forma si las cuelgas. 
                                    Utiliza fundas de tela para las prendas más delicadas, como abrigos de lana, para protegerlas del polvo y la humedad.
                                </section>
                            </li>
                            <li>
                                <header>
                                    <h2 class="fuente-secundaria">
                                        Evita el exceso de lavado
                                    </h2>
                                </header>
                                <section style="padding-bottom: 35px">
                                    No laves tus prendas después de cada uso, a menos que estén muy sucias. A menudo, ventilar las prendas o dejarlas reposar entre usos es suficiente. 
                                    Lavar en exceso desgasta las fibras y hace que la ropa pierda su forma y color más rápido.
                                </section>
                            </li>
                            <li>
                                <header>
                                    <h2 class="fuente-secundaria">
                                        Cierra cremalleras y botones antes de introducirlas en la lavadora
                                    </h2>
                                </header>
                                <section style="padding-bottom: 35px">
                                    Antes de poner las prendas en la lavadora, asegúrate de cerrar cremalleras, botones o ganchos. Esto evita que se enganche con otras prendas y reduce el riesgo de estirar o dañar los tejidos.
                                </section>
                            </li>
                            <li>
                                <header>
                                    <h2 class="fuente-secundaria">
                                        Evita el exceso de suavizante
                                    </h2>
                                </header>
                                <section style="padding-bottom: 35px">
                                    El suavizante de telas puede acumularse en las fibras con el tiempo, lo que afecta la transpirabilidad 
                                    y la elasticidad de las prendas, especialmente las deportivas. Utilízalo con moderación y solo cuando sea necesario.
                                </section>
                            </li>
                            <li>
                                <header>
                                    <h2 class="fuente-secundaria">
                                        Elimina las manchas de inmediato
                                    </h2>
                                </header>
                                <section style="padding-bottom: 35px">
                                    Si notas una mancha en tu ropa, trata de eliminarla lo antes posible. Usa un quitamanchas adecuado para el tipo de mancha y la tela, y asegúrate de no frotar con demasiada fuerza para evitar dañar la prenda.
                                </section>
                            </li>
                            <li>
                                <header>
                                    <h2 class="fuente-secundaria">
                                        Rota las prendas frecuentemente
                                    </h2>
                                </header>
                                <section style="padding-bottom: 35px">
                                    Si tienes varias opciones de ropa similar, como camisas o jeans, intenta no usarlas siempre en los mismos días. Rotarlas ayuda a evitar el desgaste excesivo en una sola prenda y extiende su vida útil.
                                </section>
                            </li>
                            <li>
                                <header>
                                    <h2 class="fuente-secundaria">
                                        Plancha con cuidado
                                    </h2>
                                </header>
                                <section style="padding-bottom: 35px">
                                    Utiliza la temperatura correcta para cada tipo de tela y no dejes la plancha demasiado tiempo sobre una prenda. Si tienes dudas, es mejor usar una temperatura baja y aumentar gradualmente según lo necesite la tela.
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