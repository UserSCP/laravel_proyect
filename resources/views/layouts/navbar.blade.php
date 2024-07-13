<nav class="navbar">
    <div class="navbar-left">
        <ul class="sticky navbar" style="position: sticky">
            <li><a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">{{ __('fields.navbar.home') }}</a></li>
            <li><a class="{{ request()->routeIs('products.index', 'products.create', 'products.edit') ? 'active' : '' }}"
                    href="{{ route('products.index') }}">{{ __('fields.navbar.option1') }}</a></li>
            <li><a class="{{ request()->routeIs('categories.index', 'categories.create', 'categories.edit') ? 'active' : '' }}"
                    href="{{ route('categories.index') }}">{{ __('fields.navbar.option2') }}</a></li>
            <li><a class="{{ request()->routeIs('brands.index', 'brands.create', 'brands.edit') ? 'active' : '' }}"
                    href="{{ route('brands.index') }}">{{ __('fields.navbar.option3') }}</a></li>
        </ul>
    </div>
    <div class="navbar-right">
        <ul>
            @guest
                <li>
                    <a class="{{ request()->routeIs('login') ? 'active' : '' }}" href="{{ route('login') }}">{{ __('fields.navbar.log_in') }}</a>
                </li>
                <li>
                    <a class="{{ request()->routeIs('register') ? 'active' : '' }}"
                        href="{{ route('register') }}">{{ __('fields.navbar.sign_up') }}</a>
                </li>
            @else
                <li>
                    <a class="nav-link " href="#">{{ Auth::user()->name }}</a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="POST" >
                        @csrf
                        <button type="submit" class="button button2 ">{{ __('fields.navbar.log_out') }}</button>
                    </form>
                </li>
            @endguest
        </ul>
    </div>
    </ul>
</nav>
