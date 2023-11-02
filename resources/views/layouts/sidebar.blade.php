<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul class="navb">
                    <li class="">
                        <a class="active" href="/dashboard"><img src="{{asset('assets2/img/icons/dashboard.svg')}}" alt="img"><span> Dashboard</span> </a>
                    </li>

                    <li>
                        <a class="" href="/collaborateurs"><i data-feather="layers"></i><span> Collaborateurs </span> </a>
                    </li>

                    <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{asset('assets2/img/icons/product.svg')}}" alt="img"><span> Espace de Travails</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="" href="/projets">Projets</a></li>
                                <li><a class="" href="/taches">Taches</a></li>
                                <li><a class="" href="/tickets">Tickets</a></li>
                                <li><a class="" href="/documents">Espace Documents</a></li>
                            </ul>
                    </li>
                    {{-- <li class="submenu">
                        <a href="javascript:void(0);"><img src="{{asset('assets2/img/icons/users1.svg')}}" alt="img"><span> Agenda / Planification </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="#">Nouvelle Agenda </a></li>
                            <li><a href="#"> Liste</a></li>
                        </ul>
                    </li>  --}}

                    <li class="submenu">
                        <a href="javascript:void(0);"><img src="{{asset('assets2/img/icons/settings.svg')}}" alt="img"><span> Réglages</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a class="" href="generalsettings.html">Generales</a></li>
                            <li><a class="" href="/roles">Roles</a></li>
                            <li><a class="" href="/permissions">Permissions</a></li>
                        </ul>
                    </li>
            </ul>
            
        </div>
    </div>
</div>