<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ url('/') }}" class="nav-link px-2 text-white">Home</a></li>
                @auth
                    @if (Auth::user()->role == 'admin')
                        <li><a href="{{ url('/tasks') }}" class="nav-link px-2 text-white">Task</a></li>
                    @endif
                @endauth
                <li><a href="{{ url('/viewtasks') }}" class="nav-link px-2 text-white">View Task List</a></li>
            </ul>
            <div class="text-end">
                @guest
                    <a href="{{ route('login') }}" type="button" class="btn btn-outline-light me-2">Login</a>
                    <a href="{{ route('register') }}" type="button" class="btn btn-warning">Sign-up</a>
                @else
                    <a href="{{ route('logout') }}" type="button" class="btn btn-warning"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">Halo
                        {{ Auth::user()->name }}</a>
                    <form action="{{ route('logout') }}" id="logout-form" method="POST">
                        @csrf
                    </form>
                @endguest
            </div>
        </div>
    </div>
</header>
