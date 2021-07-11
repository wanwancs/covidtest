<section class="bg-half bg-light d-table w-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="page-next-level">
                    <img src="<?php echo base_url();?>/assets/images/illustrator/doctors-cuate.svg" class="avatar avatar-small" alt="">
                    <h4 class="title mt-4 mb-3">ทำการจองคิวตรวจ Covid-19 สำเร็จ </h4>
                    <div class="page-next">
                        <nav aria-label="breadcrumb" class="d-inline-block">
                            <ul class="breadcrumb bg-white rounded shadow mb-0">
                                <li class="breadcrumb-item"><a href="<?php echo base_url();?>">หน้าแรก</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url('booking');?>?place=1&date=<?php echo date('y-m-d');?>">จองคิว</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    จองคิวตรวจ Covid-19 สำเร็จ
                                </li>
                            </ul>
                        </nav>
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
<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col mt-4 pt-2 active" id="forms">
                <div class="component-wrapper rounded shadow">
                    <div class="p-4 border-bottom">
                        <h4 class="title mb-0"> รายละเอียดการจองตรวจโควิด </h4>
                        <p class="text-muted mb-0">โปรดมาก่อนเวลา 5 - 10 นาที</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="d-flex features feature-clean">
                    <div class="content ms-4">
                        <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">สถานที่</a></h5>
                        <p class="text-muted mb-0">
                            <?php echo $booking->TBPlaceName;?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="d-flex features feature-clean">
                    <div class="content ms-4">
                        <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">วันที่ - เวลา</a></h5>
                        <p class="text-muted mb-0">
                            <?php echo $booking->BOOKDATE;?>
                            <?php echo $booking->BOOKTIME;?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="d-flex features feature-clean">
                    <div class="content ms-4">
                        <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">คิว</a></h5>
                        <p class="text-muted mb-0">
                            <?php echo $booking->BOOKQUE;?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="d-flex features feature-clean">
                    <div class="content ms-4">
                        <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">ชื่อ นามสกุล</a></h5>
                        <p class="text-muted mb-0">
                            <?php echo $booking->MEMBERNAME;?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="d-flex features feature-clean">
                    <div class="content ms-4">
                        <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">เลขบัตรประจำตัวประชาชน</a></h5>
                        <p class="text-muted mb-0">
                            <?php echo $booking->IDCARD;?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="d-flex features feature-clean">
                    <div class="content ms-4">
                        <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">หมายเลขโทรศัพท์ที่สามารถติดต่อได้</a></h5>
                        <p class="text-muted mb-0">
                            <?php echo $booking->PHONENUMBER;?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="d-flex features feature-clean">
                    <div class="content ms-4">
                        <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">ไลน์ไอดี</a></h5>
                        <p class="text-muted mb-0">
                            <?php echo $booking->LINEID ? $booking->LINEID: '-';?>
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>