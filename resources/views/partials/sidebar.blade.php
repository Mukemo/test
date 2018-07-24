<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
            <li><a href="{{ route('search.index') }}"><i class="fa fa-search"></i><span>Recherche...</span></a></li>
            <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-tachometer-alt"></i> <span>Panneau de contrôle</span></a></li>
                @if(Auth::check())
                  @if( Auth::user()->super_admin)
                     <li><a href="{{ route('admin.list') }}" class=""><i class="lnr lnr-list"></i> <span>Liste des admins</span></a></li>
                  @endif
                @endif
                <li>
                    <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-cog"></i> <span>Management</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subPages" class="collapse ">
                        <ul class="nav">
                            <li><a href="{{ route('personne.index') }}" class=""><i class="lnr lnr-users"></i> Participant</a></li>
                            <li><a href="{{ route('intervenant.index') }}" class=""><i class="lnr lnr-briefcase"></i> Intervenants</a></li>
                            <li><a href="{{ route('hotesse.index') }}" class=""><i class="fa fa-female"></i>Hotesses</a></li>
                            <li><a href="{{ route('chauffeur.index') }}" class=""><i class="lnr lnr-car"></i>Chauffeurs</a></li>
                            <li><a href="{{ route('affectation.index') }}"><i class="lnr lnr-enter"></i>Affectation </a></li>
                            <li><a href="{{ route('programme.index')}}"><i class="lnr lnr-layers"></i>Programmes </a></li>
                            <li><a href="{{ route('activite.index') }}"><i class="lnr lnr-chart-bars"></i> <span>Activites</span></a></li>
                            <li><a href="{{ route('participation.index') }}"><span class="lnr lnr-link"></span> Participation</a></li>
                        </ul>
                    </div>
                </li>
                <!-- <li><a href="panels.html" class=""><i class="lnr lnr-cog"></i> <span>Panels</span></a></li>
                <li><a href="notifications.html" class=""><i class="lnr lnr-alarm"></i> <span>Notifications</span></a></li>

                <li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>
                <li><a href="typography.html" class=""><i class="lnr lnr-text-format"></i> <span>Typography</span></a></li>
                <li><a href="icons.html" class=""><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li> -->
            </ul>
        </nav>
    </div>
</div>
