<nav class="navbar is-info">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href={{ route('home') }}>
                <img src={{asset('img/logo.png')}} alt="Logo">
            </a>

            <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div id="navbarExampleTransparentExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href={{route('showIndexCliente')}}>
                    Cliente
                </a>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <p class="control">
                        <a class="button is-primary" href="#">
                            <span class="icon">
                                <i class="fas fa-sign-in-alt"></i>
                            </span>
                            <span>Login</span>
                        </a>
                    </p>
                </div>
            </div>

        </div>
    </div>
</nav>
