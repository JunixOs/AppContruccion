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
    .fuente{
        font-size: 30px;
        font-family:Times New Roman;
        font-style: italic; 
        font-weight: bold;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="width: 2100px">
            <div class="card">
                <div class="card-header">{{ __('¿Que son los ODS?') }}</div>

                <div class="card-body" style="max-height: 80vh; overflow-y: scroll">
                    <ol style="list-style-type: upper-roman;">
                        <li>
                            <header>
                                <h1 class="fuente">
                                    ¿Que es el desarrollo sostenible?
                                </h1>
                            </header>
                            <section>
                                <p>
                                    El desarrollo sostenible implica cómo debemos vivir hoy si queremos un futuro mejor, 
                                    cupándose de las necesidades presentes sin comprometer las oportunidades de las generaciones futuras de cumplir con las suyas.
                                </p>
                                <p>
                                    Cuando existe un desarrollo sostenible, todo el mundo tiene acceso a un trabajo digno, una atención sanitaria y una educación de calidad. 
                                    La utilización de los recursos naturales evita la contaminación y las pérdidas permanentes para el medio ambiente. Las decisiones de políticas públicas garantizan que nadie se quede atrás debido a situaciones de inferioridad o discriminación.
                                </p>
                                <p>
                                    Para comprender por qué el desarrollo sostenible es tan importante en la vida real, simplemente mire a su alrededor. Por término medio a nivel mundial, las personas con ingresos más elevados viven más tiempo, 
                                    pero gran parte del desarrollo es insostenible y nos ha llevado al cambio climático, la destrucción del medio ambiente, los conflictos, la pobreza y el hambre, grandes desigualdades e inestabilidad social.
                                </p>
                                <p>
                                    En 2015, los Estados miembros de la ONU convirtieron su visión del desarrollo sostenible en un plan para alcanzarlo: la Agenda 2030 para el Desarrollo Sostenible. 
                                    Sus 17 Objetivos de Desarrollo Sostenible, con ambiciosas metas para 2030, abarcan las tres dimensiones del desarrollo sostenible: la economía, el desarrollo social y el medio ambiente.
                                    Sin embargo, a medio camino de la fecha límite de 2030, la crisis climática, una economía mundial débil, los conflictos y los efectos persistentes de la COVID-19 han puesto en peligro los Objetivos.
                                </p>
                                <p>
                                    Sin embargo, no es demasiado tarde para restablecer las iniciativas para alcanzarlos. 
                                    Para avanzar en la agenda del desarrollo sostenible, los gobiernos están incorporando los Objetivos dentro de los planes nacionales. Sin embargo, es necesario un cambio fundamental para que el mundo mejore y, cuando quedan siete años para alcanzar la Agenda 2030, es necesario hacerlo ya.
                                    Pero esto no solo depende solo de nuestros líderes mundiales. Cada persona se puede beneficiar de un mundo más próspero, inclusivo y resiliente. Todos podemos hacer algo al respecto, con independencia de que formemos parte de un gobierno o de la sociedad civil, dirijamos una empresa o un hogar, estemos escolarizados o no.
                                </p>
                                <div class="centrar-objeto">
                                    <img src="{{ asset('/images/Desarrollo-Sostenible.webp')}}" alt="Desarrollo sostenible" width="500px" height="400px" class="imagen">
                                </div>
                            </section>
                            <footer style="font-style:italic; font-family:Arial;">
                                <small>
                                    Recuperado de: <a href="https://www.un.org/sustainabledevelopment/es/2023/08/what-is-sustainable-development/" >www.un.org</a>
                                    <p>
                                        ¿En que consiste el desarrollo sostenible?
                                    </p>
                                </small>
                            </footer>
                        </li>
                        <li>
                            <header>
                                <h1 class="fuente">
                                    ¿Que son los ODS?
                                </h1>
                            </header>
                            <section>
                                <p>
                                    Los Objetivos de Desarrollo Sostenible (ODS), también conocidos como Objetivos Globales, 
                                    fueron adoptados por las Naciones Unidas en 2015 como un llamamiento universal para poner fin a la pobreza, 
                                    proteger el planeta y garantizar que para el 2030 todas las personas disfruten de paz y prosperidad.
                                    Los 17 ODS están integrados: reconocen que la acción en un área afectará los resultados en otras áreas y que el desarrollo debe equilibrar la sostenibilidad social, económica y ambiental. 
                                    Los países se han comprometido a priorizar el progreso de los más rezagados.
                                    Los ODS están diseñados para acabar con la pobreza, el hambre, el sida y la discriminación contra mujeres y niñas.
                                    La creatividad, el conocimiento, la tecnología y los recursos financieros de toda la sociedad son necesarios para alcanzar los ODS en todos los contextos.
                                </p>
                                <div class="centrar-objeto">
                                    <img src="{{asset('/images/Los 17 ODS.png')}}" alt="Los 17 ODS" width="700px" height="350px" class="imagen">
                                </div>
                            </section>
                            <footer style="font-style:italic; font-family:Arial;">
                                <small>
                                    Recuperado de: <a href="https://www.undp.org/es/sustainable-development-goals" >www.undp.org</a>
                                    <p>
                                        Los ODS en accion
                                    </p>
                                </small>
                            </footer>
                        </li>
                        <li>
                            <header>
                                <h1 class="fuente">
                                    ¿En que consiste el ODS 12 "Produccion y Consumo Responsables"?
                                </h1>
                            </header>
                            <section>
                                <p>
                                    Para lograr crecimiento económico y desarrollo sostenible, es urgente reducir la huella ecológica mediante un cambio en los métodos de producción y consumo de bienes y recursos.
                                </p>
                                <p>
                                    La gestión eficiente de los recursos naturales compartidos y la forma en que se eliminan los desechos tóxicos y los contaminantes son vitales para lograr este objetivo. 
                                    También es importante instar a las industrias, los negocios y los consumidores a reciclar y reducir los desechos, como asimismo apoyar a los países en desarrollo a avanzar hacia patrones sostenibles de consumo para 2030.
                                </p>
                                <p>
                                    El consumo de una gran proporción de la población mundial sigue siendo insuficiente para satisfacer incluso sus necesidades básicas. 
                                    En este contexto, es importante reducir a la mitad el desperdicio per cápita de alimentos en el mundo a nivel de comercio minorista y consumidores para crear cadenas de producción y suministro más eficientes. 
                                    Esto puede aportar a la seguridad alimentaria y llevarnos hacia una economía que utilice los recursos de manera más eficiente.
                                </p>
                                <div class="centrar-objeto">
                                    <img src="{{asset('/images/ODS12.jpg')}}" alt="Los 17 ODS" width="900px" height="350px" class="imagen">
                                </div>
                            </section>
                            <footer style="font-style:italic; font-family:Arial;">
                                <small>
                                    Recuperado de: <a href="https://www.undp.org/es/sustainable-development-goals" >www.undp.org</a>
                                    <p>
                                        Los ODS en accion
                                    </p>
                                </small>
                            </footer>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection