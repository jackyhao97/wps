<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand px-lg-4" href="<?= BASE_URL ?>">
      <img src="<?= BASE_URL . DS . 'assets/img/logo.png' ?>" alt="" class="w-50">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <a class="navbar-brand" href="<?= BASE_URL ?>">
          <img src="<?= BASE_URL . DS . 'assets/img/logo.png' ?>" alt="" class="w-50">
        </a>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-lg-5" id="navbarCustom">
          <li class="nav-item d-flex flex-column align-items-center p-3">
            <i class="fa fa-home d-none d-lg-block"></i>
            <a class="nav-link" aria-current="page" href="<?=BASE_URL?>">HOME</a>
          </li>
          <li class="nav-item d-flex flex-column align-items-center p-3">
            <i class="fa-solid fa-building d-none d-lg-block"></i>
            <a class="nav-link" aria-current="page" href="<?=BASE_URL.DS.'about/'?>">ABOUT</a>
          </li>
          <li class="nav-item d-flex flex-column align-items-center p-3">
            <i class="fa-solid fa-folder-open d-none d-lg-block"></i>
            <a class="nav-link" aria-current="page" href="<?=BASE_URL.DS.'services/'?>">SERVICES</a>
          </li>
          <li class="nav-item d-flex flex-column align-items-center p-3 mx-3 bg-body-secondary border-bottom border-primary border-5">
            <i class="fa-solid fa-users d-none d-lg-block"></i>
            <a class="nav-link fw-bold" aria-current="page" href="<?=BASE_URL.DS.'clients/'?>">CLIENTS</a>
          </li>
          <li class="nav-item d-flex flex-column align-items-center p-3">
            <i class="fa-solid fa-handshake d-none d-lg-block"></i>
            <a class="nav-link" aria-current="page" href="<?=BASE_URL.DS.'partners/'?>">PARTNERS</a>
          </li>
          <li class="nav-item d-flex flex-column align-items-center p-3">
            <i class="fa-solid fa-newspaper d-none d-lg-block"></i>
            <a class="nav-link" aria-current="page" href="<?=BASE_URL.DS.'news/'?>">NEWS</a>
          </li>
          <li class="nav-item d-flex flex-column align-items-center p-3">
            <i class="fa-solid fa-envelope d-none d-lg-block"></i>
            <a class="nav-link" aria-current="page" href="<?=BASE_URL.DS.'contact/'?>">CONTACT</a>
          </li>
          <li class="nav-item d-flex flex-column align-items-center p-3">
            <i class="fa-solid fa-suitcase d-none d-lg-block"></i>
            <a class="nav-link" aria-current="page" href="<?=BASE_URL.DS.'career/'?>">CAREER</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>