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

<div class="bottom-header" id="bottom-header1" style="display: none;">
    <div class="menu-icon1" onClick="closeMenu()">
        <i class="bi bi-x-lg"></i>
    </d iv>

    <ul>
        <li>
            <a href="<?= "../index.php?action=the_asso" ?>"   onclick="closeMenu()">L'association</a>
        </li>
        <li>
            <a href="<?= "../index.php?action=our_org" ?>"   onclick="closeMenu()">Notre organisation</a>
        </li>
        <li>
            <a href="<?= "../index.php?action=actualite" ?>"   onclick="closeMenu()">Actualité</a>
        </li>
        <li>
            <a href="<?= "../index.php?action=our_projects" ?>"   onclick="closeMenu()">Nos projets</a>
        </li>
        <li>
            <a href="<?= "../index.php?action=contact" ?>"   onclick="closeMenu()">Contact</a>
        </li>
        <li>
            <a href="<?= "../index.php?action=subscribe" ?>"   onclick="closeMenu()">Adhésion</a>
        </li>
    </ul>
</div>