<nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg">
            <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="index.html">
              <div class="d-flex align-items-center">
                <span class="font-sans-serif"><?= 'CVP | Admin'; ?></span></div>
            </a>
            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
              <li class="nav-item px-2">
                <div class="theme-control-toggle fa-icon-wait">
                  <input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="theme" value="dark" />
                  <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Switch to light theme">
                    <span class="fas fa-sun fs-0"></span>
                  </label>
                  <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Switch to dark theme">
                    <span class="fas fa-moon fs-0"></span>
                  </label>
                </div>
              </li>
             
              <li class="nav-item dropdown">
                <a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="/assets/img/upload/<?php if(isset($auth->profile_img)){ echo $auth->profile_img;}else { echo 'avatar.svg'; }  ?>" alt="" />
                  </div>
                </a>
                <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                  <div class="bg-white dark__bg-1000 rounded-2 py-2">
                    <a class="dropdown-item" href="">Profile &amp; account</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/admin/logout">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </nav>