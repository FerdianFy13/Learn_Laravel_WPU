<div class="profile-page sidebar-collapse">
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="bi bi-binoculars"></i> {{ config('app.name') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link smooth-scroll {{ $active === 'home' ? 'active' : '' }}" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smooth-scroll {{ $active === 'about' ? 'active' : '' }}"
                            href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smooth-scroll {{ $active === 'portofolio' ? 'active' : '' }}"
                            href="/portofolio">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smooth-scroll {{ $active === 'category' ? 'active' : '' }}"
                            href="/category">Category</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ $active === 'login' ? 'active' : '' }}" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Welcome {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu bg-danger" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item bg-danger text-light" href="/dashboard"><i
                                            class="bi bi-layout-text-window-reverse"></i> Dashboard</a></li>
                                <li>
                                    <hr class="dropdown-divider bg-dark">
                                </li>
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button class="dropdown-item bg-danger text-light"><i
                                                class="bi bi-box-arrow-right"></i> logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link smooth-scroll {{ $active === 'login' ? 'active' : '' }}" href="/login"><i
                                    class="bi bi-box-arrow-in-right"></i> Login</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</div>
