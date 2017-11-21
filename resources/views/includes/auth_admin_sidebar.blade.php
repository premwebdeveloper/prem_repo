 <nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">

            <li class="nav-header">
                <div class="dropdown profile-element">
                    <span>
                        <img alt="image" class="img-circle" src="resources/assets/img/profile_small.jpg" />
                    </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs">
                            <strong class="font-bold">David Williams</strong>
                        </span>
                        <span class="text-muted text-xs block">Art Director <b class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="mailbox.html">Mailbox</a></li>
                        <li class="divider"></li>
                        <li>
							<a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
								<i class="fa fa-sign-out"></i> Log out
							</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
						</li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>

            <li class="special_link">
                <a href="{{ route('dashboard') }}"><i class="fa fa-database"></i> <span class="nav-label">Dashboard</span></a>
            </li>

            <li>
                <a href="{{ route('users') }}"><i class="fa fa-database"></i> <span class="nav-label">Users</span></a>
            </li>
            <li>
                <a href="{{ route('website_pages') }}"><i class="fa fa-database"></i> <span class="nav-label">Website Pages</span></a>
            </li>
            <li>
                <a href="{{ route('suggestions') }}"><i class="fa fa-database"></i> <span class="nav-label">Suggestions</span></a>
            </li>
            <li>
                <a href="{{ route('problems') }}"><i class="fa fa-database"></i> <span class="nav-label">Problems</span></a>
            </li>

        </ul>
    </div>
</nav>