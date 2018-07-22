@extends('template')
@section('title')
    Casa de la Cultura - Blog
@endsection

@section('css')

@endsection

@section('main-content')

    <div class="header-page">
            <img src="{{asset('assets/images/header-pages/blog.jpg')}}">
            {{--<h1>NUESTRA HISTORIA</h1>--}}
    </div>

    <section class="section-blog">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-8">
                <section class="section-rendicion-cuentas">
                    <h1 class="title-section">NUESTRA HISTORIA</h1>
                    <img src="{{asset('assets/images/history1.jpg')}}" class="w-100"></img>
                    <p>En los 80s se dio inicio en la comunidad de Maruchenga, del municipio de Bello una serie de acciones  encaminadas  a fortalecer el desarrollo de la comunidad, como no había sede, las reuniones se realizaban en la calle, se preparaban las actividades ha realizar con todas las edades; habían días para reuniones, también para el compartir como por ejemplo: el sancocho comunitario que se realizaba, donde toda la gente salía y compartía con los demás, las recreaciones para los niños donde gozaban con los juegos tradicionales o callejeros, también se hacían danzas con los más pequeños y las diversiones para los jóvenes, en ese transcurrir se compartía con toda la comunidad, mientras una pareja de viejos amenizaban la tarde con su guitarra y sus bellas voces,  luego fue llegando tanta gente que hubo que pensar en buscar nuevas estrategias para las actividades a realizar, llegaron personas del barrio Paris y fue así como se conformo otro grupo con ese sector, se escribieron un par de propuestas que fueron financiadas en el extranjero y se logró conseguir las sedes de Maruchenga y Paris, el trabajo empezó a ser reconocido en la comuna y fue así como el programa fue creciendo;  se pensó en ampliar con nuevas estrategias para  las actividades con toda la comunidad; desde la madre gestante hasta la tercera edad.
                        Las familias de nuestra comunidad tienen en promedio de siete (7) hijos y sus grandes problemas sociales, tales como: desempleo, violencia, desplazamiento forzado, maltrato intrafamiliar, alta tasa de nacimientos, madres cabeza de hogar, embarazos tempranos, entre otros.</p>
                    <p>
                        Por esto y muchas razones más  la comunidad quiso organizarse, se agruparon buscando soluciones para el alto nivel de desnutrición y desamparo infantil y la gran necesidad de educación que había por aquellos días apoyados por varias entidades, se constituyen como <b>CORPORACIÓN PRODIMAPA(Programa de Desarrollo Integral Maruchenga París)</b> con NIT 811013784-4, luego de esto se formó el comité para montar los programas productivos, entonces se organizaron por grupos para dar un orden, los jóvenes de Paris impulsaron la cerrajería, las mujeres, la cooperativa y los abuelos se dedicaron a realizar las manualidades, (escobas, trapeadores y artesanías); con los jóvenes de Maruchenga la carpintería y luego se logra gestionar la panadería para el aprendizaje de toda la comunidad.

                    </p>
                    <img src="{{asset('assets/images/history2.jpg')}}" class="w-100"></img>
                    <p>
                        Se logran establecer contactos con la secretaria de Educación de Bello, las instituciones educativas y el Centro de Salud.
                        Otras acciones eran el saneamiento de quebradas y calles, donde participaban las enfermeras, el médico jefe y se invitaba a toda la comunidad.<br> También se realizaron brigadas de vacunación con el centro de salud, las cuales se  iba de casa en casa.
                        Se gestionaron recursos con la administración de Medellín y se logro hacer la cancha de la Maruchenga, también se aporto a la construcción de tres salones más de la escuela del barrio la Maruchenga y se logra pavimentar la calle donde estaba funcionando el centro comunitario.

                    </p>
                    <br>
                    <p>
                        <i>Recuento  de la historia  de Prodimapa<br>
                        En voz de  los adultos mayores fundadores de la organización</i>
                    </p>
                </section>
            </div>
            <div class="col-md-3">

            </div>
        </div>
    </div>

    </section>



@endsection

@section('scripts')
<script>

    $("#inicio-sec").on("click", function(e){
        location.href = '/';
    });
    $("#a-inicio").on("click", function(e){
        location.href = '/';
    });
</script>

@endsection