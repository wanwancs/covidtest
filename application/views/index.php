<!-- Hero Start -->
<section class="bg-half-170 pb-0 bg-light d-table w-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="title-heading text-center mt-4 mt-md-5 pt-md-5">

                    <h1 class="heading mb-3">หน่วยบริการ <span class="text-primary typewrite" data-period="2000" data-type='[ "วัดพระศรีมหาธาตุวรมหาวิหาร", "สนามกีฬาเฉลิมพระเกียรติ 72 พรรษา", "วัดบางขุนเทียนนอก", "ตลาดบางแคภิรมย์" ]'> <span class="wrap"></span> </span>
                    </h1>
                    <p class="para-desc mx-auto text-muted">ตรวจเชิงรุก COVID-19 ในพื้นที่กรุงเทพมหานคร</p>
                    <form class="rounded p-4 mt-4 bg-white" action="<?php echo base_url('booking')?>" method="get">
                        <div class="row text-start">
                            <div class="col-lg-12 col-md-8">
                                <div class="row align-items-center">
                                    <div class="col-md-4 mt-4 mt-sm-0">
                                        <div class="mb-0">
                                            <label class="form-label"> สถานที่ : </label>
                                            <select class="form-control custom-select" name="place">
                                                <?php if(!empty($places)):?>
                                                    <?php foreach($places as $item):?>
                                                        <option value="<?php echo $item->TBPlaceID;?>"><?php echo $item->TBPlaceName;?></option>
                                                    <?php endforeach;?>
                                                <?php endif;?>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-4 mt-4 mt-sm-0">
                                        <div class="mb-0">
                                            <label class="form-label"> วันที่จอง : </label>
                                            <input name="date" type="date" class="form-control" id="dateBooking" placeholder="เลือกวันที่ :">
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-md-4 mt-lg-4">
                                        <div class="d-grid">
                                            <input type="submit" style='margin-top: 12px !important;' class="searchbtn btn btn-primary" value="จองคิว">
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!---end col-->
                        </div>
                        <!--end row-->
                    </form>
                    <p class="text-muted mb-0 mt-4"><span class="text-dark">เขต :</span> บางเขน, มีนบุรี, จอมทอง, เขตบางแค</p>
                </div>
            </div>
            <!--end col-->

            <div class="col-12 mt-4 pt-3">
                <img src="<?php echo base_url();?>assets/images/banner_covid.png" class="img-fluid" alt="">
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- Hero End -->

<!-- Shape Start -->
<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
    </div>
</div>
<!--Shape End-->

<!-- Start -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">หน่วยบริการ</h4>
                    <p class="text-muted para-desc mx-auto mb-0">ตรวจเชิงรุก <span class="text-primary fw-bold">COVID-19</span> ในพื้นที่กรุงเทพมหานคร</p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">
            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                <div class="card categories overflow-hidden rounded shadow border-0">
                    <img src="<?php echo base_url();?>assets/images/place1.jpg" class="img-fluid" alt="">
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between mb-0">
                            <li><a href="" class="btn btn-outline-primary">จองคิว</a></li>
                            <li class="h6 mb-0 jobs">125 คิว</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                <div class="card categories overflow-hidden rounded shadow border-0">
                    <img src="<?php echo base_url();?>assets/images/place2.jpg" class="img-fluid" alt="">
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between mb-0">
                            <li><a href="" class="btn btn-outline-primary">จองคิว</a></li>
                            <li class="h6 mb-0 jobs">125 คิว</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                <div class="card categories overflow-hidden rounded shadow border-0">
                    <img src="<?php echo base_url();?>assets/images/place3.jpg" class="img-fluid" alt="">
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between mb-0">
                            <li><a href="" class="btn btn-outline-primary">จองคิว</a></li>
                            <li class="h6 mb-0 jobs">125 คิว</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end col-->
            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                <div class="card categories overflow-hidden rounded shadow border-0">
                    <img src="<?php echo base_url();?>assets/images/place4.jpg" class="img-fluid" alt="">
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between mb-0">
                            <li><a href="" class="btn btn-outline-primary">จองคิว</a></li>
                            <li class="h6 mb-0 jobs">125 คิว</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- End -->

<!-- Shape Start -->
<div class="position-relative">
    <div class="shape overflow-hidden text-light">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
    </div>
</div>
<!--Shape End-->