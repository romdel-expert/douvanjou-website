<?php $title = "L'organisation de Douvanjou"; ?>

<?php ob_start(); ?>


<section class="content-page before-page container-fluid">
    <h1 class="text-center bgd-fade p-3 text-blue" style="text-transform: uppercase; font-weight: normal; font-size: 200%;">
        Constitution
    </h1>

    <div class="row organisation">
        <div class="col-xl-6 col-lg-6">
            <div>
                <h5>Membres fondateurs</h5>
                <ul>
                    <li>
                        <p>BARTHELEMY Pierre Ludovic, médecin</p>
                    </li>
                    <li>
                        <p>MERCIER Jean Michard, logisticien, ancien séminariste</p>
                    </li>
                    <li>
                        <p>MERCIER Samuel, artisan, auto-entrepreneur</p>
                    </li>
                    <li>
                        <p>REGIS Daniello, artisan</p>
                    </li>
                    <li>
                        <p>ROMELUS Jean Delince, ingénieur électronique</p>
                    </li>
                </ul>
            </div>
        </div>


        <div class="col-xl-6 col-lg-6">
            <h5>Membres du bureau</h5>

            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <h6>France</h6>
                    <ul>
                        <li>
                            <p>BARTHELEMY Pierre Ludovic, président</p>
                        </li>
                        <li>
                            <p>MERCIER Samuel, vice président</p>
                        </li>
                        <li>
                            <p>REGIS Daniello, trésorier</p>
                        </li>
                        <li>
                            <p>ROMELUS Jean Delince, trésorier adjoint, secrétaire général</p>
                        </li>
                        <li>
                            <p>MERCIER Jean Michard, relations extérieures</p>
                        </li>
                        <li>
                            <p>FABA Bénédicte, relations extérieures, conseillère</p>
                        </li>
                        <li>
                            <p>KELLY Kermel, secrétaire adjointe, conseillère</p>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <h6>Haïti</h6>

                    <ul>
                        <li>
                            <p>EMMANUEL Antoine, président</p>
                        </li>
                        <li>
                            <p>MERCIER Jean Gardy, trésorier</p>
                        </li>
                        <li>
                            <p>REGISTE Jojo (trésorier adjoint)</p>
                        </li>
                        <li>
                            <p>VICTOR Frisner, délégué</p>
                        </li>
                        <li>
                            <p>GEDEON Guillio, délégué adjoint</p>
                        </li>
                        <li>
                            <p>MERCIER Mirla, conseiller</p>
                        </li>
                        <li>
                            <p>ROMELUS Rodelin, conseiller</p>
                        </li>
                    </ul>
                </div>
                <div class="ccol-xl-6 col-lg-6">
                    <h6>Représentant Etats Unis</h6>

                    <ul>
                        <li>Bientôt connu</li>
                    </ul>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <h6>Représentant Canada</h6>

                    <ul>
                        <li>Bientôt connu</li>
                    </ul>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <h6>Représentant Chili</h6>

                    <ul>
                        <li>Bientôt connu</li>
                    </ul>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <h6>Représentant du reste de l’ Amérique du Sud</h6>

                    <ul>
                        <li>Bientôt connu</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<?php $content = ob_get_clean(); ?>

<?php require "./assets/view/gabarit.php"; ?>