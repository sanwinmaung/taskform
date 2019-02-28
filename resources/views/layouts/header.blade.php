 <header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="/"><img src="{{ asset('custom/img/logo.png') }}" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav justify-content-end">
                    <li class="nav-item {{ set_active('/') }}"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item {{ set_active('task-forms') }}"><a class="nav-link" href="{{ route('task-forms.index') }}">All Task List</a></li>
                    <li class="nav-item {{ set_active('task-forms/create') }}"><a class="nav-link" href="{{ route('task-forms.create') }}">Add Task</a></li>
                    <li class="nav-item {{ set_active('portfolio') }}"><a class="nav-link" href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false">All Settings</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="{{ route('task-types.index') }}">Task Type</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('contact.index') }}">Contact</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('priority.index') }}">Priority</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">Assignee</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
</header>