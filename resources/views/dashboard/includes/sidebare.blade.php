<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow "
     data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation"
            data-menu="menu-navigation">
            <li class=" nav-item">
                <a href="{{route('admin.dashboard')}}">
                    <i class="la la-home"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">
                        {{__('cpanel/sidebar.Dashboard')}}
                    </span>
                </a>
            </li>

            <!-- Issues-->
            <li class=" nav-item">
                <a href="{{route('admin.section')}}">
                    <i class="la la-align-justify"></i>
                    <span class="badge badge badge-info badge-pill float-right mr-2">
                        {{\App\Models\Section::count()}}
                    </span>
                        <span class="menu-title" data-i18n="Sections">
                        {{__('cpanel/sidebar.Sections')}}
                    </span>
                </a>
            </li>

            <!-- Tests-->
            <li class=" nav-item">
                <a href="{{route('admin.subsections')}}">
                    <i class="la la-align-justify"></i>
                    <span class="badge badge badge-info badge-pill float-right mr-2">
                        {{\App\Models\Subsection::count()}}
                    </span>
                    <span class="menu-title" data-i18n="Subsections">
                        {{__('cpanel/sidebar.Subsections')}}
                    </span>
                </a>
            </li>

            <li class=" nav-item">
                <a href="{{route('admin.categories')}}">
                    <i class="la la-align-justify"></i>
                    <span class="badge badge badge-info badge-pill float-right mr-2">
                        {{\App\Models\Category::count()}}
                    </span>
                    <span class="menu-title" data-i18n="Categories">
                        {{trans('cpanel/sidebar.Categories')}}
                    </span>
                </a>
            </li>

            <!-- Grades-->
            <li class=" nav-item">
                <a href="">
                    <i class="la la-align-justify"></i>
                    <span class="badge badge badge-info badge-pill float-right mr-2">

                    </span>
                            <span class="menu-title" data-i18n="Grades">
                        {{trans('cpanel/sidebar.Grades')}}
                    </span>
                </a>
            </li>

            <!-- classes-->
            <li class=" nav-item">
                <a href="">
                    <i class="la la-align-justify"></i>
                    <span class="menu-title" data-i18n="Classes">
                {{trans('cpanel/sidebar.Classes')}}
            </span>
                    <span class="badge badge badge-info badge-pill float-right mr-2">

            </span>
                </a>
            </li>

        </ul>
    </div>
</div>


