<!-- End Navbar -->
<div class="container-fluid py-3 my-5">
    <div class="row justify-content-between d-flex px-3">
        <a class="btn card text-dark btn-info  col-sm-3 mx-4  shadow-sm mb-xl-0  mb-4">
            <div class="  ">
                <div class="card-body  p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers ">
                                <p class="text-sm mb-0  text-capitalize font-weight-bold">Data Keluhan Pelanggan</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?= $hitkel ?>
                                    <!-- <span class="text-success text-sm font-weight-bolder">+55%</span> -->
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a class="btn text-dark btn-info card  col-sm-3 mx-4  shadow-sm mb-xl-0  mb-4">
            <div class=" ">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold"> Perbaikan Success</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?= $hitper; ?>
                                    <!-- <span class="text-success text-sm font-weight-bolder">+3%</span> -->
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <!-- <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">New Clients</p>
                                <h5 class="font-weight-bolder mb-0">
                                    +3,462
                                    <span class="text-danger text-sm font-weight-bolder">-2%</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Sales</p>
                                <h5 class="font-weight-bolder mb-0">
                                    $103,430
                                    <span class="text-success text-sm font-weight-bolder">+5%</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <div class="row mt-4">
        <!-- <div class="col-lg-7 mb-lg-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="d-flex flex-column h-100">
                                <p class="mb-1 pt-2 text-bold">Data Keluhan</p>
                                <h5 class="font-weight-bolder"><?= $conf['namaweb'] ?></h5>
                                <p class="mb-5">From colors, cards, typography to complex elements, you will find the full documentation.</p>
                                <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="javascript:;">
                                    Read More
                                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                            <div class="bg-gradient-primary border-radius-lg h-100">
                                <img src="<?= base_url() ?>/assets/img/shapes/waves-white.svg" class="position-absolute h-100 w-50 top-0 d-lg-block d-none" alt="waves">
                                <div class="position-relative d-flex align-items-center justify-content-center h-100">
                                    <img class="w-100 position-relative z-index-2 pt-4" src="<?= base_url() ?>/assets/img/illustrations/rocket-white.png" alt="rocket">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="col-lg-6">
            <div class="card h-100 p-3">
                <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url('<?= base_url() ?>/assets/img/ivancik.jpg');">
                    <span class="mask bg-gradient-dark"></span>
                    <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                        <h5 class="text-white font-weight-bolder mb-4 pt-2"><?= $conf['namaweb'] ?></h5>
                        <p class="text-white">Data Keluhan</p>
                        <a class="text-white text-sm font-weight-bold mb-0 btn btn-info icon-move-right mt-auto" href="<?= base_url('Keluhan'); ?>">
                            Read More
                            <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card h-100 p-3">
                <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url('<?= base_url() ?>/assets/img/ivancik.jpg');">
                    <span class="mask bg-gradient-dark"></span>
                    <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                        <h5 class="text-white font-weight-bolder mb-4 pt-2"><?= $conf['namaweb'] ?></h5>
                        <p class="text-white">Data Perbaikan</p>
                        <a class="text-white text-sm btn btn-info font-weight-bold mb-0 icon-move-right mt-auto" href="<?= base_url('Perbaikan'); ?>">
                            Read More
                            <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer pt-3  ">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        © <script>
                            document.write(new Date().getFullYear())
                        </script>,
                        made with <i class="fa fa-heart"></i> by
                        <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank"><?= $conf['namaweb'] ?></a>
                        for a better web.
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank"><?= $conf['namaweb'] ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
</main>