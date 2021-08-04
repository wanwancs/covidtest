<h4>
    <?php echo $place->filedbed_name;?>
</h4>
<p>กรุณาเลือกเตียง</p>
<div class="row">
    <div class="col-md-12">
        <div class="middle">
            <table>
                <?php 
    $loop = 0;
    $booked = false;
    for($i=0;$i < ($place->total); $i++):
        $loop ++;
        
     ?>
                <?php foreach($booking as $key => $item){
            if($item->bed_number == ($i+1)){
                $booked = true;
            }else{
                $booked = false;
            }
      }?>
                <?php if($loop <= 10):?>
                <?php if($loop == 1):?>
                <tr>
                    <?php endif;?>
                    <td>
                        <label>
                            <input <?php if($booked){ echo "disabled" ;}?> type="radio" name="bed" id="bed
                            <?=($i+1)?>" value="A
                            <?=($i+1)?>"
                            onclick="formDetail(this.value)" />
                            <div class="front-end box" <?php if($booked){?> style="background:#dfdfdf"
                                <?php }?>>
                                <span>A
                                    <?=($i+1)?>
                                </span>
                            </div>
                        </label>

                    </td>
                    <?php if($loop == 10):?>
                </tr>
                <?php endif;?>
                <?php endif;?>
                <?php 
if($loop == 10){
    $loop = 0;
}
endfor;?>
            </table>
        </div>
    </div>

</div>

<style>
    .box {
        padding: 11px;
        border: 1px solid #dfdfdf;
        border-radius: 5px;
        width: 60px;
        text-align: center;
        margin: 10px;
        cursor: pointer;
    }

    .box:hover {
        background: #009688;
        color: #ffffff;
    }
</style>