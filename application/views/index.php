<section class="bg-half-170 pb-5 bg-light d-table w-100" style="
background-position: center;
background-repeat: no-repeat;
background-size: cover;background-image: url('assets/images/covid.jpg');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-title">
                    <h4 class="title mb-4" style="color:#ffffff">ยืนยันตัวเลขผู้ติดเชื้อ <span style="    text-decoration: underline;color: #ffffff !important;font-size: 49px;">COVID-19</span></h4>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-6">
                <div class="row ms-lg-5" id="counter">
                    <div class="col-md-6 col-12">
                        <div class="row">
                            <div class="col-12 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                <div class="card counter-box border-0 bg-light bg-gradient shadow text-center rounded">
                                    <div class="card-body py-5">
                                        <h2 class="mb-0"><span class="counter-value" id="todayCase">0</span></h2>
                                        <h5 class="counter-head mb-0">ยอดผู้ติดเชื้อวันนี้</h5>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-12 mt-4 pt-2">
                                <div class="card counter-box border-0 bg-primary bg-gradient shadow text-center rounded">
                                    <div class="card-body py-5">
                                        <h2 class="text-light title-dark mb-0"><span class="counter-value" id="case">0</span></h2>
                                        <h5 class="counter-head mb-0 title-dark text-light">ผู้ป่วยสะสม</h5>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end Row-->
                    </div>
                    <!--end col-->

                    <div class="col-md-6 col-12">
                        <div class="row pt-lg-4 mt-lg-4">
                            <div class="col-12 mt-4 pt-2">
                                <div class="card counter-box border-0 bg-success bg-gradient shadow text-center rounded">
                                    <div class="card-body py-5">
                                        <h2 class="text-light title-dark mb-0"><span class="counter-value" id="todayRecovered">0</span></h2>
                                        <h5 class="counter-head mb-0 title-dark text-light">หายกลับบ้านวันนี้</h5>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-12 mt-4 pt-2">
                                <div class="card counter-box border-0 bg-light bg-gradient shadow text-center rounded">
                                    <div class="card-body py-5">
                                        <h2 class="mb-0"><span class="counter-value" id="todayDeaths">0</span></h2>
                                        <h5 class="counter-head mb-0">เสียชีวิต</h5>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end Row-->
                    </div>
                    <!--end col-->
                </div>
                <!--end Row-->
            </div>
            <!--end col-->
        </div>
    </div>
