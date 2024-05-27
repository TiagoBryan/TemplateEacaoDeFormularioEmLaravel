<div class="container fundo-cont" > 
<header>

    <ul>
        <li> <a href=""> <img width="90px" src="{{ asset('img/Logo.png') }}" alt="Logo"> </a></li>
        <li><div class="aba-cabe"> <a href="{{ url('/') }}">O princípio </a></div></li>
        <li><div class="aba-cabe"> <a href="{{ url('/quemsomos') }}"> Quem Somos? </a></div></li>
        <li><div class="aba-cabe"> <a href="{{ url('/contact') }}"> Contato </a></div></li>
    </ul>
    

</header>
<div class="bola-header">
testr
</div>

    <div class="row cabecalho-mobile" >
        <div class="col">
        <nav class="navbar fixed-top" style="background-color: #650000; ">
    <div class="container-fluid">
        <div class="aba-cabe"><a class="navbar-brand" href="{{ url('/') }}"><img width="90px" src="{{ asset('img/Logo.png') }}" alt=""> Sol Interior</a></div>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header" style="background-color: #650000">
            <h5 class="offcanvas-title text-mobile" id="offcanvasNavbarLabel">Sol Interior</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body" style="background-color: #650000">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" style="font-weight: bold" href="{{ url('/') }}">O princípio</a>
            </li>
            <hr>
            <li class="nav-item">
                <a class="nav-link" style="font-weight: bold" href="{{ url('/quemsomos') }}">Quem Somos?</a>
            </li>
            <hr>
            <li class="nav-item ">
            <a class="nav-link" style="font-weight: bold" href="{{ url('/contact') }}">Contato</a>
            </li>
            </ul>
           
        </div>
        </div>
    </div>
    </nav>
        </div>
    </div>
    
</div>


