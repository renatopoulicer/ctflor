<div class="navbar-fixed green darken-1">
  <nav>
    <div class="nav-wrapper green lighten-1">
      <ul class="left hide-on-med-and-down">
        <li><a href="#">Logo</a></li>
        <li class="<?php if($_SERVER['PHP_SELF'] == '/index.php') echo 'active' ?>"><a href="{{ route('home') }}">Home</a></li>
        <li class="{{ Session::has('pagePrincipal') ? 'active' : ''}}"><a href="">System</a></li>
        <li><a href="{{ route('activity') }}">Atividades</a></li>
        <li><a href="{{ route('participant') }}">Participantes</a></li>
        <li><a href="{{ route('event') }}">Eventos</a></li>
        <li><a href="{{ route('subscribingactivity') }}">Inscrição de Participantes</a></li>
        <li><a href="{{ route('subscribinglecture') }}">Inscrição de Palestra</a></li>
        <li><a href="#"><i class="large material-icons">settings</i></a></li>
      </ul>
    </div>
  </nav>
</div>