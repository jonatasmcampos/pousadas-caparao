@extends('estruturaHTML')

@section('conteudo')
    <!-- Formulario -->
    {{-- <form action="{{ route('info.store') }}" method="POST">
        @csrf
        <div class="form-row">
            <div class="form-group">
                <label for="inputAddress">Titulo principal</label>
                <input name="tituloPrincipal" type="text" class="form-control" id="inputAddress"
                    placeholder="pousadas Info">
            </div>
            <div class="form-group">
                <label for="inputAddress">Titulo</label>
                <input name="titulo" type="text" class="form-control" id="inputAddress" placeholder="pousadas Info">
            </div>
            <div class="form-group">
                <label for="inputAddress">subTitulo</label>
                <input name="subtitulo" type="text" class="form-control" id="inputAddress" placeholder="pousadas Info">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">introducaoImage</label>
                <input name="introducaoImage" type="image" class="form-control" id="inputPassword4" placeholder="obre nos">
            </div>
        </div>
        <br>
        <div class="form-group">
            <label for="inputAddress">introducao</label>
            <input name="titulointroducao" type="text" class="form-control" id="inputAddress"
                placeholder="imageItroducao">
        </div>
        <br>
        <div class="form-group">
            <label for="inputAddress"> sobreNos</label>
            <input name="introducao" type="text" class="form-control" id="inputAddress" placeholder="pousada">
        </div>

        <button type="submit" class="btn btn-primary">Sign in</button>
    </form> --}}
    <!-- End Formulario -->

    <!-- --------------------------------------------------- -->

    <!-- Wrapper -->
    <div class="wrapper">

        <!-- Incluindo navbar -->
        @include('componentes.navbar')

        <!-- Dark overlay -->
        <div class="overlay"></div>

        <!-- Content -->
        <div class="content">

            <!-- ------------------- TODOS OS MODAIS ------------------- -->

            <!-- Modal Titulo Principal --------------------------------------------------- -->
            <div class="modal fade" id="modalTituloPrincipal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form action="{{ route('info.store') }}" method="POST">
                            @csrf
                            <div class="modal-header">
                                <!-- ↓↓ Titulo do modal ↓↓ -->
                                <p class="mx-auto">
                                    Título Principal atual: <strong style="font-size: 20px;" class="modal-title"
                                        id="exampleModalLabel">{{ $info->tituloPrincipal }}</strong>
                                </p>
                                <!-- --------------- -->
                                <!-- ↓↓ Botao para fechar o modal ↓↓ -->
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <!-- ------------------------- -->
                            </div>
                            <!-- ↓↓ Input para alterar titulo principal ↓↓ --------------------- -->
                            <div class="modal-body">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <input name="tituloPrincipal" type="text" class="form-control" id="inputAddress"
                                            placeholder="Título principal">
                                    </div>
                                </div>
                            </div>
                            <!-- ---------------------------------------------------- -->
                            <!-- ↓↓ Botoes para cancelar ou alterar o titulo principal ↓↓ -->
                            <div class="modal-footer">
                                <button type="button" class="btn personalizado-2" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn personalizado">Alterar</button>
                            </div>
                            <!-- --------------------------------------------------------- -->
                        </form>
                    </div>
                </div>
            </div>
            <!-- Final do Modal Titulo principal ----------------------------------------- -->

            <!-- Modal Titulo --------------------------------------------------- -->
            <div class="modal fade" id="modalTitulo" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form action="{{ route('info.store') }}" method="POST">
                            @csrf
                            <div class="modal-header">
                                <!-- ↓↓ Titulo do modal ↓↓ -->
                                <p class="mx-auto">
                                    Título atual: <strong style="font-size: 20px;" class="modal-title"
                                        id="exampleModalLabel">{{ $info->titulo }}</strong>
                                </p>
                                <!-- --------------- -->
                                <!-- ↓↓ Botao para fechar o modal ↓↓ -->
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <!-- ------------------------- -->
                            </div>
                            <!-- ↓↓ Input para alterar titulo principal ↓↓ --------------------- -->
                            <div class="modal-body">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <input name="titulo" type="text" class="form-control" id="inputAddress"
                                            placeholder="Título">
                                    </div>
                                </div>
                            </div>
                            <!-- ---------------------------------------------------- -->
                            <!-- ↓↓ Botoes para cancelar ou alterar o titulo principal ↓↓ -->
                            <div class="modal-footer">
                                <button type="button" class="btn personalizado-2" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn personalizado">Alterar</button>
                            </div>
                            <!-- --------------------------------------------------------- -->
                        </form>
                    </div>
                </div>
            </div>
            <!-- Final do Modal Titulo ----------------------------------------- -->
            
            <!-- Modal Subtitulo --------------------------------------------------- -->
            <div class="modal fade" id="modalSubtitulo" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form action="{{ route('info.store') }}" method="POST">
                            @csrf
                            <div class="modal-header">
                                <!-- ↓↓ Titulo do modal ↓↓ -->
                                <p class="mx-auto">
                                    Subtitulo atual: <strong style="font-size: 20px;" class="modal-title"
                                        id="exampleModalLabel">{{ $info->subtitulo }}</strong>
                                </p>
                                <!-- --------------- -->
                                <!-- ↓↓ Botao para fechar o modal ↓↓ -->
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <!-- ------------------------- -->
                            </div>
                            <!-- ↓↓ Input para alterar titulo principal ↓↓ --------------------- -->
                            <div class="modal-body">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <input name="subtitulo" type="text" class="form-control" id="inputAddress"
                                            placeholder="Subtitulo">
                                    </div>
                                </div>
                            </div>
                            <!-- ---------------------------------------------------- -->
                            <!-- ↓↓ Botoes para cancelar ou alterar o titulo principal ↓↓ -->
                            <div class="modal-footer">
                                <button type="button" class="btn personalizado-2" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn personalizado">Alterar</button>
                            </div>
                            <!-- --------------------------------------------------------- -->
                        </form>
                    </div>
                </div>
            </div>
            <!-- Final do Modal Subtitulo ----------------------------------------- -->
            
            <!-- Modal Titulo Introdução --------------------------------------------------- -->
            <div class="modal fade" id="modalTitulointroducao" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form action="{{ route('info.store') }}" method="POST">
                            @csrf
                            <div class="modal-header">
                                <!-- ↓↓ Titulo do modal ↓↓ -->
                                <p class="mx-auto">
                                    Titulo da introdução atual: <strong style="font-size: 20px;" class="modal-title"
                                        id="exampleModalLabel">{{ $info->titulointroducao }}</strong>
                                </p>
                                <!-- --------------- -->
                                <!-- ↓↓ Botao para fechar o modal ↓↓ -->
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <!-- ------------------------- -->
                            </div>
                            <!-- ↓↓ Input para alterar titulo principal ↓↓ --------------------- -->
                            <div class="modal-body">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <input name="titulointroducao" type="text" class="form-control" id="inputAddress"
                                            placeholder="Título da Introdução">
                                    </div>
                                </div>
                            </div>
                            <!-- ---------------------------------------------------- -->
                            <!-- ↓↓ Botoes para cancelar ou alterar o titulo principal ↓↓ -->
                            <div class="modal-footer">
                                <button type="button" class="btn personalizado-2" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn personalizado">Alterar</button>
                            </div>
                            <!-- --------------------------------------------------------- -->
                        </form>
                    </div>
                </div>
            </div>
            <!-- Final do Modal Subtitulo ----------------------------------------- -->

            <!-- Modal Introdução --------------------------------------------------- -->
            <div class="modal fade" id="modalIntroducao" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form action="{{ route('info.store') }}" method="POST">
                            @csrf
                            <div class="modal-header">
                                <!-- ↓↓ Titulo do modal ↓↓ -->
                                <p class="mx-auto">
                                    Introdução atual: <strong style="font-size: 20px;" class="modal-title"
                                        id="exampleModalLabel">{{ $info->introducao }}</strong>
                                </p>
                                <!-- --------------- -->
                                <!-- ↓↓ Botao para fechar o modal ↓↓ -->
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <!-- ------------------------- -->
                            </div>
                            <!-- ↓↓ Input para alterar titulo principal ↓↓ --------------------- -->
                            <div class="modal-body">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <input name="introducao" type="text" class="form-control" id="inputAddress"
                                            placeholder="Introdução">
                                    </div>
                                </div>
                            </div>
                            <!-- ---------------------------------------------------- -->
                            <!-- ↓↓ Botoes para cancelar ou alterar o titulo principal ↓↓ -->
                            <div class="modal-footer">
                                <button type="button" class="btn personalizado-2" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn personalizado">Alterar</button>
                            </div>
                            <!-- --------------------------------------------------------- -->
                        </form>
                    </div>
                </div>
            </div>
            <!-- Final do Modal Subtitulo ----------------------------------------- -->

            <!-- ------------------------------------------------------- -->

            <!-- open sidebar menu -->
            <a class="btn btn-primary btn-customized open-menu" href="#" role="button">
                <i class="fas fa-align-left"></i> <span>Menu</span>
            </a>

            <!-- Top content -->
            <div class="top-content section-container background-image" id="top-content">
                <div class="container">
                    <div class="row">
                        <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                            <h1 class="wow fadeIn">
                                <strong>
                                    <!-- ↓↓ Botao que acessa o modal para alterar titulo principal ↓↓ -->
                                    <a data-toggle="modal" data-target="#modalTituloPrincipal">
                                        {{ $info->tituloPrincipal }}
                                    </a>
                                    <!-- ------------------------------------------------------------ -->
                                </strong>
                            </h1>
                            <div class="description wow fadeInLeft">
                                <p>
                                    <!-- ↓↓ Botao que acessa o modal para alterar titulo ↓↓ -->
                                    <strong>
                                        <a data-toggle="modal" data-target="#modalTitulo">
                                            {{ $info->titulo }}
                                        </a>
                                    </strong>
                                    <!-- -------------------------------------------------- -->
                                    <br>
                                    <!-- ↓↓ Botao que acessa o modal para alterar subtitulo ↓↓ -->
                                    <strong>
                                        <a data-toggle="modal" data-target="#modalSubtitulo">
                                            {{ $info->subtitulo }}
                                        </a>
                                    </strong>
                                    <!-- ----------------------------------------------------- -->
                                </p>
                            </div>
                            <div class="buttons wow fadeInUp">
                                <a class="btn btn-primary btn-customized scroll-link" href="#section-1" role="button">
                                    <i class="fas fa-book-open"></i> Learn More
                                </a>
                                <a class="btn btn-primary btn-customized-2 scroll-link" href="#section-3" role="button">
                                    <i class="fas fa-pencil-alt"></i> Our Projects
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end Top content -->

            <!-- Section 2 -->
            <div class="section-2-container section-container section-container-gray-bg" id="section-2">
                <div class="container">
                    <div class="row">
                        <div class="col section-2 section-description wow fadeIn">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8 section-2-box wow fadeInLeft">
                            <h3>
                                <a data-toggle="modal" data-target="#modalTitulointroducao">
                                    {{ $info->titulointroducao }}
                                </a>
                            </h3>
                            <p class="medium-paragraph">
                                <a data-toggle="modal" data-target="#modalIntroducao">
                                    {{ $info->introducao }}
                                </a>
                            </p>
                        </div>
                        <div class="col-4 section-2-box wow fadeInUp">
                            <img src="{{ asset('assets/images/pico-bandeira.jpg') }}" alt="about-us">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 1 -->
            <div class="section-1-container section-container" id="section-1">
                <div class="container">
                    <div class="row">
                        <div class="col section-1 section-description wow fadeIn">
                            <h2>What We Do</h2>
                            <div class="divider-1 wow fadeInUp"><span></span></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 section-1-box wow fadeInUp">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="section-1-box-icon">
                                        <i class="fas fa-magic"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h3>Branding</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 section-1-box wow fadeInDown">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="section-1-box-icon">
                                        <i class="fas fa-cog"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h3>Web design</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 section-1-box wow fadeInUp">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="section-1-box-icon">
                                        <i class="fab fa-twitter"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h3>Social media</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Section 1 -->

            <!-- Section 3 -->
            <div class="section-3-container section-container" id="section-3">
                <div class="container">

                    <div class="row">
                        <div class="col section-3 section-description wow fadeIn">
                            <h2>Our Projects</h2>
                            <div class="divider-1 wow fadeInUp"><span></span></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 section-3-box wow fadeInLeft">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="section-3-box-icon">
                                        <i class="fas fa-paperclip"></i>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <h3>Ut wisi enim ad minim</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et.
                                        Ut wisi enim ad minim veniam, quis nostrud.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 section-3-box wow fadeInLeft">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="section-3-box-icon">
                                        <i class="fas fa-pencil-alt"></i>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <h3>Sed do eiusmod tempor</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et.
                                        Ut wisi enim ad minim veniam, quis nostrud.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 section-3-box wow fadeInLeft">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="section-3-box-icon">
                                        <i class="fas fa-cloud"></i>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <h3>Quis nostrud exerci tat</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et.
                                        Ut wisi enim ad minim veniam, quis nostrud.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 section-3-box wow fadeInLeft">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="section-3-box-icon">
                                        <i class="fab fa-google"></i>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <h3>Minim veniam quis nostrud</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et.
                                        Ut wisi enim ad minim veniam, quis nostrud.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Section 4 -->
            <div class="section-4-container section-container section-container-image-bg background-image-2"
                id="section-4">
                <div class="container">
                    <div class="row">
                        <div class="col section-4 section-description wow fadeInLeftBig">
                            <h2>We Think That...</h2>
                            <p>
                                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                                ut
                                aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col section-bottom-button wow fadeInUp">
                            <a class="btn btn-primary btn-customized-2 scroll-link" href="#section-6" role="button">
                                <i class="fas fa-envelope"></i> Contact Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 5 -->
            <div class="section-5-container section-container" id="section-5">
                <div class="container">
                    <div class="row">
                        <div class="col section-5 section-description wow fadeIn">
                            <h2>Portfolio</h2>
                            <div class="divider-1 wow fadeInUp"><span></span></div>
                            <p>We have completed 486 projects since we started back in 2013. Check them out!</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 section-5-box wow fadeInUp">
                            <div class="section-5-box-image"><img src="assets/img/portfolio/1.jpg" alt="portfolio-1"></div>
                            <h3><a href="#">Acme branding</a> <i class="fas fa-angle-right"></i></h3>
                            <div class="section-5-box-date"><i class="far fa-calendar"></i> June 2019</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et.</p>
                        </div>
                        <div class="col-md-4 section-5-box wow fadeInDown">
                            <div class="section-5-box-image"><img src="assets/img/portfolio/2.jpg" alt="portfolio-2"></div>
                            <h3><a href="#">Created 150 flyers</a> <i class="fas fa-angle-right"></i></h3>
                            <div class="section-5-box-date"><i class="far fa-calendar"></i> February 2019</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et.</p>
                        </div>
                        <div class="col-md-4 section-5-box wow fadeInUp">
                            <div class="section-5-box-image"><img src="assets/img/portfolio/3.jpg" alt="portfolio-3"></div>
                            <h3><a href="#">WordPress design</a> <i class="fas fa-angle-right"></i></h3>
                            <div class="section-5-box-date"><i class="far fa-calendar"></i> November 2018</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore et.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col section-bottom-button wow fadeInUp">
                            <a class="btn btn-primary btn-customized" href="#" role="button">
                                <i class="fas fa-sync"></i> View All
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            @include('componentes.footer')

        </div>
        <!-- End content -->

    </div>
    <!-- End wrapper -->
@endsection
