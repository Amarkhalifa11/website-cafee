       <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="/dashboard" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Amar news</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('backend/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Amar khalifa</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="/dashboard" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>users</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ route('all_users') }}" class="dropdown-item">all users</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-table me-2"></i>category</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ route('category') }}" class="dropdown-item">all categories</a>
                            <a href="{{ route('category.create') }}" class="dropdown-item">add categories</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-chart-bar me-2"></i>posts</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ route('bac_all_posts') }}" class="dropdown-item">all posts</a>
                            <a href="{{ route('bac_all_posts.create') }}" class="dropdown-item">add post</a>
                        </div>
                    </div>

                </div>
            </nav>
        </div> 