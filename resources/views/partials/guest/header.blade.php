<header class="main-header">
    <a href="{{ route('guest.home') }}" class="logo">
        <span class="logo-mini">    MOJE ULAZNICE </span>
        <span class="logo-lg"><img src="https://fontmeme.com/permalink/191104/d89c23724eb2ce2d66f43746102516f8.png" alt="retro-fonts" border="0" width=210 ></span>
    </a>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
        <ul class="nav navbar-nav navbar-right"> <li> <a href="#onama">O nama</a> </li>Y</ul>
            <ul class="nav navbar-nav navbar-right">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <li>    <a href="#" class="fa fa-facebook"></a> </li>
                <li>    <a href="#" class="fa fa-twitter"></a> </li>
                <li>    <a href="#" class="fa fa-instagram"></a> </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('/register') }}">Registracija</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('/login') }}">Prijava</a></li>
            </ul>
        </div>
    </nav>
</header>