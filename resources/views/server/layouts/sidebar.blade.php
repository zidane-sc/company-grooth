<div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            @if (Auth::user()->avatar)
                <img src="{{ asset('storage/'.Auth::user()->avatar) }}" class="img-circle elevation-2" alt="User Image">
            @else
                <img src="{{ asset('backend/dist/img/no-image.png') }}" class="img-circle elevation-2" alt="User Image">
            @endif
        </div>
        
        <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
             <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link {{ (request()->segment(2) == 'dashboard') ? 'active' : ''}}">
                    <i class="nav-icon fas fa-tachometer-alt mr-2"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link {{ (request()->segment(2) == 'users') ? 'active' : ''}}">
                    <i class="nav-icon fas fa-users mr-2"></i>
                    <p>Manage Admin</p>
                </a>
            </li>

            <li class="nav-item {{ (request()->segment(2) == 'manage-website') ? 'menu-open' : ''}}">
                <a href="#" class="nav-link {{ (request()->segment(2) == 'manage-website') ? 'active' : ''}}">
                    <i class="nav-icon fas fa-home mr-2"></i>
                    <p>Manage Home<i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('banners.index') }}" class="nav-link {{ (request()->segment(3) == 'banners') ? 'active' : ''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Banner</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('description.index') }}" class="nav-link {{ (request()->segment(3) == 'description') ? 'active' : ''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Description</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('visi-misi.index') }}" class="nav-link {{ (request()->segment(3) == 'visi-misi') ? 'active' : ''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Visi & Misi</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('section-one.index') }}" class="nav-link {{ (request()->segment(3) == 'section-one') ? 'active' : ''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Section One</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('section-two.index') }}" class="nav-link {{ (request()->segment(3) == 'section-two') ? 'active' : ''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Section Two</p>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="{{ route('portfolios.index') }}" class="nav-link {{ (request()->segment(3) == 'portfolios') ? 'active' : ''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Portfolio</p>
                        </a>
                    </li> --}}
                </ul>
            </li>

            <li class="nav-item {{ (request()->segment(2) == 'manage-product') ? 'menu-open' : ''}}">
                <a href="#" class="nav-link {{ (request()->segment(2) == 'manage-product') ? 'active' : ''}}">
                    <i class="nav-icon fas fa-archive mr-2"></i>
                    <p>Manage Product<i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('products.index') }}" class="nav-link {{ (request()->segment(3) == 'products') ? 'active' : ''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Products</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('advantages.index') }}" class="nav-link {{ (request()->segment(3) == 'advantages') ? 'active' : ''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Advantages</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('features.index') }}" class="nav-link {{ (request()->segment(3) == 'features') ? 'active' : ''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Features</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('faqs.index') }}" class="nav-link {{ (request()->segment(3) == 'faqs') ? 'active' : ''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Faqs</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item {{ (request()->segment(2) == 'manage-about') ? 'menu-open' : ''}}">
                <a href="#" class="nav-link {{ (request()->segment(2) == 'manage-about') ? 'active' : ''}}">
                    <i class="nav-icon fas fa-question mr-2"></i>
                    <p>Manage About<i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('teams.index') }}" class="nav-link {{ (request()->segment(3) == 'teams') ? 'active' : ''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Teams</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="{{ route('contact.index') }}" class="nav-link {{ (request()->segment(2) == 'contact') ? 'active' : ''}}">
                    <i class="nav-icon fas fa-phone-alt mr-2"></i>
                    <p>Manage Contact Us</p>
                </a>
            </li>

            <li class="nav-item {{ (request()->segment(2) == 'article') ? 'menu-open' : ''}}">
                <a href="#" class="nav-link {{ (request()->segment(2) == 'article') ? 'active' : ''}}">
                    <i class="nav-icon fas fa-book mr-2"></i>
                    <p>Article<i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('posts.index') }}" class="nav-link {{ (request()->segment(3) == 'posts') ? 'active' : ''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Posts</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('categories.index') }}" class="nav-link {{ (request()->segment(3) == 'categories') ? 'active' : ''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Categories</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('tags.index') }}" class="nav-link {{ (request()->segment(3) == 'tags') ? 'active' : ''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Tags</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>