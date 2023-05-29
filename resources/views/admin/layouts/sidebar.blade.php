<div class="vertical-menu">
    <div data-simplebar class="h-100">

        <!--- Sidemenu -->

        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">{{ __('menu.menu') }}</li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span>{{ __('menu.dashboard') }}</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>{{ __('menu.company_module') }}</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('companies.index') }}">{{ __('menu.company_manage') }}</a></li>
                        <li><a href="{{ route('companies.create') }}">{{ __('menu.company_add') }}</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>{{ __('menu.employee_module') }}</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('employees.create') }}">{{ __('menu.employee_add') }}</a></li>
                        <li><a href="{{ route('employees.index') }}">{{ __('menu.employee_manage') }}</a></li>
                        {{--  <li><a href="{{ route('abcd') }}">Assign Employe</a></li>  --}}
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>