</section>
<!--end row-->
<!-- Hero Start -->
<section class="bg-half-100 pb-0 bg-light d-table w-100">
    <div class="container">




        <div class="row justify-content-center">
        <div class="col-lg-10 mb-5">
            <div class="title-heading text-center mt-4 mt-md-5 pt-md-5">
                <div class="alert alert-light alert-pills" role="alert">
        
                    <span class="content" style="    font-size: 19px;"> ต้นแบบการจองเตียงสนาม <span
                            class="badge rounded-pill bg-success me-1">ยังไม่เปิดให้บริการ</span></span>
                </div>
        
        
                <form class="rounded p-4 mt-4 bg-white" action="<?php echo base_url('booking-bed')?>" method="post">
                    <div class="row text-start">
                        <div class="col-lg-12 col-md-12">
                            <div class="row align-items-center">
                                <div class="col-md-4 mt-4 mt-sm-0">
                                    <div class="mb-0">
                                        <label class="form-label"> จังหวัด : </label>
                                        <select class="form-control custom-select" name="province" id="province"
                                            onchange="getAmphur(this.value)">
                                            <option value="">กรุณาเลือกจังหวัด</option>
                                            <?php if(!empty($province)):?>
                                            <?php foreach($province as $item):?>
                                            <option value="<?php echo $item->province_code;?>">
                                                <?php echo $item->province_name;?>
                                            </option>
                                            <?php endforeach;?>
                                            <?php endif;?>
                                        </select>
                                    </div>
                                </div>
        
                                <div class="col-md-4 mt-4 mt-sm-0">
                                    <div class="mb-0">
                                        <label class="form-label"> อำเภอ/เขต : </label>
                                        <select class="form-control custom-select" name="amphur" id="amphur" onchange="getDistrict(this.value)">
                                            <option value="">กรุณาเลือกอำเภอ/เขต</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-4 mt-sm-0">
                                    <div class="mb-0">
                                        <label class="form-label"> ตำบล/แขวง : </label>
                                        <select class="form-control custom-select" name="district" id="district" onchange="getBed(this.value)">
                                            <option value="">กรุณาเลือกตำบล/แขวง</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="row align-items-center">
                                <div class="col-md-4 mt-4 mt-sm-0">
                                    <div class="mb-0">
                                        <label class="form-label"> สถานที่ : </label>
                                        <select class="form-control custom-select" name="bedPlace" id="bedPlace">
                                            <option value="">กรุณาเลือกสถานที่</option>
                                        </select>
                                    </div>
                                </div>
        
                                <div class="col-md-4 mt-4 mt-sm-0">
                                    <div class="mb-0">
                                        <label class="form-label"> วันที่จอง : </label>
                                        <input name="date" type="date" class="form-control" id="bedDate" name="bedDate"
                                            placeholder="เลือกวันที่ :">
                                    </div>
                                </div>
                                <!--end col-->
        
                                <div class="col-md-4 mt-lg-4">
                                    <div class="d-grid">
                                        <label class="form-label"> </label>
                                        <input type="submit" style='margin-top: 12px !important;'
                                            class="searchbtn btn btn-primary" value="จองเตียง">
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
        
            </div>
        </div>
        <hr>
            <div class="col-lg-10">
                <div class="title-heading text-center mt-4 mt-md-5 pt-md-5">
                    <div class="alert alert-light alert-pills" role="alert">

                        <span class="content" style="    font-size: 19px;"> ต้นแบบการจองตรวจโควิด  <span class="badge rounded-pill bg-success me-1">ยังไม่เปิดให้บริการ</span></span>
                    </div>
                    <h1 class="heading mb-3">หน่วยบริการ <span class="text-primary typewrite" data-period="2000" data-type='[ "วัดพระศรีมหาธาตุวรมหาวิหาร", "สนามกีฬาเฉลิมพระเกียรติ 72 พรรษา", "วัดบางขุนเทียนนอก", "ตลาดบางแคภิรมย์" ]'> <span class="wrap"></span> </span>
                    </h1>
                    <p class="para-desc mx-auto text-muted">ตรวจเชิงรุก COVID-19 ในพื้นที่กรุงเทพมหานคร</p>
                    <form class="rounded p-4 mt-4 bg-white" action="<?php echo base_url('booking')?>" method="get">
                        <div class="row text-start">
                            <div class="col-lg-12 col-md-12">
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
                                            <label class="form-label"> </label>
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
                            <li><a href="<?php echo base_url('booking');?>?place=1&date=<?php echo date('Y-m-d');?>" class="btn btn-outline-primary">จองคิว</a></li>
                            <li class="h6 mb-0 jobs">
                                <?php echo number_format($stat1);?> คิว</li>
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
                            <li><a href="<?php echo base_url('booking');?>?place=2&date=<?php echo date('Y-m-d');?>" class="btn btn-outline-primary">จองคิว</a></li>
                            <li class="h6 mb-0 jobs">
                                <?php echo number_format($stat2);?> คิว</li>
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
                            <li><a href="<?php echo base_url('booking');?>?place=3&date=<?php echo date('Y-m-d');?>" class="btn btn-outline-primary">จองคิว</a></li>
                            <li class="h6 mb-0 jobs">
                                <?php echo number_format($stat3);?> คิว</li>
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
                            <li><a href="<?php echo base_url('booking');?>?place=4&date=<?php echo date('Y-m-d');?>" class="btn btn-outline-primary">จองคิว</a></li>
                            <li class="h6 mb-0 jobs">
                                <?php echo number_format($stat4);?> คิว</li>
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

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    covid();

    function covid() {

        $.ajax({
            type: "get",
            url: "https://corona.lmao.ninja/v2/countries/TH",
        }).done(function(response) {
            $('#todayCase').html(numberWithCommas(response.todayCases));
            $('#todayRecovered').html(numberWithCommas(response.todayRecovered));
            $('#todayDeaths').html(numberWithCommas(response.todayDeaths));
            $('#case').html(numberWithCommas(response.cases));
        });


    }

    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    function getAmphur(provinceCode) {
        $.ajax({
            type: "get",
            url: "<?php echo base_url('welcome/amphur')?>?province_code=" + provinceCode,
        }).done(function (response) {
            console.log(response.data);
            $('#amphur').find('option').remove().end();
            $("#amphur").append(new Option("กรุณาเลือกอำเภอ/เขต", ""));
            for(let i = 0 ;i < response.data.length;i++){
                $("#amphur").append(new Option(response.data[i].amphur_name, response.data[i].amphur_code));
            }    
        });
    }

    function getDistrict(amphurCode) {
        $.ajax({
            type: "get",
            url: "<?php echo base_url('welcome/district')?>?amphur_code=" + amphurCode,
        }).done(function (response) {
            console.log(response.data);
            $('#district').find('option').remove().end();
            $("#district").append(new Option("กรุณาเลือกตำบล/แขวง", ""));
            for(let i = 0 ;i < response.data.length;i++){
                $("#district").append(new Option(response.data[i].district_name, response.data[i].district_code));
            }    
        });
    }

    function getBed(district) {
        $.ajax({
            type: "get",
            url: "<?php echo base_url('welcome/bed')?>?district_code=" + district,
        }).done(function (response) {
            console.log(response.data);
            $('#bedPlace').find('option').remove().end();
            $("#bedPlace").append(new Option("กรุณาเลือกสถานที่", ""));
            for(let i = 0 ;i < response.data.length;i++){
                $("#bedPlace").append(new Option(response.data[i].filedbed_name, response.data[i].id));
            }    
        });
    }

</script>