<?php include("../includes/dashboard_header.php"); ?>
<?php include("../includes/dashboard_nav.php"); ?>

    <div class="mainContent">
        <div class="row dashBoardmain d-flex justify-content-evenly">
            <div class="col-lg-7 col-xs-12 neumorphismBorderDashboard mt-2">
                <p class="taglineDashboard">Bonjour les parents !</p>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 text-center">
                        <p>Soyez les bienvenus sur votre espace en ligne.</p>
                        <p>N'oubliez pas que si vous avez un souci, vous pouvez m'appeler à tout moment !</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 text-center">
                        <p><i class="bi bi-telephone-fill"></i></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xs-12 neumorphismBorderDashboard mt-2">
                <p class="taglineDashboard">Calendrier</p>
                <h1 class="text-center"><a href="?ym=<?php echo $prev; ?>"><i class="bi bi-arrow-left-circle"></i></a>
                    <?php echo $html_title; ?> <a href="?ym=<?php echo $next; ?>"><i
                            class="bi bi-arrow-right-circle"></i></a></h1>
                <table class="table table-bordered">
                    <tr>
                        <th>L</th>
                        <th>M</th>
                        <th>M</th>
                        <th>J</th>
                        <th>V</th>
                        <th>S</th>
                        <th>D</th>
                    </tr>
                    <?php
                        foreach ($weeks as $week) {
                            echo $week;
                        }
                    ?>
                </table>
            </div>
        </div>

        <div class="row dashBoardmain d-flex justify-content-center">
            <div class="col-lg-11 col-xs-12 neumorphismBorderDashboard mt-2">
                <h1 class="taglineDashboard"><i class="fs-4 bi bi-calendar-date"></i> Vos deniers rendez-vous</h1>
                <div class="row m-3 d-flex justify-content-evenly">
                    <div class="col-lg-2 col-sm-6 text-center text-wrap mt-2 mb-2">
                        <div class="userAppointment neumorphismBordercards p-3">
                            <p><i class="fs-3 bi bi-person-circle"></i></p>
                            <p>firstname</p>
                            <p>lastname</p>
                            <p>date rdv</p>
                            <p>heure rdv</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 text-center text-wrap mt-2 mb-2">
                        <div class="userAppointment neumorphismBordercards p-3">
                            <p><i class="fs-3 bi bi-person-circle"></i></p>
                            <p>firstname</p>
                            <p>lastname</p>
                            <p>date rdv</p>
                            <p>heure rdv</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 text-center mt-2 mb-2">
                        <div class="userAppointment neumorphismBordercards p-3">
                            <p><i class="fs-3 bi bi-person-circle"></i></p>
                            <p>firstname</p>
                            <p>lastname</p>
                            <p>date rdv</p>
                            <p>heure rdv</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 text-center mt-2 mb-2">
                        <div class="userAppointment neumorphismBordercards p-3">
                            <p><i class="fs-3 bi bi-person-circle"></i></p>
                            <p>firstname</p>
                            <p>lastname</p>
                            <p>date rdv</p>
                            <p>heure rdv</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 text-center mt-2 mb-2">
                        <div class="userAppointment neumorphismBordercards p-3">
                            <p><i class="fs-3 bi bi-person-circle"></i></p>
                            <p>firstname</p>
                            <p>lastname</p>
                            <p>date rdv</p>
                            <p>heure rdv</p>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center mt-5 mb-5">
                    <div class="col-5 d-flex justify-content-center text-wrap">
                        <a href="dashboard_rendez-vous.php" class="btn btn-primary">Voir plus de rdv</a>
                    </div>
                </div><hr>
                <div class="row dashBoardmain d-flex justify-content-evenly">
                    <div class="col-lg-6 col-xs-12 neumorphismBorderDashboard mt-2">
                        <h1 class="taglineDashboard"><i class="fs-4 bi bi-envelope"></i> Vos deniers messages</h1>
                        <div class="row m-3">
                            <div class="col-lg-12 col-sm-12 text-center text-wrap mt-2 mb-2">
                                <div class="userAppointment neumorphismBordercards pt-2">
                                    <p class="text-start ps-3">1. </span><span>Message</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="row m-3">
                            <div class="col-lg-12 col-sm-12 text-center text-wrap mt-2 mb-2">
                                <div class="userAppointment neumorphismBordercards pt-2">
                                    <p class="text-start ps-3">2. </span><span>Message</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="row m-3">
                            <div class="col-lg-12 col-sm-12 text-center text-wrap mt-2 mb-2">
                                <div class="userAppointment neumorphismBordercards pt-2">
                                    <p class="text-start ps-3">3. </span><span>Message</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center mt-5 mb-3">
                            <div class="col-5 d-flex justify-content-center text-wrap">
                                <a href="dashboard_messages.php" class="btn btn-primary">Voir plus de messages</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xs-12 neumorphismBorderDashboard mt-2">
                        <h1 class="taglineDashboard"><i class="fs-4 bi bi-folder"></i> Vos deniers dossiers de location
                        </h1>
                        <div class="row m-3">
                            <div class="col-lg-12 col-sm-12 text-center text-wrap mt-2 mb-2">
                                <div class="userAppointment neumorphismBordercards pt-2">
                                    <p class="text-start ps-3">1. </span><span>Justificatif domicile FB</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="row m-3">
                            <div class="col-lg-12 col-sm-12 text-center text-wrap mt-2 mb-2">
                                <div class="userAppointment neumorphismBordercards pt-2">
                                    <p class="text-start ps-3">2. </span><span>RIB FB</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="row m-3">
                            <div class="col-lg-12 col-sm-12 text-center text-wrap mt-2 mb-2">
                                <div class="userAppointment neumorphismBordercards pt-2">
                                    <p class="text-start ps-3">3. </span><span>Garants FB</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center mt-5 mb-3">
                            <div class="col-5 d-flex justify-content-center text-wrap">
                                <a href="dashboard_dossiers_loc.php" class="btn btn-primary">Voir plus de dossiers</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
<?php include("../includes/dashboard_footer.php"); ?>