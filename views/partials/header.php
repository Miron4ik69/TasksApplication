<header>

<nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">
  <a class="navbar-brand">Tasks Application</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <?php if($_SESSION): ?>
        <a href="/logout" class="nav-link">Выйти</a>
        <?php else: ?>
        <a class="nav-link" data-toggle="modal" data-target="#loginModal">Войти</a>
        <?php endif; ?>
      </li>
    </ul>
  </div>
</nav>

</header>