<nav class="navbar is-info">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href={{ route('home') }}>
                <img src="" alt="Logo">
            </a>

            <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div id="navbarExampleTransparentExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="https://bulma.io/">
                    Home
                </a>
                <div class="navbar-item has-dropdown is-hoverable">
                    <p class="navbar-link">
                        Cadastro
                    </p>
                    <div class="navbar-dropdown is-boxed">
                        <a class="navbar-item" href={{route('showCadastroCliente')}}>
                            Cliente
                        </a>
                    </div>
                </div>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <p class="control">
                        <a class="button is-primary"
                            href="#">
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
