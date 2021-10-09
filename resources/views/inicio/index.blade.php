<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Zapatería</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-warning text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Zapatería</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-dark text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded bg-danger" href="#portfolio">Catálogo</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded bg-danger" href="/user/profile">Perfil</a></li>
                        <form method="POST" action="{{ route('logout') }}" class="nav-item mx-0 mx-lg-1">
                            @csrf

                            <button type="submit" class="nav-link py-3 px-0 px-lg-3 rounded bg-danger">
                                {{ __('Cerrar sesión') }}
                            </button>
                        </form>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded bg-danger" href="carrito"><i class="fas fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-light text-black text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <p class="masthead-subheading font-weight-light mb-0">¡Hola {{ Auth::user()->name }}!</p>
                <div class="font-medium text-light">.</div>
                <div class="font-medium text-light">.</div>
                <img class="masthead-avatar mb-5" src="assets/img/R.png" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Zapatería</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-dark">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-shopping-cart"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Tu mejor opción para comprar calzado al mejor precio</p>
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio bg-secondary" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white mb-0">Catálogo</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-shopping-cart"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    
                <h2 class="page-section-heading text-uppercase text-white mb-0">Tenis</h2>
                    @foreach ($calzados as $calzado_)      
                            <!-- Portfolio Item 1-->
                            <?php if($calzado_->tipo == 'Tenis'){ ?>
                            <div class="col-md-6 col-lg-4 mb-5">
                                            <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1{{$calzado_->id}}">
                                                <div class="bg-warning portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                                    <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                                                </div>
                                                
                                                <img class="img-fluid" src="{{$calzado_->imagen}}" alt="..." />
                                                
                                            
                                            </div>
                                        </div>
                                        
                            <!-- Portfolio Modal 1-->
                            <div class="portfolio-modal modal fade" id="portfolioModal1{{$calzado_->id}}" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                                        <div class="modal-body text-center pb-5">
                                            <div class="container">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-8">
                                                        <!-- Portfolio Modal - Title-->
                                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tipo de calzado: {{$calzado_->tipo}}</h2>
                                                        <!-- Icon Divider-->
                                                        <div class="divider-custom">
                                                            <div class="divider-custom-line"></div>
                                                            <div class="divider-custom-icon"><i class="fas fa-shopping-cart"></i></div>
                                                            <div class="divider-custom-line"></div>
                                                        </div>
                                                        <!-- Portfolio Modal - Image-->
                                                        <img class="img-fluid rounded mb-5" src="{{ $calzado_->imagen }}" alt="..." />
                                                        <!-- Portfolio Modal - Text-->
                                                        <p class="mb-4">Marca: {{$calzado_->marca}}</p>
                                                        <p class="mb-4">Modelo: {{$calzado_->modelo}}</p>
                                                        <p class="mb-4">Precio: ${{$calzado_->precio}}</p>
                                                        <li class=""><a class="btn btn-warning" href="#">Comprar</a></li>
                                                        <li class=""><a class="btn btn-warning" href="#">Agregar al carrito</a></li>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                    @endforeach
                    <h2 class="page-section-heading text-uppercase text-white mb-0">Zapatillas</h2>
                    @foreach ($calzados as $calzado_)      
                            <!-- Portfolio Item 1-->
                            <?php if($calzado_->tipo == 'zapatillas'){ ?>
                            <div class="col-md-6 col-lg-4 mb-5">
                                            <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1{{$calzado_->id}}">
                                                <div class="bg-warning portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                                    <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                                                </div>
                                                    
                                                        <img class="img-fluid" src="{{$calzado_->imagen}}" alt="..." />
                                                    
                                            </div>
                                            
                                        </div>
                            <!-- Portfolio Modal 1-->
                            <div class="portfolio-modal modal fade" id="portfolioModal1{{$calzado_->id}}" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                                        <div class="modal-body text-center pb-5">
                                            <div class="container">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-8">
                                                        <!-- Portfolio Modal - Title-->
                                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tipo de calzado: {{$calzado_->tipo}}</h2>
                                                        <!-- Icon Divider-->
                                                        <div class="divider-custom">
                                                            <div class="divider-custom-line"></div>
                                                            <div class="divider-custom-icon"><i class="fas fa-shopping-cart"></i></div>
                                                            <div class="divider-custom-line"></div>
                                                        </div>
                                                        <!-- Portfolio Modal - Image-->
                                                        <img class="img-fluid rounded mb-5" src="{{ $calzado_->imagen }}" alt="..." />
                                                        <!-- Portfolio Modal - Text-->
                                                        <p class="mb-4">Marca: {{$calzado_->marca}}</p>
                                                        <p class="mb-4">Modelo: {{$calzado_->modelo}}</p>
                                                        <p class="mb-4">Precio: ${{$calzado_->precio}}</p>
                                                        <li class=""><a class="btn btn-warning" href="#">Comprar</a></li>
                                                        <li class=""><a class="btn btn-warning" href="#">Agregar al carrito</a></li>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                    @endforeach
                    <h2 class="page-section-heading text-uppercase text-white mb-0">Sandalias</h2>
                    @foreach ($calzados as $calzado_)      
                            <!-- Portfolio Item 1-->
                            <?php if($calzado_->tipo == 'sandalias'){ ?>
                            <div class="col-md-6 col-lg-4 mb-5">
                                            <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1{{$calzado_->id}}">
                                                <div class="bg-warning portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                                    <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                                                </div>
                                                    
                                                        <img class="img-fluid" src="{{$calzado_->imagen}}" alt="..." />
                                                    
                                            </div>
                                        </div>
                            <!-- Portfolio Modal 1-->
                            <div class="portfolio-modal modal fade" id="portfolioModal1{{$calzado_->id}}" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                                        <div class="modal-body text-center pb-5">
                                            <div class="container">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-8">
                                                        <!-- Portfolio Modal - Title-->
                                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tipo de calzado: {{$calzado_->tipo}}</h2>
                                                        <!-- Icon Divider-->
                                                        <div class="divider-custom">
                                                            <div class="divider-custom-line"></div>
                                                            <div class="divider-custom-icon"><i class="fas fa-shopping-cart"></i></div>
                                                            <div class="divider-custom-line"></div>
                                                        </div>
                                                        <!-- Portfolio Modal - Image-->
                                                        <img class="img-fluid rounded mb-5" src="{{ $calzado_->imagen }}" alt="..." />
                                                        <!-- Portfolio Modal - Text-->
                                                        <p class="mb-4">Marca: {{$calzado_->marca}}</p>
                                                        <p class="mb-4">Modelo: {{$calzado_->modelo}}</p>
                                                        <p class="mb-4">Precio: ${{$calzado_->precio}}</p>
                                                        <li class=""><a class="btn btn-warning" href="#">Comprar</a></li>
                                                        <li class=""><a class="btn btn-warning" href="#">Agregar al carrito</a></li>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                    @endforeach
                    <h2 class="page-section-heading text-uppercase text-white mb-0">Botas</h2>
                    @foreach ($calzados as $calzado_)      
                            <!-- Portfolio Item 1-->
                            <?php if($calzado_->tipo == 'botas'){ ?>
                            <div class="col-md-6 col-lg-4 mb-5">
                                            <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1{{$calzado_->id}}">
                                                <div class="bg-warning portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                                    <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                                                </div>
                                                    
                                                        <img class="img-fluid" src="{{$calzado_->imagen}}" alt="..." />
                                                    
                                            </div>
                                        </div>
                            <!-- Portfolio Modal 1-->
                            <div class="portfolio-modal modal fade" id="portfolioModal1{{$calzado_->id}}" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                                        <div class="modal-body text-center pb-5">
                                            <div class="container">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-8">
                                                        <!-- Portfolio Modal - Title-->
                                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tipo de calzado: {{$calzado_->tipo}}</h2>
                                                        <!-- Icon Divider-->
                                                        <div class="divider-custom">
                                                            <div class="divider-custom-line"></div>
                                                            <div class="divider-custom-icon"><i class="fas fa-shopping-cart"></i></div>
                                                            <div class="divider-custom-line"></div>
                                                        </div>
                                                        <!-- Portfolio Modal - Image-->
                                                        <img class="img-fluid rounded mb-5" src="{{ $calzado_->imagen }}" alt="..." />
                                                        <!-- Portfolio Modal - Text-->
                                                        <p class="mb-4">Marca: {{$calzado_->marca}}</p>
                                                        <p class="mb-4">Modelo: {{$calzado_->modelo}}</p>
                                                        <p class="mb-4">Precio: ${{$calzado_->precio}}</p>
                                                        <li class=""><a class="btn btn-warning" href="#">Comprar</a></li>
                                                        <li class=""><a class="btn btn-warning" href="#">Agregar al carrito</a></li>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                    @endforeach
                    <h2 class="page-section-heading text-uppercase text-white mb-0">Zapatos</h2>
                    @foreach ($calzados as $calzado_)      
                            <!-- Portfolio Item 1-->
                            <?php if($calzado_->tipo == 'zapatos'){ ?>
                            <div class="col-md-6 col-lg-4 mb-5">
                                            <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1{{$calzado_->id}}">
                                                <div class="bg-warning portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                                    <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                                                </div>
                                                    
                                                        <img class="img-fluid" src="{{$calzado_->imagen}}" alt="..." />
                                                    
                                            </div>
                                        </div>
                            <!-- Portfolio Modal 1-->
                            <div class="portfolio-modal modal fade" id="portfolioModal1{{$calzado_->id}}" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                                        <div class="modal-body text-center pb-5">
                                            <div class="container">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-8">
                                                        <!-- Portfolio Modal - Title-->
                                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tipo de calzado: {{$calzado_->tipo}}</h2>
                                                        <!-- Icon Divider-->
                                                        <div class="divider-custom">
                                                            <div class="divider-custom-line"></div>
                                                            <div class="divider-custom-icon"><i class="fas fa-shopping-cart"></i></div>
                                                            <div class="divider-custom-line"></div>
                                                        </div>
                                                        <!-- Portfolio Modal - Image-->
                                                        <img class="img-fluid rounded mb-5" src="{{ $calzado_->imagen }}" alt="..." />
                                                        <!-- Portfolio Modal - Text-->
                                                        <p class="mb-4">Marca: {{$calzado_->marca}}</p>
                                                        <p class="mb-4">Modelo: {{$calzado_->modelo}}</p>
                                                        <p class="mb-4">Precio: ${{$calzado_->precio}}</p>
                                                        <li class=""><a class="btn btn-warning" href="#">Comprar</a></li>
                                                        <li class=""><a class="btn btn-warning" href="#">Agregar al carrito</a></li>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                    @endforeach
                    <h2 class="page-section-heading text-uppercase text-white mb-0">Mocasines</h2>
                    @foreach ($calzados as $calzado_)      
                            <!-- Portfolio Item 1-->
                            <?php if($calzado_->tipo == 'mocasines'){ ?>
                            <div class="col-md-6 col-lg-4 mb-5">
                                            <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1{{$calzado_->id}}">
                                                <div class="bg-warning portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                                    <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                                                </div>
                                                    
                                                        <img class="img-fluid" src="{{$calzado_->imagen}}" alt="..." />
                                                    
                                            </div>
                                        </div>
                            <!-- Portfolio Modal 1-->
                            <div class="portfolio-modal modal fade" id="portfolioModal1{{$calzado_->id}}" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                                        <div class="modal-body text-center pb-5">
                                            <div class="container">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-8">
                                                        <!-- Portfolio Modal - Title-->
                                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tipo de calzado: {{$calzado_->tipo}}</h2>
                                                        <!-- Icon Divider-->
                                                        <div class="divider-custom">
                                                            <div class="divider-custom-line"></div>
                                                            <div class="divider-custom-icon"><i class="fas fa-shopping-cart"></i></div>
                                                            <div class="divider-custom-line"></div>
                                                        </div>
                                                        <!-- Portfolio Modal - Image-->
                                                        <img class="img-fluid rounded mb-5" src="{{ $calzado_->imagen }}" alt="..." />
                                                        <!-- Portfolio Modal - Text-->
                                                        <p class="mb-4">Marca: {{$calzado_->marca}}</p>
                                                        <p class="mb-4">Modelo: {{$calzado_->modelo}}</p>
                                                        <p class="mb-4">Precio: ${{$calzado_->precio}}</p>
                                                        <li class=""><a class="btn btn-warning" href="#">Comprar</a></li>
                                                        <li class=""><a class="btn btn-warning" href="#">Agregar al carrito</a></li>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- About Section-->
        <!-- Contact Section-->
        <!-- Footer-->
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white bg-dark">
            <div class="container"><small>Copyright &copy; Zapatería 2021</small></div>
        </div>
        <!-- Portfolio Modals-->
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
