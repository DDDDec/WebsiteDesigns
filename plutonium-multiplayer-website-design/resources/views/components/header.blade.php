<header>
    <!-- DESKTOP NAVIGATION -->
    <nav class="desktop-navigation" aria-label="desktop navigation">
        <div class="container">
            <div class="desktop-navigation-grid">
                <div class="desktop-navigation-grid-a-1">
                    <div class="desktop-navigation-grid-a-1-menu">
                        <a><li>Homepage <i class="fa-solid fa-angle-down"></i></li></a>
                        <div class="desktop-navigation-grid-a-1-menu-items">
                            <a><li><i class="fa-solid fa-house"></i> &nbsp;&nbsp;Homepage</li></a>
                            <a><li><i class="fa-solid fa-music"></i> &nbsp;&nbsp;Radio Station</li></a>
                            <a><li><i class="fa-solid fa-address-card"></i> &nbsp;&nbsp;Staff Members</li></a>
                            <div class="divider"></div>
                            <a><li><i class="fa-solid fa-align-justify"></i> &nbsp;&nbsp;Staff Applications</li></a>
                        </div>
                    </div>

                    <div class="desktop-navigation-grid-a-1-menu">
                        <a><li>Community <i class="fa-solid fa-angle-down"></i></li></a>
                        <div class="desktop-navigation-grid-a-1-menu-items">
                            <a><li><i class="fa-solid fa-magnifying-glass"></i> &nbsp;&nbsp;Search Players</li></a>
                            <a><li><i class="fa-solid fa-gamepad"></i> &nbsp;&nbsp;Online Players</li></a>
                            <div class="divider"></div>
                            <a><li><i class="fa-solid fa-trophy"></i> &nbsp;&nbsp;Current Leaderboard</li></a>
                            <a><li><i class="fa-solid fa-trophy"></i> &nbsp;&nbsp;Previous Leaderboards</li></a>
                        </div>
                    </div>

                    <div class="desktop-navigation-grid-a-1-menu">
                        <a><li>Support <i class="fa-solid fa-angle-down"></i></li></a>
                        <div class="desktop-navigation-grid-a-1-menu-items">
                            <a><li><i class="fa-solid fa-ticket"></i> &nbsp;&nbsp;Open Support Ticket</li></a>
                            <div class="divider"></div>
                            <a><li><i class="fa-brands fa-discord"></i> &nbsp;&nbsp;Discord Server</li></a>
                            <a><li><i class="fa-brands fa-twitter"></i> &nbsp;&nbsp;Twitter Page</li></a>
                            <a><li><i class="fa-brands fa-facebook-f"></i> &nbsp;&nbsp;Facebook Page</li></a>
                            <a><li><i class="fa-brands fa-youtube"></i> &nbsp;&nbsp;Youtube Channel</li></a>
                        </div>
                    </div>

                    <div class="desktop-navigation-grid-a-1-menu">
                        <a><li>Store</li></a>
                    </div>
                </div>
                <div class="desktop-navigation-grid-a-2">
                    <a><li>Login</li></a>
                    <a><li>Register</li></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- PHONE NAVIGATION -->
    <nav class="phone-navigation" aria-label="phone navigation">
        <div class="container">
            <div class="phone-navigation-grid">
                <div class="phone-navigation-grid-a-1">
                    <a onClick="navigator();"><li><i class="fa-solid fa-bars"></i></li></a>
                </div>
                <div class="phone-navigation-grid-a-2">
                    <a><li>Login</li></a>
                    <a><li>Register</li></a>
                </div>
            </div>
        </div>
        <div id="phone-navigation-popup" class="phone-navigation-popup">
            <div class="container">
                <a onClick="navigator();"><li><i class="fa-solid fa-xmark"></i></li></a>
                &nbsp;&nbsp;&nbsp;{{ config('app.name') }}<br><br>

                <div onClick="homepage();" class="navigator-button">Homepage <i class="fa-solid fa-angle-down"></i></div>
                <div id="homepage" class="navigator-items">
                    <a><li><i class="fa-solid fa-house"></i> &nbsp;&nbsp;Homepage</li></a>
                    <a><li><i class="fa-solid fa-music"></i> &nbsp;&nbsp;Radio Station</li></a>
                    <a><li><i class="fa-solid fa-address-card"></i> &nbsp;&nbsp;Staff Members</li></a>
                    <a><li><i class="fa-solid fa-align-justify"></i> &nbsp;&nbsp;Staff Applications</li></a>
                </div>

                <div onClick="community();" class="navigator-button">Community <i class="fa-solid fa-angle-down"></i></div>
                <div id="community" class="navigator-items">
                    <a><li><i class="fa-solid fa-magnifying-glass"></i> &nbsp;&nbsp;Search Players</li></a>
                    <a><li><i class="fa-solid fa-gamepad"></i> &nbsp;&nbsp;Online Players</li></a>
                    <a><li><i class="fa-solid fa-trophy"></i> &nbsp;&nbsp;Current Leaderboard</li></a>
                    <a><li><i class="fa-solid fa-trophy"></i> &nbsp;&nbsp;Previous Leaderboards</li></a>
                </div>

                <div onClick="support();" class="navigator-button">Support <i class="fa-solid fa-angle-down"></i></div>
                <div id="support" class="navigator-items">
                    <a><li><i class="fa-solid fa-ticket"></i> &nbsp;&nbsp;Open Support Ticket</li></a>
                    <a><li><i class="fa-brands fa-discord"></i> &nbsp;&nbsp;Discord Server</li></a>
                    <a><li><i class="fa-brands fa-twitter"></i> &nbsp;&nbsp;Twitter Page</li></a>
                    <a><li><i class="fa-brands fa-facebook-f"></i> &nbsp;&nbsp;Facebook Page</li></a>
                    <a><li><i class="fa-brands fa-youtube"></i> &nbsp;&nbsp;Youtube Channel</li></a>
                </div>

                <div class="navigator-button">Store</div>

                <div class="account">
                    <a><li>Login</li></a>
                    <a><li>Register</li></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- HEADER BACKGROUND -->
    <div class="background">
        <img src="{{ asset('assets/images/header3.jpg') }}" alt="Picture of rust made by salty"/>
    </div>

    <!-- HEADER -->
    <div class="container">
        <div class="header">
            <h1>{{ config('app.name') }} Homepage</h1>
            <p>Welcome to {{ config('app.name') }}, Where only the bravest of souls <br>can overcome their rivals in pursuit of victory...</p>
            <div class="playing"><i class="fa-solid fa-circle pulse"></i> 220 players getting merked</div>
        </div>
    </div>
</header>
