<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        @if (env('APP_NAME') != null)
            {{ env('APP_NAME') }}
        @else
            Laravel
        @endif
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ Request::is('employee') ? 'active' : '' }}">
                <a class="nav-link" href="/employee">Employee <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ Request::is('tasks') ? 'active' : '' }}">
                <a class="nav-link" href="/tasks">Tasks <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>