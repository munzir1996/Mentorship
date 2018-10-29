<nav class="navbar navbar-inverse" style="margin-bottom: 0;">
        <div class="container-fluid">

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                aria-expanded="false">الفريق<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="{{route('team.center')}}">المركز</a></li>
                  <li><a href="{{route('team.program')}}">البرنامج</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                aria-expanded="false">برامجنا<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="{{route('university.index')}}">University Mentoreship Programe</a></li>
                  </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
