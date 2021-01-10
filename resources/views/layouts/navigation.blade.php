<!-- site-navbar start -->
<div class="navbar-area fixed-top">
    <div class="container">
        <nav class="site-navbar">
            <!-- site logo -->
            <a href="/" class="site-logo">Buechs.ch</a>

            <!-- site menu/nav -->
            <ul>
                <li><a class="{{ Request::is('/') ? 'active' : '' }}" href="/">Startseite</a></li>
                <li><a class="{{ Request::is('buecher*') ? 'active' : '' }}" href="/buecher">Buecher</a></li>
                <li><a class="{{ Request::is('funktionen') ? 'active' : '' }}" href="/funktionen">Funktionen</a></li>
                <li><a class="{{ Request::is('support') ? 'active' : '' }}" href="/support">Support & FAQ</a></li>
                <li><a class="{{ Request::is('ueber') ? 'active' : '' }}" href="/ueber">Über uns</a></li>
                <li class="admin-mobile"><a href="/admin">Anmelden</a></li>
                <li class="admin-desktop">
                    <a href="/admin">
                        <span class="material-icons">account_circle
                        </span>
                        <span class="align-middle">Anmelden</span></a>
                </li>
            </ul>

            <!-- nav-toggler for mobile version only -->
            <button class="nav-toggler">
                <span></span>
            </button>
        </nav>
    </div>
</div><!-- navbar-area end -->
