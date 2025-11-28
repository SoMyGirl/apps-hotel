<nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
    <div class="container">

        <!-- LOGO -->
        <a class="navbar-brand fw-bold" href="/">PT. CIFO</a>

        <!-- TOGGLER -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#NavbarCIFO">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- MENU -->
        <div class="collapse navbar-collapse" id="NavbarCIFO">
            <ul class="navbar-nav ms-auto">

                <?php foreach ($Menu as $m): ?>
                    
                    <?php if (empty($m["submenu"])): ?>

                        <!-- Menu tanpa submenu -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $m['link'] ?>">
                                <?= $m['title'] ?>
                            </a>
                        </li>

                    <?php else: ?>

                        <!-- Menu dengan submenu -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?= $m['link'] ?>" data-bs-toggle="dropdown">
                                <?= $m['title'] ?>
                            </a>

                            <ul class="dropdown-menu">
                                <?php foreach ($m['submenu'] as $sub): ?>
                                    <li>
                                        <a class="dropdown-item" href="<?= $sub['link'] ?>">
                                            <?= $sub['title'] ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>

                    <?php endif; ?>

                <?php endforeach; ?>

            </ul>
        </div>

    </div>
</nav>


