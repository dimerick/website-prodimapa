@extends('template')
@section('title')
    Corporación Prodimapa
@endsection

@section('css')

@endsection

@section('main-content')
    <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
            <li data-target="#carousel-example-2" data-slide-to="3"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view view-color-blue">
                    <div class="row">
                        <div class="col-md-8">
                            <img class="d-block w-100" src="{{asset('assets/images/slider/slider1.jpg')}}" alt="First slide">
                        </div>
                        <div class="col-md-4">

                            <div class="info-slider">
                                <div class="container-fluid">

                                    <h3 class="h3-responsive">CORPORACIÓN PRODIMAPA<br></h3>
                                    <p>Promovemos espacios adecuados en favor de la niñez y sus familias para un sano desarrollo en la comunidad.</p>
                                    <a class="btn btn-outline-white" href="#">Ver Mas</a>


                            </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

            <div class="carousel-item">
                <div class="view view-color-orange">
                    <div class="row">
                        <div class="col-md-8">
                            <img class="d-block w-100" src="{{asset('assets/images/slider/slider2.jpg')}}" alt="First slide">
                        </div>
                        <div class="col-md-4">

                            <div class="info-slider">
                                <div class="container-fluid">

                                    <h3 class="h3-responsive">CORPORACIÓN PRODIMAPA<br></h3>
                                    <p>Un espacio para todos.</p>
                                    <a class="btn btn-outline-white" href="#">Ver Mas</a>


                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

            <div class="carousel-item">
                <div class="view view-color-green">
                    <div class="row">
                        <div class="col-md-8">
                            <img class="d-block w-100" src="{{asset('assets/images/slider/slider3.jpg')}}" alt="First slide">
                        </div>
                        <div class="col-md-4">

                            <div class="info-slider">
                                <div class="container-fluid">

                                    <h3 class="h3-responsive">CORPORACIÓN PRODIMAPA<br></h3>
                                    <p>Promovemos espacios adecuados en favor de la niñez y sus familias para un sano desarrollo en la comunidad.</p>
                                    <a class="btn btn-outline-white" href="#">Ver Mas</a>


                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

            <div class="carousel-item">
                <div class="view view-color-violet">
                    <div class="row">
                        <div class="col-md-8">
                            <img class="d-block w-100" src="{{asset('assets/images/slider/slider4.jpg')}}" alt="First slide">
                        </div>
                        <div class="col-md-4">

                            <div class="info-slider">
                                <div class="container-fluid">

                                    <h3 class="h3-responsive">CORPORACIÓN PRODIMAPA<br></h3>
                                    <p>Un espacio para todos.</p>
                                    <a class="btn btn-outline-white" href="#">Ver Mas</a>


                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->


    <section class="section-page" id="quienes-somos">
        <div class="container-fluid">
            <h1 class="title-section">QUIENES SOMOS</h1>
            <div class="row">
                <div class="col-md-1">

                </div>
                <div class="col-md-5">
                    <img src="{{asset('assets/images/about-us.jpg')}}" class="image-w">
                </div>
                <div class="col-md-5">
                    <p>
                        Somos una corporación que promueve y fortalece el desarrollo integral de la comunidad vulnerable de Antioquia,  basándonos en los valores y principios espirituales, implementando programas y actividades con ambientes adecuados para el mejoramiento de la convivencia y calidad de vida de estas poblaciones.<br>
                        <a href="/nuestra-historia">Conoce Nuestra Historia</a>
                    </p>
                    <h3>MISIÓN</h3>
                    <p>La Corporación Prodimapa es una institución que implementa programas y proyectos con  la participación de las comunidades en riesgo buscando así promover y fortalecer el desarrollo integral y el crecimiento y renovación de las familias vulnerables, basándose en los valores y principios espirituales.</p>


                </div>
                <div class="col-md-1">

                </div>
            </div>

            <div class="row">
                <div class="col-md-1">

                </div>
                <div class="col-md-5">
                    <h3>VISIÓN</h3>
                    <p>
                        Prodimapa  se ve como una Organización líder y gestora de procesos de Desarrollo y Crecimiento de las Familias, para la renovación de la comunidad vulnerable de Colombia, con proyectos y programas sostenibles en las diferentes áreas o ciencias del bienestar humano: (salud, educación, vivienda, recreación, espiritualidad, economía, cultura, y deporte que fomente el bien común, la calidad de vida y la convivencia pacífica).
                    </p>
                    <h3>OBJETIVO GENERAL</h3>
                    <p>
                        Promover y fortalecer el desarrollo integral de la comunidad vulnerable de Antioquia,  basándonos en los valores y principios espirituales, implementando programas y actividades con ambientes adecuados para el mejoramiento de la convivencia y calidad de vida de estas poblaciones.
                    </p>
                </div>
                <div class="col-md-5">


                    <div style="padding:55% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/245766663" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
                </div>
                <div class="col-md-1">

                </div>
            </div>




        </div>


    </section>




    <section class="section-page" id="programas">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1">

        </div>
        <div class="col-md-10">
            <h1 class="title-section">PROGRAMAS</h1>

            <div class="cont-programs">
                <div class="card" onclick="openModal();currentSlide(1)">
                    <img class="card-img-top" src="{{asset('assets/images/programas/g12.jpg')}}"
                         class="hover-shadow" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">G12</h4>
                        <p class="card-text">Impactar las nuevas generaciones, quitar el velo de la delincuencia, drogadicción, suicidio y soledad...</p>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top" src="{{asset('assets/images/programas/juanpa.jpg')}}" onclick="openModal();currentSlide(2)"
                         class="hover-shadow" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">JUANPA (Juega y Aprende a pensar)</h4>
                        <p class="card-text">Realizar actividades lúdicas- pedagógicas para el adecuado desarrollo de los niños y niñas.</p>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top" src="{{asset('assets/images/programas/nutricion.jpg')}}" onclick="openModal();currentSlide(3)"
                         class="hover-shadow" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">NUTRICIÓN</h4>
                        <p class="card-text">Con este programa se busca incidir en  los niveles  de la desnutrición de los menores o prevenirla.</p>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top" src="{{asset('assets/images/programas/pena.jpg')}}" onclick="openModal();currentSlide(4)"
                         class="hover-shadow" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">PEÑA (Principios, enseñables y amorosos)</h4>
                        <p class="card-text">Es un espacio abierto para padres enseñables con deseo de aprender cómo aplicar las enseñanzas de Dios.</p>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top" src="{{asset('assets/images/programas/tercera-edad.jpg')}}" onclick="openModal();currentSlide(5)"
                         class="hover-shadow" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">TERCERA EDAD</h4>
                        <p class="card-text">Integrar al adulto mayor a los diferentes espacios de la sociedad.</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-1">

        </div>
    </div>





