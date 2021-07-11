<section class="bg-half bg-light d-table w-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="page-next-level">
                    <img src="<?php echo base_url();?>/assets/images/illustrator/doctors-cuate.svg" class="avatar avatar-small" alt="">
                    <h4 class="title mt-4 mb-3">ตรวจสอบการจองคิวตรวจ Covid-19</h4>
                    <div class="subcribe-form mt-4 pt-2">
                        <form>
                            <div class="mb-2">
                                <input type="number" id="id_card" class="rounded-pill" placeholder="เลขบัตรประจำตัวประชาชน">
                                <button type="button" class="btn btn-pills btn-primary" onclick="bookingList()">ตรวจสอบ</button>
                            </div>
                        </form>
                    </div>
                    <div class="page-next">
                        <nav aria-label="breadcrumb" class="d-inline-block">
                            <ul class="breadcrumb bg-white rounded shadow mb-0">
                                <li class="breadcrumb-item"><a href="<?php echo base_url();?>">หน้าแรก</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    ตรวจสอบการจอง
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
<section class="section" id="queue-section" style="display: none;">
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
        <div id="booking-list"></div>
    </div>
</section>


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    function bookingList() {
        let idCard = $('#id_card').val();

        $.ajax({
            type: "get",
            url: "<?php echo base_url('booking-list');?>",
            data: {
                'id_card': idCard
            }
        }).done(function(response) {
            $('#booking-list').html(response);
            $('#queue-section').show();

        });
    }
</script>