<li class="menu-title">
    <span>Master Data</span>
</li>
<li>
    <a class="{{ request()->routeIs('master-data.users') ? 'active' : '' }}" href="{{ route('master-data.users') }}">
        <i class="la la-users"></i><span>Users</span>
    </a>
</li>
<li>
    <a class="{{ request()->routeIs('master-data.ppdb') ? 'active' : '' }}" href="{{ route('master-data.ppdb') }}">
        <i class="la la-user-graduate"></i><span>PPDB</span>
    </a>
</li>
<li>
    <a class="{{ request()->routeIs('master-data.news') ? 'active' : '' }}" href="{{ route('master-data.news') }}">
        <i class="la la-newspaper"></i><span>News</span>
    </a>
</li>
<li>
    <a class="{{ request()->routeIs('master-data.events') ? 'active' : '' }}" href="{{ route('master-data.events') }}">
        <i class="la la-calendar-check"></i><span>Events</span>
    </a>
</li>
<li>
    <a class="{{ request()->routeIs('master-data.blogs') ? 'active' : '' }}" href="{{ route('master-data.blogs') }}">
        <i class="la la-pen-nib"></i><span>Blogs</span>
    </a>
</li>
<li>
    <a class="{{ request()->routeIs('master-data.publications') ? 'active' : '' }}" href="{{ route('master-data.publications') }}">
        <i class="la la-book"></i><span>Publications</span>
    </a>
</li>
