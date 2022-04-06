<header class="container-fluid">
    <nav class="navbar navbar-expand-sm navbar-light header-navbar">
        <div class="header-navbar-brand">
            <div class="navbar-brand">
                <a href="#"><img src="{{ asset('images/hapo_learn.png') }}" alt="hapo_learn" class="w-100"></a>
            </div>
        </div>
        <button class="navbar-toggler header-tonggle" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="headerBtnIcon">
            <span class="navbar-toggler-icon"></span>
            <i class="fa fa-times header-iconx hide"></i>
        </button>
        <div class="collapse navbar-collapse header-content" id="navbarSupportedContent">
            <ul class="navbar-nav header-ul">
                <li class="nav-item header-nav-item">
                    <a class="nav-link" href="#">HOME</a>
                </li>
                <li class="nav-item header-nav-item header-active">
                    <a class="nav-link" href="#">ALL COURSES</a>
                </li>
                <li class="nav-item header-nav-item header-lr-cus" data-toggle="modal" data-target="#loginRegisterModal">
                    <a class="nav-link" href="#">LOGIN/REGISTER</a>
                </li>
                <li class="nav-item header-nav-item">
                    <a class="nav-link" href="#">PROFILE</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
