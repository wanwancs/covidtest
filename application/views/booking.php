<section class="bg-half bg-light d-table w-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="page-next-level">
                    <img src="<?php echo base_url();?>/assets/images/illustrator/doctors-cuate.svg" class="avatar avatar-small" alt="">
                    <h4 class="title mt-4 mb-3">
                        <?php echo $placeName;?> </h4>

                    <ul class="list-unstyled">
                        <li class="list-inline-item text-primary me-3"><i class="mdi mdi-map-marker text-warning me-2"></i>กรุงเทพมหานคร</li>

                    </ul>
                    <div class="page-next">
                        <nav aria-label="breadcrumb" class="d-inline-block">
                            <ul class="breadcrumb bg-white rounded shadow mb-0">
                                <li class="breadcrumb-item"><a href="index.html">หน้าแรก</a></li>
                                <li class="breadcrumb-item"><a href="#">จองคิว</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <?php echo $placeName;?>
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
                    </div>

                    <div class="p-4">
                        <form id="form-booking" action="<?php echo base_url('confirm');?>" method="post">
                            <input type="hidden" id="minute" name="minute" value="<?php echo $placeTime;?>">
                            <input type="hidden" id="queue" name="queue">
                            <input type="hidden" id="book_time" name="book_time">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">สถานที่ <span class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin fea icon-sm icons"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                            <select class="form-control ps-5" id="place" name="place" onchange="listTime()">
                                                <?php if(!empty($places)):?>
                                                    <?php foreach($places as $item):?>
                                                        <option <?php if($item->TBPlaceID == $placeId):?>selected<?php endif;?> value="<?php echo $item->TBPlaceID;?>"><?php echo $item->TBPlaceName;?></option>
                                                    <?php endforeach;?>
                                                <?php endif;?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">วันที่จอง <span class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin fea icon-sm icons">< viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></><circle cx="12" cy="7" r="4"></circle></svg>
                                            <input name="date" id="date" type="date" value="<?php echo $date;?>" onchange="listTime()" class="form-control ps-5" placeholder="First Name :">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">เลือกช่วงเวลา <span class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user fea icon-sm icons"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                            <select class="form-control ps-5" id="timeHour" name="timeHour" onchange="listTime()">
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="timesection"></div>

                            <div class="col mt-4 pt-2" id="forms-detail" style="display:none">
                                <div class="">
                                    <div class="pb-4 border-bottom">
                                        <h6 class="title mb-0"> ข้อมูลผู้จอง </h6>
                                    </div>

                                    <div class="mt-2">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="alert alert-danger" id="errorUniq" style="display: none;" role="alert"> เลขประจำตัวประชาชนนี้ทำการจองคิววันที่ <span id="dateError"></span> เรียบร้อยแล้ว ตรวจสอบการจอง
                                                    <a href="<?php echo base_url('booking-check');?>" class="alert-link"> คลิก </a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">ชื่อ นามสกุล <span class="text-danger">*</span></label>
                                                    <div class="form-icon position-relative">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user fea icon-sm icons"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                        <input required name="name" id="name" type="text" class="form-control ps-5" placeholder="ชื่อ นามสกุล ของผู้จอง :">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">เลขประจำตัวประชาชน <span class="text-danger">*</span></label>
                                                    <div class="form-icon position-relative">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail fea icon-sm icons"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                                                        <input required name="idcard" id="idcard" onBlur="checkUniq(this.value)" type="number" class="form-control ps-5" placeholder="เลขประจำตัวประชาชน 13 หลัก :">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">โทรศัพท์ <span class="text-danger">*</span></label>
                                                    <div class="form-icon position-relative">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book fea icon-sm icons"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                                                        <input required name="phone" id="phone" class="form-control ps-5" placeholder="หมายเลขโทรศัพท์ที่สามารถติดต่อได้ :">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Line ID</label>
                                                    <div class="form-icon position-relative">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book fea icon-sm icons"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                                                        <input name="line" id="line" class="form-control ps-5" placeholder="ไลน์ไอดี :">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" id="btn-submit" style="display: none;">
                                <div class="col-sm-12">
                                    <input type="button" onclick="showConfirm()" class="btn btn-primary" value="บันทึกการจองคิว">
                                    <input type="submit" id="submit-btn" class="btn btn-primary" style="display: none;" value="บันทึกการจองคิว">
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>

        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!-- <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#confirm-box" class="btn btn-primary m-1"> Click Here</a> -->
