<li class="menu-title">
    <span>Main</span>
</li>
<li>
    <a class="{{ request()->routeIs('dashboard.index') ? 'active' : '' }}" href="{{ route('dashboard.index') }}"><i class="la la-dashboard"></i><span>Dashboard</span></a>
</li>
