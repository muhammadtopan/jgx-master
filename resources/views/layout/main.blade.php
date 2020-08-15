    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>@yield('title')</title>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">LOGO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="{{ url('/') }}">Perusahaan <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="{{ url('#') }}">Layanan</a>
                    <a class="nav-item nav-link" href="{{ url('#') }}">Tentang</a>
                </div>
            </div>  
        </nav>

        @yield('container')

        <!--==========================
            Footer
        ============================-->
        <footer id="footer">
            <div class="footer-top">
            <div class="container">
                <div class="row">   
                <div class="col-lg-4 col-md-4 social-links"> 
                    <a href="https://www.instagram.com/kkntematik_aksitageh/?hl=id" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
                    <span>@jgx</span>
                </div>
                <div class="col-lg-4 col-md-4 social-links"> 
                    <a href="https://www.instagram.com/neotelemetri/?hl=id" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
                    <span>@jgxinstgram</span>
                </div>
                <div class="col-lg-4 col-md-4 social-links"> 
                    <a href="https://www.instagram.com/aksitageh/?hl=id" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
                    <span>@jgx</span>
                </div>
                </div>
            </div>
            </div>

            <div class="container">
            <div class="copyright">
                Copyright &copy;<strong>2020</strong> JGX Team
            </div>
            </div>
        </footer><!-- #footer -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
    </body>
    </html>