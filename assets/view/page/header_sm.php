<div class="top-header" id="top-header">
    <div class="menu-icon"  onclick="openMenu()">
        <i class="bi bi-list"></i>
    </div>

    <div class="logo">
        <a href="../index.php?action=home">
            <img src="./assets/images/logo.png" alt="Le logo de Douvanjour" />
        </a>
    </div>

    <div class="bloc-btn">
        <a href="<?= "../index.php?action=acount" ?>" class="user-header"><i class="bi bi-person"></i></a>
        <a href="<?= "../index.php?action=form_given" ?>" class="btn btn-top-header" id="don-lg">Je fais un don</a>
        <a href="<?= "../index.php?action=form_given" ?>" class="btn btn-top-header" id="don-xm">Don</a>
    </div>
</div>

<div class="bottom-header" id="bottom-header1" style="display: block;">
    <div class="menu-icon1" onClick="closeMenu()">
        <i class="bi bi-x-lg"></i>
    </d iv>

    <ul>
        <li  onclick="closeMenu()">
            <a href="<?= "../index.php?action=the_asso" ?>">L'association</a>
        </li>
        <li  onclick="closeMenu()">
            <a href="<?= "../index.php?action=our_org" ?>">Notre organisation</a>
        </li>
        <li  onclick="closeMenu()">
            <a href="<?= "../index.php?action=actualite" ?>">Actualité</a>
        </li>
        <li  onclick="closeMenu()">
            <a href="<?= "../index.php?action=our_projects" ?>">Nos projets</a>
        </li>
        <li  onclick="closeMenu()">
            <a href="<?= "../index.php?action=contact" ?>">Contact</a>
        </li>
        <li  onclick="closeMenu()">
            <a href="<?= "../index.php?action=subscribe" ?>">Adhésion</a>
        </li>
    </ul>
</div>