<nav id="topbar" class="topbar">
    <div class="topbar-section">
        <div class="topbar-profile">
            <div class="profile-name">
                Welcome
            </div>
            <div class="profile-avatar">
                <img src="{{ asset('/image/icons/profile-icon.svg') }}" class="img-fluid">
            </div>
        </div>
        <div class="topbar-logout">
            <a href="{{ route('admin.logout') }}"><img src="{{ asset('/image/icons/logout-icon.svg') }}" class="img-fluid"></a>
        </div>
    </div>
    
</nav>
