<li class="menu-title">
    <span>Settings</span>
</li>
<li>
    <a class="{{ request()->routeIs('settings.logs') ? 'active' : '' }}" href="{{ route('settings.logs') }}"><i class="la la-history"></i><span>Logs</span></a>
</li>
