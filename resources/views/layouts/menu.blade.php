<li class="nav-item {{ Request::is('karyawans*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('karyawans.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Karyawans</span>
    </a>
</li>
<li class="nav-item {{ Request::is('gajis*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('gajis.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Gajis</span>
    </a>
</li>
