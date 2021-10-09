@extends('layouts.template')

@section('content')
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
                                    <button class="btn btn-warning" href="login" data-bs-dismiss="modal">
                                        <i class=""></i>
                                        Comprar
                                    </button>
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
                                    <button class="btn btn-warning" href="login" data-bs-dismiss="modal">
                                        <i class=""></i>
                                        Comprar
                                    </button>
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
                                    <button class="btn btn-warning" href="login" data-bs-dismiss="modal">
                                        <i class=""></i>
                                        Comprar
                                    </button>
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
                                    <button class="btn btn-warning" href="login" data-bs-dismiss="modal">
                                        <i class=""></i>
                                        Comprar
                                    </button>
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
                                    <button class="btn btn-warning" href="login" data-bs-dismiss="modal">
                                        <i class=""></i>
                                        Comprar
                                    </button>
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
                                    <button class="btn btn-warning" href="login" data-bs-dismiss="modal">
                                        <i class=""></i>
                                        Comprar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
@endforeach
@endsection 