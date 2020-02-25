<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Coodex</a>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{Request::is('owners')? 'active' : ''}}">
                <a class="nav-link" href="/owners">Owners</a>
            </li>
            <li class="nav-item {{Request::is('cars')? 'active' : ''}}">
                <a class="nav-link" href="/cars">Cars</a>
            </li>
        </ul>
    </div>
</nav>