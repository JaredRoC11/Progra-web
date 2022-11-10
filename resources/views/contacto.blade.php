<!DOCTYPE html>
<html lang="en">
    <head>
        <!--
         - Roxy: Bootstrap template by GettTemplates.com
         - https://gettemplates.co/roxy
        -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Roxy by GetTemplates.co</title>
        <meta name="description" content="Roxy">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- External CSS -->
        <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="vendor/select2/select2.min.css">
        <link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendor/lightcase/lightcase.css">
         <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400|Work+Sans:300,400,700" rel="stylesheet">
    
        <!-- CSS -->
        <link rel="stylesheet" href="css/style.min.css">
        <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
        <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    
    </head>
<body>
<body data-spy="scroll" data-target="#navbar" class="static-layout">
    <nav id="header-navbar" class="navbar navbar-expand-lg py-4">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center text-white" href="/">
            <h3 class="font-weight-bolder mb-0">ROXY</h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav-header" aria-controls="navbar-nav-header" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-nav-header">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contacto">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron d-flex align-items-center">	
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 offset-lg-1 mb-5 mb-lg-0" data-aos="fade-right">
                    <div class="bg-white p-5 shadow">
                        <div class="heading-section text-center">
                            <h2 class="mb-4">
                                Contact Us
                            </h2>
                        </div>
                        <form method="post" name="contact-us" action="/recibe-informacion">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{ old('nombre') ?? $nombre }}">
                                    @error('nombre')
                                        <i>{{ $message }}</i>
                                    @enderror
                                </div>
                                <div class="col-md-12 form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Correo" value="{{ old('email') ?? $email }}">
                                    @error('email')
                                        <i>{{ $message }}</i>
                                    @enderror
                                </div>
                                <div class="col-md-12 form-group">
                                    <textarea class="form-control" id="comentario" name="comentario" rows="6" placeholder="Your Message ..." {{ old('comentario') ?? $comentario }}></textarea>
                                    @error('comentario')
                                        <i>{{ $message }}</i>
                                    @enderror
                                </div>
                                <div class="col-md-12 text-center">
                                    <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1" data-aos="fade-left">
                    <h2 class="mb-4">
                        Best solution to create any website. Pay once.
                    </h2>
                    <p class="mb-4">I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>

                    <ul class="list-inline py-2">
                        <li class="list-inline-item text-center">
                            <span class="lnr fs-40 lnr-rocket"></span>
                            <p>Fast delivery</p>
                        </li>
                        <li class="list-inline-item text-center">
                            <span class="lnr fs-40 lnr-magic-wand"></span>
                            <p>Awesome design</p>
                        </li>
                        <li class="list-inline-item text-center">
                            <span class="lnr fs-40 lnr-cog"></span>
                            <p>Easy to customize</p>
                        </li>
                    </ul>

                </div>
            </div>
            
        </div>
</div>
</footer>	<!-- External JS -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script src="vendor/bootstrap/popper.min.js"></script>
<script src="vendor/bootstrap/bootstrap.min.js"></script>
<script src="vendor/select2/select2.min.js "></script>
<script src="vendor/owlcarousel/owl.carousel.min.js"></script>
<script src="vendor/stellar/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
<script src="vendor/isotope/isotope.min.js"></script>
<script src="vendor/lightcase/lightcase.js"></script>
<script src="vendor/waypoints/waypoint.min.js"></script>
 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
 
<!-- Main JS -->
<script src="js/app.min.js "></script>
<script src="//localhost:35729/livereload.js"></script>
</body>
</html>