</div>


    </section>

    {{--<section class="section-page donaciones" id="donaciones">--}}

        {{--<div class="row">--}}
            {{--<div class="col-md-2">--}}

            {{--</div>--}}
            {{--<div class="col-md-8">--}}
                {{--<div class="container-fluid">--}}
                    {{--<h1 class="title-section">DESEO APOYAR EL PROCESO</h1>--}}
                    {{--<p>Si deseas apoyar nuestro proceso puedes realizar una donación a la cuenta:</p>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-12">--}}
                            {{--<p class="center-justified">--}}
                                {{--Cuenta de ahorros<br>--}}
                                {{--Bancolombia<br>--}}
                                {{--#xxxx<br>--}}
                                {{--Beneficiario Corporación Prodimapa--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-2">--}}

            {{--</div>--}}
        {{--</div>--}}




    {{--</section>--}}




    <!--Modal-->

    <div id="myModal" class="modal">
        <span class="close-modal cursor" onclick="closeModal()">&times;</span>


        <div class="modal-content">

            <div class="mySlides">
                <div class="numbertext">1 / 5</div>
                <img src="{{asset('assets/images/programas/g12.jpg')}}" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">2 / 5</div>
                <img src="{{asset('assets/images/programas/juanpa.jpg')}}"  style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">3 / 5</div>
                <img src="{{asset('assets/images/programas/nutricion.jpg')}}" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">4 / 5</div>
                <img src="{{asset('assets/images/programas/pena.jpg')}}" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">5 / 5</div>
                <img src="{{asset('assets/images/programas/tercera-edad.jpg')}}" style="width:100%">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <div class="caption-container">
                <p id="caption"></p>
            </div>
            <div>
                <div class="column">
                    <img class="demo" src="{{asset('assets/images/programas/g12.jpg')}}" onclick="currentSlide(1)" alt="
      <b>G12</b>
      <p>Impactar las nuevas generaciones, quitar el velo de la delincuencia, drogadicción, suicidio y soledad a través de talleres con principios cristianos que busca fortalecer el ser de cada joven, mostrando una alternativa de vida nueva.
</p>
">
                </div>

                <div class="column">
                    <img class="demo" src="{{asset('assets/images/programas/juanpa.jpg')}}" width="50%" onclick="currentSlide(2)" alt="
      <b>JUANPA (Juega y Aprende a pensar)</b>
      <p>Realizar actividades lúdicas- pedagógicas para el adecuado desarrollo de los niños y niñas que potencien las diferentes dimensiones del desarrollo humano en formación a través de un sano esparcimiento y por medio de la práctica  de la fraternidad para una sana convivencia.
</p>
">
                </div>

                <div class="column">
                    <img class="demo" src="{{asset('assets/images/programas/nutricion.jpg')}}" onclick="currentSlide(3)" alt="
      <b>Nutrición</b>
      <p>Con este programa se busca incidir en  los niveles  de la desnutrición de los menores o prevenirla, para ello los beneficiarios deberán ser las familias menos favorecidas de las comunidades, por medio de un adecuado programa  de atención nutricional. Por medio de la nutrición buscamos educar y fomentar en los menores y sus familias unos mejores hábitos de vida (nutricionales, educativos y espirituales).
</p>

">
                </div>

                <div class="column">
                    <img class="demo" src="{{asset('assets/images/programas/pena.jpg')}}" onclick="currentSlide(4)" alt="
      <b>PEÑA (Principios, enseñables y amorosos)</b>
      <p>Es un espacio abierto para padres enseñables con deseo de aprender cómo aplicar las enseñanzas de Dios a su vida cotidiana, enfocada al área familiar específicamente, no son temas religiosos sino con valores y calidad de vida. Peña es un grupo moldeable por el labrador hasta convertirse en su obra maestra.
</p>

">
                </div>

                <div class="column">
                    <img class="demo" src="{{asset('assets/images/programas/tercera-edad.jpg')}}" onclick="currentSlide(5)" alt="
      <b>Tercera Edad</b>
      <p>Integrar al adulto mayor a los diferentes espacios de la sociedad  haciendo de su entorno un mejor espacio para la sana convivencia el mejoramiento de la calidad de vida; en  la familia y con  la comunidad en general.
</p>

">
                </div>

            </div>



        </div>


    </div>

    <!--Modal-->

    <section class="section-page" id="galeria">
        <h1 class="title-section">GALERIA</h1>

        <div class="galery-photos">
            <div id="flickrembed_60"></div><div style="position:absolute; top:-70px; display:block; text-align:center; z-index:-1;"><a rel="nofollow" href=""></a></div><script src='https://flickrembed.com/embed_v2.js.rand.php?container=flickrembed_60&source=flickr&layout=responsive&input=72157692782288112&sort=0&by=album&theme=default&scale=fit&limit=10&skin=default&autoplay=true'></script><script type="text/javascript">function showpics(){var a=$("#box").val();$.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?tags="+a+"&tagmode=any&format=json&jsoncallback=?",function(a){$("#images").hide().html(a).fadeIn("fast"),$.each(a.items,function(a,e){$("<img/>").attr("src",e.media.m).appendTo("#images")})})}</script><small style="display: block; text-align: center; margin: 0 auto;">Powered by <a href="https://flickrembed.com">flickr embed</a>.</small>
        </div>
    </section>

@endsection


@section('scripts')

@endsection