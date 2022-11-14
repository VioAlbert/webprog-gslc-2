<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
    <a class="navbar-brand" href="home">Web Programming GSLC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link @if(Request::segment(1) == 'home') active @endif" aria-current="page" href="home">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link @if(Request::segment(1) == 'team') active @endif" href="team">Our Team</a>
        </li>
        <li class="nav-item">
        <a class="nav-link @if(Request::segment(1) == 'tournaments') active @endif" href="tournaments">Tournaments</a>
        </li>
    </ul>
    </div>
</div>
</nav>
