<header>
    <div id="logo">
        <span>LOGO</span>
    </div>
    <div id="account">
        <div id="image"></div>
        <div id="profile">
            <strong>{{ auth()->user()->first_name }}</strong>
            <span>{{ auth()->user()->role }}</span>
        </div>
    </div>
</header>