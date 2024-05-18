@inject('menu_helper', 'App\Helpers\MenuHelper')

<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <h1 class="logo me-auto"><a href="{{ route('general.dashboard') }}"><img
                    src="{{ asset('admin_Assets/img/logo.png') }}" alt=""> Healwave</a></h1>

        @php
            function getActiveMenu($menu)
            {
                $currentPath = request()->path();

                // Check the current menu
                if (
                    $currentPath ==
                    ($menu->menu_type_id == 1
                        ? $menu->models->first()->model_link
                        : ($menu->menu_type_id == 2
                            ? 'Healwave/' . $menu->pages->first()->slug
                            : $menu->external_link))
                ) {
                    return true;
                }

                // Check child menus
                foreach ($menu->child_menus as $childMenu) {
                    if (getActiveMenu($childMenu)) {
                        return true;
                    }
                }

                return false;
            }

            function getMenuLink($menu)
            {
                return $menu->menu_type_id == 1
                    ? $menu->models->first()->model_link
                    : ($menu->menu_type_id == 2
                        ? 'Healwave/' . $menu->pages->first()->slug
                        : $menu->external_link);
            }
        @endphp

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                @foreach ($menu_helper->menus() as $menu)
                    <li class="dropdown">
                        <a class="nav-link scrollto @if (getActiveMenu($menu)) active @endif"
                            href="/{{ getMenuLink($menu) }}">
                            {{ $menu['menu_name'][$current_locale] }}
                            @if ($menu->child_menus()->exists())
                                <i class="bi bi-chevron-down"></i>
                            @endif
                        </a>

                        @if ($menu->child_menus()->exists())
                            <ul>
                                @foreach ($menu->child_menus as $childMenu)
                                    <li>
                                        <a class="@if (getActiveMenu($childMenu)) active @endif"
                                            href="/{{ getMenuLink($childMenu) }}">
                                            {{ $childMenu['menu_name'][$current_locale] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <a href="/Healwave/dashboard/#departments" class="appointment-btn scrollto"><span
                class="d-none d-md-inline">Make an</span>
            Appointment</a>
    </div>
</header>

{{-- @inject('menu_helper', 'App\Helpers\MenuHelper')

<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <h1 class="logo me-auto"><a href="{{ route('general.dashboard') }}"><img
                    src="{{ asset('admin_Assets/img/logo.png') }}" alt=""> Healwave</a></h1>


        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                @foreach ($menu_helper->menus() as $menu)
                    @php
                        $link = '';

                        if ($menu->menu_type_id == 1) {
                            $link = $menu->models->first()->model_link;
                        } elseif ($menu->menu_type_id == 2) {
                            $link = 'Healwave/' . $menu->pages->first()->slug;
                        } else {
                            $link = $menu->external_link;
                        }
                        $is_active = request()->path() == $link;
                    @endphp

                    <li class="dropdown">

                        <a class="nav-link scrollto {{ $is_active ? 'active' : '' }}" href="/{{ $link }}">
                            {{ $menu['menu_name'][$current_locale] }}
                            @if ($menu->child_menus()->exists())
                                <i class="bi bi-chevron-down"></i>
                            @endif
                        </a>

                        @if ($menu->child_menus()->exists())
                            <ul>
                                @foreach ($menu->child_menus as $childMenu)
                                    <li>
                                        <a
                                            href="
                                        @if ($childMenu->menu_type_id == 1) {{ $childMenu->models->first()->model_link }}
                                        @elseif ($childMenu->menu_type_id == 2)
                                            /Healwave/{{ $childMenu->pages->first()->slug }}
                                        @else
                                            {{ $childMenu->external_link }} @endif
                                        ">
                                            {{ $childMenu['menu_name'][$current_locale] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <a href="/Healwave/dashboard/#departments" class="appointment-btn scrollto"><span
                class="d-none d-md-inline">Make an</span>
            Appointment</a>
    </div>
</header> --}}
