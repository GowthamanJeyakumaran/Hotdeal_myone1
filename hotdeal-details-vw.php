<?php ?>

<head>

    <meta charset="UTF-8">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->





    <style>
        .hotdeal-hotel-img-big{width: 100%; margin: 4%;margin-left: 0;border-radius: 3px;box-shadow: 2px 3px 2px -2px #057;border: solid white 3px;}
        .hotdeal-hotel-img{width: 100%; margin: 1%;margin-left: 0;border-radius: 3px;box-shadow: 2px 3px 2px -2px #057;border: solid white 3px;}
        .submit-button{float: right;border: none;color: white;background-color: #057;padding: 1%;width: 48%;font-size: 15px;}
        .hot-deal-container{margin-left: 1%;margin-bottom: 1%;border: solid white 2px;transition: border .5s;
                            background: #ffffff; /* Old browsers */
                            background: -moz-linear-gradient(left,  #ffffff 0%, #f1f6fc 60%, #f1f6fc 100%); /* FF3.6+ */
                            background: -webkit-gradient(linear, left top, right top, color-stop(0%,#ffffff), color-stop(60%,#f1f6fc), color-stop(100%,#f1f6fc)); /* Chrome,Safari4+ */
                            background: -webkit-linear-gradient(left,  #ffffff 0%,#f1f6fc 60%,#f1f6fc 100%); /* Chrome10+,Safari5.1+ */
                            background: -o-linear-gradient(left,  #ffffff 0%,#f1f6fc 60%,#f1f6fc 100%); /* Opera 11.10+ */
                            background: -ms-linear-gradient(left,  #ffffff 0%,#f1f6fc 60%,#f1f6fc 100%); /* IE10+ */
                            background: linear-gradient(to right,  #ffffff 0%,#f1f6fc 60%,#f1f6fc 100%); /* W3C */
                            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#f1f6fc',GradientType=1 ); /* IE6-9 */

        }
        .hot-deal-container:hover{border: solid #3A77BD 2px;}
        .room-type-text{font-size: 15px;}
        .set-margine-5{margin: 5px;margin-left: 0px;}
        .slider_image{border: solid white 5px;width: 100%;}
        .thumnail{border: solid white 3px;transition: border .5s;width: 32%;margin-bottom: 4%;}
        .thumnail:hover{border: solid #057 3px;}
        .text-crossed{text-decoration: line-through;color: red;font-size: 15px;margin-right: 5%;}
        .special-price{color: #F1901D; font-size: 25px;}
        .save-price{color: #F1901D; font-size: 18px;}

        .book-btn{margin-top: 10px;border: none; background-color: #219cdb;font-size: 15px;color: white;padding: 3px;padding-left: 5px;padding-right: 5px;}
        .voucher-btn{border: none;background-color: #ffb709;font-size: 15px;color: white;padding: 3px;padding-left: 5px;padding-right: 5px;}
        .btn-shade{box-shadow: 0px 0px 0px 0px #ccc;transition: box-shadow .6s;}
        .btn-shade:hover{box-shadow: 0px 0px 3px 1px #ccc;}
        .width-100{width: 100%;float: left;}
        .discount-tag-scb{background-image: url('/images/SCB-discount-tag.png');width: 60%;height: 150%;float: left;font-size: 23px;margin-top: 3%;margin-left: 3.4%;color: #0071a9;padding: 1.3%;padding-left:  39%;padding-top: 1.5%;line-height: 25px;background-size: cover;}
        .discount-tag-april{background-image: url('//fmffiles.s3.amazonaws.com/images/hotel-mng-sys/SCB-discount-tag.png');width: 60%;height: 150%;float: left;font-size: 23px;margin-top: 3%;margin-left: 3.4%;color: #0071a9;padding: 1.3%;padding-left:  39%;padding-top: 1.5%;line-height: 25px;background-size: cover;}
        .happy-hour-tag{background-image: url('/images/happyHourDescript.png');height: 28px;width: 100%;float: left;margin-left: 8px;margin-top: 3%;padding: 1.3%;padding-left:  39%;padding-top: 1.5%;line-height: 25px;background-size: cover;}
        li{line-height: 20px;}
        .incPad{border-radius: 0px 0px 10px 10px;margin-left: 12px;margin-top: -11px;margin-bottom: 10px;background-color: rgb(254, 241, 174);border: 1px dashed red;border-top: none;}
    </style>

<!--<script src="js/countdown.js" type="text/javascript"></script>-->

</head>

<body>

    <div id="fb-root"></div>

    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <div class="body_wrapper fixed_nav_pad">

        <?php $this->load->view('template/nav-menu'); ?>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="common-div" class="deal_widget set_margin_top_82">
                        <div style="width: 98%;">
                            <div class="col-md-12 hot-deal-container" style="padding: 1%;">
                                <div class="col-md-12">
                                    <div class="col-md-9">

                                        <h2 class="margine-left-1" >Hot Deals : <?= $hotel_name ?></h2>   
                                        <i><?= $hot_hotel_arr['address']; ?></i>
                                    </div>
                                    <a href="/hotel-hot-deals">
                                        <div class="col-md-3">
                                            <div class="col-md-2">
                                                <img src="/images/flame.png" style="width: 20px;float: right;margin-top: 15px;">
                                            </div>
                                            <div class="col-md-10">
                                                <h4>
                                                    <span class="h5">Click here for more Hot Deals </span>
                                                    <br>
                                                    <?php foreach ($hot_deal_counts_arr as $hot_deal_count) { ?>
                                                        <span style="color: #057;"><b><?= $hot_deal_count['rooms'] ?></b> room types</span> <br>
                                                        <span style="color: #057;"><b><?= $hot_deal_count['hotels'] ?></b> Hotels</span>
                                                    <?php } ?>
                                                </h4>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                                <div class="col-md-12">
                                    <hr class="set-margine-5">
                                </div>
                                <div class="col-md-12" id="image_slider">

                                    <!--HD images slider-->
                                    <div class="col-md-8">
                                        <?php
                                        $dirF = "hmgt/assist/photo-gallery/$hotel_id/Views";
                                        $dirRooms = "/hmgt/assist/photo-gallery/$hotel_id/Room";
                                        $filesF = scandir($dirF);

                                        $viewPicture = array();

                                        foreach ($filesF as $file) {
                                            //filter empty file names
                                            if (strlen($file) > 5) {
                                                array_push($viewPicture, $file);
                                            }
                                        }
                                        ?>

                                        <img id="slider_image" alt="main images <?= $hotel_name ?>" class="slider_image" src="<?= '/' . "$dir/$viewPicture[1]" ?>">
                                    </div>
                                    <!--Thumbnail images-->
                                    <div class="col-md-4">
                                        <div class="col-md-12">
                                            <!--<img src="/images/loading.gif"style="width: 50%;">-->
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="col-md-10">
                                        <h3>About <?php echo $hotel_name; ?></h3>
                                        <hr class="set-margine-5">
                                        <?php echo $hot_hotel_arr['description']; ?>

                                        <?php if ($freebies) { ?>
                                            <div class="col-md-12">
                                                <div class="col-md-2">
                                                    <img src="/images/freebies.png" style="width: 100%;margin-top: 20px;">
                                                </div>
                                                <div class="col-md-10">
                                                    <h3>Freebies:</h3>
                                                    <hr class="set-margine-5">
                                                    <i style="color: #057;"><?php echo $freebies_descriptor; ?></i>

                                                    <ul>
                                                        <?php
                                                        $freebies = explode('|', $freebies);
                                                        foreach ($freebies as $freebee) {
                                                            ?>
                                                            <li><?php echo $freebee; ?></li>
                                                        <?php } ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="col-md-2">
                                        <b><?= $hotel_name ?></b> <br>contact details
                                        <hr>
                                        <div class="outer">
                                            <div class="inner">  <a class="inner2" href="<?= $facebook ?>" rel="nofollow" target="_blank"><i class="fa fa-facebook-square fa-1x"></i>
                                                </a></div>
                                            <div class="inner">    <a class="inner2" href="<?= $website; ?>" rel="nofollow" target="_blank"><i class="fa fa-external-link fa-1x"></i>
                                                </a></div>
                                            <!--check for address and mobile number whether they are empty or not-->
                                            <?php if ($hot_hotel_arr['address'] != "") { ?> 
                                                <div class="inner">    <a class="inner2 contact_add" style="cursor: pointer;"><i class="fa fa-building-o fa-1x"></i>
                                                    </a></div> 
                                                <?php
                                            }
                                            if (str_replace('|', '<br>', $reservation) != "") {
                                                ?>
                                                <div class="inner">    <a class="inner2 contact_mob" style="cursor: pointer;"><i class="fa fa-mobile fa-2x" style="font-size: 27px; padding-top: 4% !important;" ></i>
                                                    </a></div>
                                            <?php } ?>
                                        </div>
                                        <style>
                                            .outer {
                                                overflow: auto;
                                            }

                                            .outer .inner {
                                                list-style-type: none;
                                                float: left;
                                            }

                                            .outer .inner .inner2 i {
                                                background: #205D7A;
                                                color: #fff;
                                                width: 30px;
                                                height: 30px;
                                                border-radius: 4px;
                                                font-size: 20px;
                                                text-align: center;
                                                margin-right: 10px;
                                                padding-top: 15%;
                                            }
                                        </style>

                                        <p class="col-md-12" id="contactDisplay" style="margin-top: 10px;color: blue;"> 

                                        </p>
                                        <script>
                                            $(".contact_add").click(function () {
                                                var info = "<?= $hot_hotel_arr['address']; ?>";
                                                $("#contactDisplay").html(info);
                                            });

                                            $(".contact_mob").click(function () {
                                                var info = "<?= str_replace('|', '<br>', $reservation); ?>";
                                                $("#contactDisplay").html(info);
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>

                        </div>












                        <!--  First method Start -->

                        <div style="width: 98%;">
                            <?php
                            //$hot_count = $count_hotel_count;
                            //  for($x=0; $x<3; $x++){
                            //  $hot_deal_info_arr3=$rooms[x];


                            $optionCount = 0;


                            foreach ($hot_deal_info_arr as $index => $hot_deal_info) {

                                if ($index < 3) {
                                    $optionCount++;

                                    // var_dump($hot_deal_info);
                                    ?>

                                    <div class="col-md-12 hot-deal-container" style="padding: 1%;">
                                        <div class="col-md-1" style="text-align: center; margin-top: 15px;">
                                            <div>    <i class="fa fa-fire fa-2x" style="color: #4E728C;"></i></div>
                                            HOT DEAL
                                            <br>                                                                                 
                                            <span style="color: #AFAFAF;margin: 0px;font-size: 13px;">
                                                Option <?php echo $optionCount; ?>
                                            </span>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="col-md-4">
                                                <img class="hotdeal-hotel-img" src="<?= "$dirRooms/" . str_replace(' ', '-', $hot_deal_info['room_type']) . '.jpg'; ?>" alt="hotel hot deal <?= $hot_deal_info['hotel_name'] ?>">

                                            </div>
                                            <div class="col-md-8">
                                                <span class="room-type-text"><?= $hot_deal_info['room_type'] . " " . $hot_deal_info['board_basis'] ?></span>                                        
                                                <hr class="set-margine-5">
                                                <i style="color: red;">
                                                    <?php for ($occupancy = 0; $occupancy < (int) $hot_deal_info['occupancy']; $occupancy++) { ?>
                                                        <i class="fa fa-user" style="width: 15px;height: 15px;color: orange;"></i>    
                                                    <?php } ?>

                                                </i>
                                                <hr class="set-margine-5">
                                                <div class="col-md-12">
                                                    <div class="col-md-2">
                                                        <i class="fa fa-hand-o-right fa-2x" style="color: #205D7A"></i>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <a class="urlLink" style="color: green;" href="#termsCondition">Free cancellation, instant refund and rooms guaranteed</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <script>
                                                $(".urlLink").click(function () {
                                                    $("html, body").animate({scrollTop: $("#termsCondition").offset().top}, 600);
                                                    return false;
                                                });
                                            </script>
                                        </div>

                                        <div class="col-md-6">
                                            <?php if ((int) $hot_deal_info['discount_pre'] > 0) { ?>
                                                <div class="col-md-6">                                            
                                                    <span class="room-type-text">Discount : <?php echo $hot_deal_info['discount_pre'] ?>% </span> 
                                                    <hr class="set-margine-5">
                                                    <span class="text-crossed">LKR <?php echo number_format($hot_deal_info['regular_price']); ?> </span> <b class="special-price">LKR <?php echo number_format($hot_deal_info['regular_price'] * ((100 - $hot_deal_info['discount_pre']) / 100)); ?></b>
                                                    <hr class="set-margine-5">
                                                    <i class="save-price"><i class="fa fa-thumbs-up fa-2x" style="width: 15%;"></i>You save : LKR <?php echo number_format($hot_deal_info['regular_price'] - $hot_deal_info['regular_price'] * ((100 - (int) $hot_deal_info['discount_pre']) / 100)); ?></i>                                                
                                                </div>
                                            <?php } else { ?>
                                                <div class="col-md-6">
                                                    <span class="room-type-text">Regular room rate : </span> 
                                                    <hr class="set-margine-5">
                                                    <b class="special-price">LKR <?= number_format($hot_deal_info['regular_price'] * ((100 - $hot_deal_info['discount_pre']) / 100)); ?></b>
                                                    <hr class="set-margine-5">

                                                </div>
                                            <?php } ?>

                                            <div class="col-md-6" style="height: 30px;">
                                                <!--Select live properties-->
                                                <?php
                                                if ($isSoldout == 3) {
                                                    $specialDiscount;
                                                    if ((int) $hot_deal_info['SplDiscount_allowed'] == 1 && (int) $hot_deal_info['SplDicount_bank'] == 2 && $current > $start && $current < $end && $IsValidDate == "true") {
                                                        $specialDiscount = $hot_deal_info['discount_pre'] * 2;
                                                        // echo $specialDiscount; die();
                                                    } else {
                                                        $specialDiscount = $hot_deal_info['SplDiscount_Pre'];
                                                        // echo $specialDiscount; die();
                                                    }
                                                    ?>


                                                    <div class="col-md-12">   
                                                        <?php echo form_open('hot-deals/payment_hotdeals/hotdeal_payments'); ?> 
                                                        <!--<form action="https://pay.findmyfare.com/hotels/pay-hot-deal-upgraded_v1.php?" method="POST">-->
                                                        <input name="roomID" type="hidden" value='<?php echo $hot_deal_info['id']; ?>' required/>
                                                        <input name="hotelID" type="hidden" value='<?php echo $hotel_id; ?>' required/>
                                                        <input name="hotel" type="hidden" value='<?php echo $hot_deal_info['hotel_name']; ?>' required/>
                                                        <input name="cost" type="hidden" value='<?php echo round($hot_deal_info['regular_price'] * ((100 - $hot_deal_info['discount_pre']) / 100)); ?>' required/>
                                                        <input name="room" type="hidden" value='<?php echo $hot_deal_info['room_type']; ?>' required/>
                                                        <input name="package" type="hidden" value='<?php echo $hot_deal_info['board_basis']; ?>' required/>
                                                        <input name="hoteladdress" type="hidden" value='<?php echo $hot_hotel_arr['address']; ?>' required/>
                                                        <input name="regularCost" type="hidden" value='<?= $hot_deal_info['regular_price']; ?>' required/>
                                                        <input name="regularDiscount" type="hidden" value='<?= $hot_deal_info['discount_pre']; ?>' required/>
                                                        <input name="SplDiscount_allowed" type="hidden" value='<?= $hot_deal_info['SplDiscount_allowed']; ?>' required/>
                                                        <input name="SplDiscount_Pre" type="hidden" value='<?= $specialDiscount; ?>' required/>
                                                        <input name="SplDicount_bank" type="hidden" value='<?= $hot_deal_info['SplDicount_bank']; ?>' required/>
                                                        <input name="hotelDescription" type="hidden" value='<?= $hot_hotel_arr['description']; ?>' required/>
                                                        <input name="valid_from" type="hidden" value='<?= $hot_deal_info['vaild_from']; ?>' required/>
                                                        <input name="valid_to" type="hidden" value='<?= $hot_deal_info['vaild_to']; ?>' required/>
                                                        <input name="occupancy" type="hidden" value='<?= $hot_deal_info['occupancy']; ?>' required/>
                                                        <input name="blockcat" type="hidden" value='<?= $hot_deal_info['block_category']; ?>' required/>
                                                        <input name="min_date" type="hidden" value='<?= $hot_deal_info['min_date']; ?>' required/>
                                                        <input name="blocked_dates" type="hidden" value='<?= $hot_deal_info['blocked_dates']; ?>' required/>
                                                        <input name="room_limit" type="hidden" value='<?= $hot_deal_info['room_limit']; ?>' required/>
                                                        <?php if ($is_booked == 0) { ?>
                                                            <input class="voucher-btn col-md-7 btn-shade" type="submit" name="buynow" value="Buy Voucher" title="Buy a voucher without date confirmation.">
                                                        <?php } else if ($is_booked == 1) {
                                                            ?>
                                                            <input class="voucher-btn col-md-7 btn-shade" type="submit" name="buynow" value="Buy Voucher" title="Buy a voucher without date confirmation.">
                                                            <input class="book-btn col-md-6 btn-shade" type="submit" name="booknow" value="Book Now" title="Book the room with date confirmation">
                                                        <?php } else if ($is_booked == 2) {
                                                            ?>
                                                            <input class="book-btn col-md-6 btn-shade" type="submit" name="booknow" value="Book Now" title="Book the room with date confirmation">
                                                        <?php } ?>
                                                        <?php echo form_close() ?>    
                                                        <!--</form>-->
                                                    </div>

                                                    <?php
                                                    // echo $hot_deal_info['SplDiscount_allowed'].$hot_deal_info['SplDicount_bank']; 
                                                    if ((int) $hot_deal_info['SplDiscount_allowed'] == 1 && (int) $hot_deal_info['SplDicount_bank'] == 1 && $hot_deal_info['SplDiscount_Pre'] > 0) {
                                                        ?>
                                                        <div class="discount-tag-scb"><?= $hot_deal_info['discount_pre'] + $hot_deal_info['SplDiscount_Pre']; ?>%</div>
                                                        <?php
                                                    } else if ((int) $hot_deal_info['SplDiscount_allowed'] == 1 && (int) $hot_deal_info['SplDicount_bank'] == 2 && $current > $start && $current < $end && $IsValidDate == "true") {
                                                        ?>
                                                        <div class="happy-hour-tag"></div>
                                                        <?php
                                                    } else if ((int) $hot_deal_info['SplDiscount_allowed'] == 1 && (int) $hot_deal_info['SplDicount_bank'] == 3) {
                                                        ?>
                                                        <!--April Early Cird-->
                                                        <div class="discount-tag-april"><?= $hot_deal_info['discount_pre'] + $hot_deal_info['SplDiscount_Pre']; ?>%%</div>
                                                        <?php
                                                    }

                                                    // Select coming soon properties
                                                } else if ($isSoldout == 2) {
                                                    if ($isSoldout == 2) {
                                                        echo'<div class="col-md-12">
                                                            <img src="/images/coming-soon.png" style="float: right;">
                                                        </div>';
                                                    }
                                                } else if ($isSoldout == 1) {
                                                    echo'<div class="col-md-12">
                                                            <img src="/images/sold-out.png" style="float: right;">
                                                        </div>';
                                                }
                                                ?>
                                                <div class="col-md-12" style="text-align: right;">
                                                    <?php
                                                    if ($fb_special == '1' && $hot_deal_info['discount_pre'] == '60') {
                                                        ?>
                                                        Exclusively for our Facebook fans<br>
                                                        Like us on Facebook<br>
                                                        <div class="fb-like" data-href="https://www.facebook.com/findmyfare?ref_type=bookmark" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <?php
                                    //Go through array with all options under option IDs
                                    foreach ($hot_deal_inclusives_arr as $option) {
                                        if ($option['option_no'] == $id && $option['inclusives']) {
//                                    if ($option_no == $id && $inclusives) {                                        
                                            ?>

                                            <div class="col-md-12 incPad">
                                                <div class="col-md-2">
                                                    <b>Inclusions :</b>
                                                </div>
                                                <div class="col-md-10">
                                                    <ul>
                                                        <?php
                                                        $incSet = explode('|', (string) $option['inclusives']);
                                                        foreach ($incSet as $optItem) {
                                                            echo '<li>' . $optItem . '</li>';
                                                        }
                                                        ?>
                                                    </ul>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    }
                                }
                            }
//                           }
                            ?>
                           
                            <!--   Toggle button  Show / Hide Script -->   
                            <script type="text/javascript">
                                $(document).ready(function () {
                                    $('.hide-btn').hide('fast');
                                    $(".toggle-false").click(function () {
                                        $("#hot").collapse({
                                            toggle: false
                                        });
                                    });
                                    $(".show-btn").click(function () {
                                        $("#hot").slideDown('show');
                                        $("#hideButton").show('slow');
                                        $('.show-btn').hide('fast');
                                    });
                                    $(".hide-btn").click(function () {
                                        $("#hot").slideUp('hide');
                                        $('.hide-btn').hide('fast');
                                        $('.show-btn').show('fast');
                                    });
                                });
                            </script>
                            
                           
                            <!-- Button  Show  -->
                            
                            <div class="bs-example" style=" padding-center:1%;" >
                                <button type="button" id="moreButton" class="btn btn-primary show-btn"> <span class=" glyphicon glyphicon-chevron-down" aria-hidden="true"></span> more rooms </button>
                                <script>
                                    $("#moreButton").on('click', function () {

                                    });
                                </script>




                               <!-- Second method -->
                                <div id = "hot"   hidden >
<?php
//$hot_count = $count_hotel_count;
//  for($x=0; $x<3; $x++){
//  $hot_deal_info_arr3=$rooms[x];


$optionCount2 = 3;


foreach ($hot_deal_info_arr as $index => $hot_deal_info) {
    if ($index > 2) {
        $optionCount2++;

        // var_dump($hot_deal_info);
        ?>

                                            <div class="col-md-12 hot-deal-container" style="padding: 1%;">
                                                <div class="col-md-1" style="text-align: center; margin-top: 15px;">
                                                    <div>    <i class="fa fa-fire fa-2x" style="color: #4E728C;"></i></div>
                                                    HOT DEAL
                                                    <br>                                                                                 
                                                    <span style="color: #AFAFAF;margin: 0px;font-size: 13px;">
                                                        Option <?php echo $optionCount2; ?>
                                                    </span>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="col-md-4">
                                                        <img class="hotdeal-hotel-img" src="<?= "$dirRooms/" . str_replace(' ', '-', $hot_deal_info['room_type']) . '.jpg'; ?>" alt="hotel hot deal <?= $hot_deal_info['hotel_name'] ?>">

                                                    </div>
                                                    <div class="col-md-8">
                                                        <span class="room-type-text"><?= $hot_deal_info['room_type'] . " " . $hot_deal_info['board_basis'] ?></span>                                        
                                                        <hr class="set-margine-5">
                                                        <i style="color: red;">
        <?php for ($occupancy = 0; $occupancy < (int) $hot_deal_info['occupancy']; $occupancy++) { ?>
                                                                <i class="fa fa-user" style="width: 15px;height: 15px;color: orange;"></i>    
                                                            <?php } ?>

                                                        </i>
                                                        <hr class="set-margine-5">
                                                        <div class="col-md-12">
                                                            <div class="col-md-2">
                                                                <i class="fa fa-hand-o-right fa-2x" style="color: #205D7A"></i>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <a class="urlLink" style="color: green;" href="#termsCondition">Free cancellation, instant refund and rooms guaranteed</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <script>
                                                        $(".urlLink").click(function () {
                                                            $("html, body").animate({scrollTop: $("#termsCondition").offset().top}, 600);
                                                            return false;
                                                        });
                                                    </script>
                                                </div>

                                                <div class="col-md-6">
        <?php if ((int) $hot_deal_info['discount_pre'] > 0) { ?>
                                                        <div class="col-md-6">                                            
                                                            <span class="room-type-text">Discount : <?php echo $hot_deal_info['discount_pre'] ?>% </span> 
                                                            <hr class="set-margine-5">
                                                            <span class="text-crossed">LKR <?php echo number_format($hot_deal_info['regular_price']); ?> </span> <b class="special-price">LKR <?php echo number_format($hot_deal_info['regular_price'] * ((100 - $hot_deal_info['discount_pre']) / 100)); ?></b>
                                                            <hr class="set-margine-5">
                                                            <i class="save-price"><i class="fa fa-thumbs-up fa-2x" style="width: 15%;"></i>You save : LKR <?php echo number_format($hot_deal_info['regular_price'] - $hot_deal_info['regular_price'] * ((100 - (int) $hot_deal_info['discount_pre']) / 100)); ?></i>                                                
                                                        </div>
        <?php } else { ?>
                                                        <div class="col-md-6">
                                                            <span class="room-type-text">Regular room rate : </span> 
                                                            <hr class="set-margine-5">
                                                            <b class="special-price">LKR <?= number_format($hot_deal_info['regular_price'] * ((100 - $hot_deal_info['discount_pre']) / 100)); ?></b>
                                                            <hr class="set-margine-5">

                                                        </div>
        <?php } ?>

                                                    <div class="col-md-6" style="height: 30px;">
                                                        <!--Select live properties-->
        <?php
        if ($isSoldout == 3) {
            $specialDiscount;
            if ((int) $hot_deal_info['SplDiscount_allowed'] == 1 && (int) $hot_deal_info['SplDicount_bank'] == 2 && $current > $start && $current < $end && $IsValidDate == "true") {
                $specialDiscount = $hot_deal_info['discount_pre'] * 2;
                // echo $specialDiscount; die();
            } else {
                $specialDiscount = $hot_deal_info['SplDiscount_Pre'];
                // echo $specialDiscount; die();
            }
            ?>


                                                            <div class="col-md-12">   
            <?php echo form_open('hot-deals/payment_hotdeals/hotdeal_payments'); ?> 
                                                                <!--<form action="https://pay.findmyfare.com/hotels/pay-hot-deal-upgraded_v1.php?" method="POST">-->
                                                                <input name="roomID" type="hidden" value='<?php echo $hot_deal_info['id']; ?>' required/>
                                                                <input name="hotelID" type="hidden" value='<?php echo $hotel_id; ?>' required/>
                                                                <input name="hotel" type="hidden" value='<?php echo $hot_deal_info['hotel_name']; ?>' required/>
                                                                <input name="cost" type="hidden" value='<?php echo round($hot_deal_info['regular_price'] * ((100 - $hot_deal_info['discount_pre']) / 100)); ?>' required/>
                                                                <input name="room" type="hidden" value='<?php echo $hot_deal_info['room_type']; ?>' required/>
                                                                <input name="package" type="hidden" value='<?php echo $hot_deal_info['board_basis']; ?>' required/>
                                                                <input name="hoteladdress" type="hidden" value='<?php echo $hot_hotel_arr['address']; ?>' required/>
                                                                <input name="regularCost" type="hidden" value='<?= $hot_deal_info['regular_price']; ?>' required/>
                                                                <input name="regularDiscount" type="hidden" value='<?= $hot_deal_info['discount_pre']; ?>' required/>
                                                                <input name="SplDiscount_allowed" type="hidden" value='<?= $hot_deal_info['SplDiscount_allowed']; ?>' required/>
                                                                <input name="SplDiscount_Pre" type="hidden" value='<?= $specialDiscount; ?>' required/>
                                                                <input name="SplDicount_bank" type="hidden" value='<?= $hot_deal_info['SplDicount_bank']; ?>' required/>
                                                                <input name="hotelDescription" type="hidden" value='<?= $hot_hotel_arr['description']; ?>' required/>
                                                                <input name="valid_from" type="hidden" value='<?= $hot_deal_info['vaild_from']; ?>' required/>
                                                                <input name="valid_to" type="hidden" value='<?= $hot_deal_info['vaild_to']; ?>' required/>
                                                                <input name="occupancy" type="hidden" value='<?= $hot_deal_info['occupancy']; ?>' required/>
                                                                <input name="blockcat" type="hidden" value='<?= $hot_deal_info['block_category']; ?>' required/>
                                                                <input name="min_date" type="hidden" value='<?= $hot_deal_info['min_date']; ?>' required/>
                                                                <input name="blocked_dates" type="hidden" value='<?= $hot_deal_info['blocked_dates']; ?>' required/>
                                                                <input name="room_limit" type="hidden" value='<?= $hot_deal_info['room_limit']; ?>' required/>
            <?php if ($is_booked == 0) { ?>
                                                                    <input class="voucher-btn col-md-7 btn-shade" type="submit" name="buynow" value="Buy Voucher" title="Buy a voucher without date confirmation.">
                                                                <?php } else if ($is_booked == 1) {
                                                                    ?>
                                                                    <input class="voucher-btn col-md-7 btn-shade" type="submit" name="buynow" value="Buy Voucher" title="Buy a voucher without date confirmation.">
                                                                    <input class="book-btn col-md-6 btn-shade" type="submit" name="booknow" value="Book Now" title="Book the room with date confirmation">
                                                                <?php } else if ($is_booked == 2) {
                                                                    ?>
                                                                    <input class="book-btn col-md-6 btn-shade" type="submit" name="booknow" value="Book Now" title="Book the room with date confirmation">
                                                                <?php } ?>
                                                                <?php echo form_close() ?>    
                                                                <!--</form>-->
                                                            </div>

            <?php
            // echo $hot_deal_info['SplDiscount_allowed'].$hot_deal_info['SplDicount_bank']; 
            if ((int) $hot_deal_info['SplDiscount_allowed'] == 1 && (int) $hot_deal_info['SplDicount_bank'] == 1 && $hot_deal_info['SplDiscount_Pre'] > 0) {
                ?>
                                                                <div class="discount-tag-scb"><?= $hot_deal_info['discount_pre'] + $hot_deal_info['SplDiscount_Pre']; ?>%</div>
                                                                <?php
                                                            } else if ((int) $hot_deal_info['SplDiscount_allowed'] == 1 && (int) $hot_deal_info['SplDicount_bank'] == 2 && $current > $start && $current < $end && $IsValidDate == "true") {
                                                                ?>
                                                                <div class="happy-hour-tag"></div>
                                                                <?php
                                                            } else if ((int) $hot_deal_info['SplDiscount_allowed'] == 1 && (int) $hot_deal_info['SplDicount_bank'] == 3) {
                                                                ?>
                                                                <!--April Early Cird-->
                                                                <div class="discount-tag-april"><?= $hot_deal_info['discount_pre'] + $hot_deal_info['SplDiscount_Pre']; ?>%%</div>
                                                                <?php
                                                            }

                                                            // Select coming soon properties
                                                        } else if ($isSoldout == 2) {
                                                            if ($isSoldout == 2) {
                                                                echo'<div class="col-md-12">
                                                            <img src="/images/coming-soon.png" style="float: right;">
                                                        </div>';
                                                            }
                                                        } else if ($isSoldout == 1) {
                                                            echo'<div class="col-md-12">
                                                            <img src="/images/sold-out.png" style="float: right;">
                                                        </div>';
                                                        }
                                                        ?>
                                                        <div class="col-md-12" style="text-align: right;">
                                                        <?php
                                                        if ($fb_special == '1' && $hot_deal_info['discount_pre'] == '60') {
                                                            ?>
                                                                Exclusively for our Facebook fans<br>
                                                                Like us on Facebook<br>
                                                                <div class="fb-like" data-href="https://www.facebook.com/findmyfare?ref_type=bookmark" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
            <?php
        }
        ?>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>

        <?php
        //Go through array with all options under option IDs
        foreach ($hot_deal_inclusives_arr as $option) {
            if ($option['option_no'] == $id && $option['inclusives']) {
//                                    if ($option_no == $id && $inclusives) {                                        
                ?>

                                                    <div class="col-md-12 incPad">
                                                        <div class="col-md-2">
                                                            <b>Inclusions :</b>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <ul>
                <?php
                $incSet = explode('|', (string) $option['inclusives']);
                foreach ($incSet as $optItem) {
                    echo '<li>' . $optItem . '</li>';
                }
                ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                <?php
            }
        }
    }
}
//                           }
?>
                                </div>
                            


                            <!--Toggle button  Hide -->

   <button type="button" id="hideButton" class="btn btn-primary hide-btn"   > <span class=" glyphicon glyphicon-chevron-up" aria-hidden="true"></span> hide rooms </button>

</div>

                            <div id="termsCondition" class="col-md-12">                                
                                <style>
                                    .TcCell{}
                                    .single-black-border{border-bottom: 1px dotted black;padding: 5px;}
                                    .tc-div{background-color: whitesmoke;padding: 20px;border-radius: 5px;margin-bottom: 20px;}
                                </style>

                                <div class="col-md-12 tc-div">
                                    <h4 class="margine-left-1">Terms and conditions</h4>
                                    <hr>
                                    <div class="col-md-6 TcCell">                  
                                        <div class="col-md-1">
                                            <img src="//fmffiles.s3.amazonaws.com/images/hotel-hotdeal/img-tick.png" width="15px">
                                        </div>
                                        <div class="col-md-11 single-black-border">                                            
                                            Valid <?= date('jS \of F Y', strtotime((string) $vaild_from)); ?> to <?= date('jS \of F Y', strtotime((string) $vaild_to)); ?>.
                                        </div>
                                    </div>
<?php
if ($hot_deal_TC_arr) {
    foreach ($hot_deal_TC_arr as $TCItem) {
        ?>
                                            <div class="col-md-6 TcCell">     
                                                <div class="col-md-1">
                                            <?php if (in_array($TCItem['id'], $condionArr)) {
                                                ?>
                                                        <img src="//fmffiles.s3.amazonaws.com/images/hotel-hotdeal/img-tick.png" width="15px">
                                            <?php } else { ?>
                                                        <img src="//fmffiles.s3.amazonaws.com/images/hotel-hotdeal/wrong-icon.png" width="15px">
                                                    <?php } ?>
                                                </div>
                                                <div class="col-md-11 single-black-border">
                                                    <?php
                                                    echo $TCItem['condition'];
                                                    ?>
                                                </div>
                                            </div>
                                                    <?php
                                                }
                                            }
                                            ?> 
                                </div>
                            </div>                           
                            <div class="clearfix"></div>
                            <!--</div>--> 
                           
                            <div>
                                <style>
                                    .TcCell{}
                                    .single-black-border{border-bottom: 1px dotted black;padding: 5px;}
                                    .tc-div{background-color: whitesmoke;padding: 20px;border-radius: 5px;margin-bottom: 20px;}
                                </style>
                             <div class="col-md-12 tc-div">
                     <!-- Loadig slider view and pass hotel informations -->
                                  <h4 class="margine-left-1">Hotels Nearby : <?php echo $city['city_info']; ?></h4>
                                  <hr>
                                  <?php $this->load->view('slider-view',array($hotel_info)); ?>  
                                    
                             </div>                                         
                        </div> 
                            
                        </div>                
                    </div> 
                </div>
<?php // include './discus.html';         ?>
            </div>
<?php ?>
            <script>
            </script>
        </div>
                <?php //include('footer.php');    ?>
    </div>
            <?php
            $count = 0;
            $images = array();
//Images for the slider
            $dir = "hmgt/assist/photo-gallery/$hotel_id/Views";
            $files1 = scandir($dir);

//First image collection
            foreach ($files1 as $imafeFile) {
                if (strlen($imafeFile) > 5) {
                    $images[$count] = $imafeFile;
                    $count++;
                }
            }
            ?>
    <script>
        //get the length
        var count = 0;
        var thumnail_arr = new Array();
        thumnail_arr = new Array();
    <?php foreach ($images as $slider) {
        ?>
            thumnail_arr[count] = new Array('<?= "/$dir/$slider"; ?>');
            count++;
<?php } ?>
    </script>
    <div class="col-md-12" id="image_slider_content" hidden>

        <!--HD images slider-->
        <div class="col-md-8">

            <img id="slider_image" alt="main images <?php echo $hotel_name; ?>" class="slider_image" src="<?= "/$dir/$viewPicture[0]"; ?>">
        </div>
        <!--Thumbnail images-->
        <div class="col-md-4">
            <div class="col-md-12">

            </div>
<?php
$imageCount = 0;
foreach ($images as $thumbnail) {
    ?>
                <img class="thumnail" alt="thumbnails <?= $hotel_name; ?>" src="<?= "/$dir/$thumbnail"; ?>" onclick="changeSliderImage(<?php echo $imageCount; ?>)">                                      
                <script>
                    var blank_Div = document.getElementById('image_slider');
                    var slider_Div = document.getElementById('image_slider_content');

                    blank_Div.innerHTML = slider_Div.innerHTML;
                </script>    
    <?php
    $imageCount++;
}
?>
        </div>    
    </div>

    <script type="text/javascript">

        changeSliderImage = function (x)
        {
            //document.getElementById("slider_image").src = thumnail_arr[x];
            $('#slider_image').fadeOut(500);
            $('#slider_image').attr("src", thumnail_arr[x]);
            $('#slider_image').fadeIn(500);
        }

    </script>
</body>
</html>