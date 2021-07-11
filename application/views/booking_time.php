<div class="row">
    <div class="col mt-4 pt-2">
        <div class="p-4 border-bottom">
            <h6 class="title mb-0">กรุณาเลือกคิว</h6>
        </div>
    </div>
</div>
<?php 
    date_default_timezone_set("Asia/Bangkok");
    $timeArray = explode("-",$time);
    $timeStart = $timeArray[0];
    $endTime = $timeArray[1];

    $timeQueue = 0;
    if($timeStart == "08:00"){
        $timeQueue = 0;
    }else if($timeStart == "09:00"){
        $timeQueue = 1;
    }else if($timeStart == "10:00"){
        $timeQueue = 2;
    }else if($timeStart == "11:00"){
        $timeQueue = 3;
    }else if($timeStart == "13:00"){
        $timeQueue =4;
    }else if($timeStart == "14:00"){
        $timeQueue = 5;
    }else if($timeStart == "15:00"){
        $timeQueue = 6;
    }else if($timeStart == "16:00"){
        $timeQueue = 7;
    }
    
    $index = 1;
    while($timeStart !== $endTime){
        
        $timeStart = strtotime("+".$minute." minutes", strtotime($timeStart));
        $timeStart = date('H:i', $timeStart);
        $textTime = $timeStart."-".$timeStart;

        $currentQueue1 = "A".(($timeQueue * intval($minute)) + $index);
        $currentQueue2 = "A".(($timeQueue * intval($minute)) + $index + 1);
        $currentQueue3 = "A".(($timeQueue * intval($minute)) + $index + 2);
        $index = $index + 3;
       
        //check booking
        $queue1 = false;
        $queue2 = false;
        $queue3 = false;
        foreach($timeBooking as $time){
            
            if($time->BOOKQUE == $currentQueue1){
                $queue1 = true;
            }
            if($time->BOOKQUE == $currentQueue2){
                $queue2 = true;
            }
            if($time->BOOKQUE == $currentQueue3){
                $queue3 = true;
            }
        }
       ?>
<div class="row">
    <div class="col-2 mt-4 pt-2">
        <?php echo $textTime;?>
    </div>
    <div class="col-6 mt-4 pt-2">
        <?php if($queue1):?>
        <a href="javascript:void(0)" class="btn btn-pills btn-outline-light mt-2 me-2">
            <?php echo $currentQueue1;?> : จองแล้ว</a>
        <?php endif;?>
        <?php if(!$queue1):?>
        <a href="javascript:void(0)" onclick="selectQueue('<?php echo $currentQueue1;?>', '<?php echo $textTime;?>')" class="btn btn btn-pills btn-outline-primary mt-2 me-2">
            <?php echo $currentQueue1;?> : จองคิว</a>
        <?php endif;?>

        <?php if($queue2):?>
        <a href="javascript:void(0)" class="btn btn-pills btn-outline-light mt-2 me-2">
            <?php echo $currentQueue2;?> : จองแล้ว</a>
        <?php endif;?>
        <?php if(!$queue2):?>
        <a href="javascript:void(0)" onclick="selectQueue('<?php echo $currentQueue2;?>', '<?php echo $textTime;?>')" class="btn btn btn-pills btn-outline-primary mt-2 me-2">
            <?php echo $currentQueue2;?> : จองคิว</a>
        <?php endif;?>

        <?php if($queue3):?>
        <a href="javascript:void(0)" class="btn btn-pills btn-outline-light mt-2 me-2">
            <?php echo $currentQueue3;?> : จองแล้ว</a>
        <?php endif;?>
        <?php if(!$queue3):?>
        <a href="javascript:void(0)" onclick="selectQueue('<?php echo $currentQueue3;?>', '<?php echo $textTime;?>')" class="btn btn btn-pills btn-outline-primary mt-2 me-2">
            <?php echo $currentQueue3;?> : จองคิว</a>
        <?php endif;?>
    </div>
</div>
<?php }
   
?>