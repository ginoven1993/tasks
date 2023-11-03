<div class="header">

    <div class="header-left active">
            <a href="/" class="logo">
                 {{-- <img src="{{asset('assets2/img/logoo.png')}}" alt=""> --}}
            </a>
            <a href="/" class="logo-small">
                 {{-- <img src="{{asset('assets/img/logo-small.png')}}" alt=""> --}}
            </a>
            <a id="toggle_btn" href="javascript:void(0);">
            </a>
    </div>
    
    <a id="mobile_btn" class="mobile_btn" href="#sidebar">
            <span class="bar-icon">
            <span></span>
            <span></span>
            <span></span>
            </span>
    </a>
    
    <ul class="nav user-menu">
    
        <li class="nav-item">
            <div class="top-nav-search">
                <a href="javascript:void(0);" class="responsive-search">
                    <i class="fa fa-search"></i>
                </a>
                <form action="#">
                    <div class="searchinputs">
                        <input type="text" placeholder="Search Here ...">
                        <div class="search-addon">
                            <span><img src="{{asset('assets2/img/icons/closes.svg')}}" alt="img"></span>
                        </div>
                    </div>
                    <a class="btn" id="searchdiv"><img src="{{asset('assets2/img/icons/search.svg')}}" alt="img"></a>
                </form>
            </div>
        </li>
    
        <li class="nav-item dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                <img src="{{asset('assets2/img/icons/notification-bing.svg')}}" alt="img"> <span class="badge rounded-pill">4</span>
            </a>
            <div class="dropdown-menu notifications">
                    <div class="topnav-dropdown-header">
                        <span class="notification-title">Notifications</span>
                        <a href="javascript:void(0)" class="clear-noti"> Tout Effacer </a>
                    </div>

                    <div class="noti-content">
                        <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt="" src="{{asset('assets2/img/avatar2.jpg')}}">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Hervé</span> Nouvelle tache ajoutée <span class="noti-title">Correction</span></p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                              
                        </ul>
                    </div>

                    <div class="topnav-dropdown-footer">
                        <a href="#">Voir Tous les Notifications</a>
                    </div>

            </div>

        </li>
    
        <li class="nav-item dropdown has-arrow main-drop">
            <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
            <span class="user-img"><img src="{{asset('assets2/avatars/'.getAuth()->avatar)}}" alt="">
            <span class="status online"></span></span>
            </a>
            <div class="dropdown-menu menu-drop-user">
                <div class="profilename">
                    <div class="profileset">
                        <span class="user-img"><img src="{{asset('assets2/img/avatar2.jpg')}}" alt="">
                        <span class="status online"></span></span>
                        <div class="profilesets">
                            <h6>{{getAuth()->name}}</h6>
                            <h5>{{getAuth()->role}}</h5>
                        </div>
                    </div>
                    <hr class="m-0">
                    <a class="dropdown-item" href="/profile/{{getAuth()->id}}"> <i class="me-2" data-feather="user"></i> Mon Profile</a>                    
                    <hr class="m-0">
                    <a class="dropdown-item logout pb-0" href="/logout"><img src="{{asset('assets2/img/icons/log-out.svg')}}" class="me-2" alt="img">Deconnexion</a>
                </div>
            </div>
        </li>
    </ul>
    
    
    <div class="dropdown mobile-user-menu">
        <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#">Mon Profile</a>
            <a class="dropdown-item" href="#">Réglages</a>
            <a class="dropdown-item" href="#">Deconnexion</a>
        </div>
    </div>
    
</div>