<div class="modal fade" id="confirm-box" tabindex="-1" aria-labelledby="confirm-box-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded shadow border-0">
            <div class="modal-header border-bottom">
                <h5 class="modal-title" id="confirm-box-title">ข้อมูลการจอง</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="bg-white p-3 rounded box-shadow">
                    <table>
                        <tr>
                            <td>ชื่อ - นามสกุล </td>
                            <td> :</td>
                            <td class="p-2" id="show-name"></td>
                        </tr>
                        <tr>
                            <td>เลขประจำตัวประชาชน </td>
                            <td> :</td>
                            <td class="p-2" id="show-idcard"></td>
                        </tr>
                        <tr>
                            <td>สถานที่ </td>
                            <td> :</td>
                            <td class="p-2" id="show-place"></td>
                        </tr>
                        <tr>
                            <td>วันที่จอง </td>
                            <td> :</td>
                            <td class="p-2" id="show-date"></td>
                        </tr>
                        <tr>
                            <td>เวลาที่จอง </td>
                            <td> :</td>
                            <td class="p-2" id="show-time"></td>
                        </tr>
                        <tr>
                            <td>คิวที่ </td>
                            <td> :</td>
                            <td class="p-2" id="show-queue"></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" onclick="confirm()" class="btn btn-primary">ยืนยันการจอง</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    let minutesToAdd = 60;
    let timeStart = "08:00";
    let timeEnd = "17:00";

    while (timeEnd !== timeStart) {
        let currentDate = new Date("2021-07-10T" + timeStart);
        let futureDate = new Date(currentDate.getTime() + minutesToAdd * 60000);

        if (timeStart !== '12:00') {
            let textTime = "เช้า ";
            if (futureDate.getHours() > 12) {
                textTime = "บ่าย ";
            }
            let timeValue = timeStart + "-" + ("0" + futureDate.getHours()).slice(-2) + ":" + ("0" + futureDate.getMinutes()).slice(-2);
            $('#timeHour').append(new Option(textTime + timeValue, timeValue, true, false));
        }
        timeStart = ("0" + futureDate.getHours()).slice(-2) + ":" + ("0" + futureDate.getMinutes()).slice(-2);
    }


    listTime();

    function listTime() {
        let date = $('#date').val();
        let time = $('#timeHour').val();
        let minute = $('#minute').val();
        let place = $('#place').val();

        $.ajax({
            type: "get",
            url: "<?php echo base_url('time');?>",
            data: {
                'date': date,
                'time': time,
                'minute': minute,
                'place': place
            }
        }).done(function(response) {
            $('#timesection').html(response);
            $('#queue').val('');
            $('#book_time').val('');
            $('#forms-detail').hide();
            $('#btn-submit').hide();

            $('#show-name').html('');
            $('#show-idcard').html('');
            $('#show-place').html('');
            $('#show-date').html('');
            $('#show-time').html('');
            $('#show-queue').html('');
            $('#dateError').html('');
            $('#errorUniq').hide();
        });
    }

    function selectQueue(queue, time) {
        $('#queue').val(queue);
        $('#book_time').val(time);
        $('#forms-detail').show();
        $('#btn-submit').show();
    }

    function checkUniq(idCard) {
        let date = $('#date').val();
        if (idCard != '') {
            $.ajax({
                type: "get",
                url: "<?php echo base_url('check-uniq');?>",
                data: {
                    'date': date,
                    'idCard': idCard
                }
            }).done(function(response) {
                if (response.result) {
                    $('#idcard').val('');
                    $('#dateError').html(date);
                    $('#errorUniq').show();
                } else {
                    $('#dateError').html('');
                    $('#errorUniq').hide();
                }
            });
        }

    }

    function showConfirm() {

        $('#show-name').html($('#name').val());
        $('#show-idcard').html($('#idcard').val());
        $('#show-place').html($("#place option:selected").text());
        $('#show-date').html($('#date').val());
        $('#show-time').html($('#book_time').val());
        $('#show-queue').html($('#queue').val());

        $('#confirm-box').modal("show");
    }

    function confirm() {
        $('#submit-btn').click();
    }
</script>