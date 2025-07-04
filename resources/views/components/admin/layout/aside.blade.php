<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ Str::startsWith(request()->url(), route('admin.dashboard')) ? '' : 'collapsed' }}"
                href="{{ route('admin.dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Home</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link  {{ Str::startsWith(request()->url(), route('admin.users.index')) ? '' : 'collapsed' }}"
                data-bs-target="#users-nav" data-bs-toggle="collapse" href="#">
                <i class="ri-account-box-fill"></i><span>users</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="users-nav"
                class="nav-content collapse {{ Str::startsWith(request()->url(), route('admin.users.index')) ? 'show' : '' }}"
                data-bs-parent="#users-nav">
                <li>
                    <a href="{{ route('admin.users.index') }}"
                        class="{{ Str::startsWith(request()->url(), route('admin.users.index')) ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Liste users</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link  {{ Str::startsWith(request()->url(), route('admin.blogs.index')) ? '' : 'collapsed' }}"
                data-bs-target="#blogs-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Blog</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="blogs-nav"
                class="nav-content collapse {{ Str::startsWith(request()->url(), route('admin.blogs.index')) ? 'show' : '' }}"
                data-bs-parent="#blogs-nav">
                <li>
                    <a href="{{ route('admin.blogs.index') }}"
                        class="{{ Str::startsWith(request()->url(), route('admin.blogs.index')) ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Liste Blog</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Str::startsWith(request()->url(), route('admin.contacts.index')) ? '' : 'collapsed' }}"
                data-bs-target="#contacts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-envelope-fill"></i><span>Contacts</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="contacts-nav"
                class="nav-content collapse {{ Str::startsWith(request()->url(), route('admin.contacts.index')) ? 'show' : '' }}"
                data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('admin.contacts.index') }}"
                        class="{{ Str::startsWith(request()->url(), route('admin.contacts.index')) ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Liste contacts</span>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</aside>
