<div class="row justify-content-center">
    <div class="col-12 mt-4 pt-2">
        <div class="table-responsive bg-white shadow-md rounded-md">
            <table class="table mb-0 table-center">
                <thead>
                    <tr>
                        <th scope="col" class="border-bottom text-right">#</th>
                        <th scope="col" class="border-bottom text-left">ชื่อ - นามสกุล</th>
                        <th scope="col" class="border-bottom text-left">สถานที่</th>
                        <th scope="col" class="border-bottom text-center">วันที่ - เวลา</th>
                        <th scope="col" class="border-bottom text-center">คิว</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($booking)):?>
                    <?php foreach($booking as $key => $item):?>
                    <tr>
                        <td class="text-right">
                            <?php echo $key+1;?>
                        </td>
                        <td>
                            <?php echo $item->MEMBERNAME;?>
                        </td>
                        <td>
                            <?php echo $item->TBPlaceName;?>
                        </td>
                        <td class="text-center">
                            <?php echo $item->BOOKDATE;?>
                            <?php echo $item->BOOKTIME;?>
                        </td>
                        <td class="text-success text-center">
                            <?php echo $item->BOOKQUE;?>
                        </td>
                    </tr>
                    <?php endforeach;?>
                    <?php endif;?>
                    <?php if(empty($booking)):?>
                    <tr>
                        <td class="text-center" colspan="5">ไม่พบข้อมูลการจอง</td>
                    </tr>
                    <?php endif;?>
                </tbody>
            </table>
        </div>
    </div>
</div>