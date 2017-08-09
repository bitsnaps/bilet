<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

?>

<!-- main body contents starts here-->
<div class="container" id="seatContainer">
    <div class="row" style="margin-top: 5%;">
        <!--Left Column *********************************************-->
        <div class="col-md-3">
            <div class="col-md-12" style="background-color: whitesmoke;
                 padding-top: 5%;padding-bottom: 15%;">
                <div class="col-md-12 img-rounded" 
                     style="background-color: white;padding-top: 5%;padding-bottom: 15%;">
                    <h4 class="text-center"><?= \Yii::t('app', 'SHOW'); ?></h4>
                    <u><a href="<?= Url::to([$url_show_time, 'id' => $cultural_place_id])?>"><?= $show_name ?></a></u><br><br>
                </div>

                <a href="<?= Url::to([$url_place])?>">
                    <div class="col-md-12 text-center ticketRightCol img-rounded"><?= $place_name ?></div>
                </a>
                <a href="<?= Url::to([$url_show_time, 'id' => $cultural_place_id])?>">
					
                    <div class="col-md-12 text-center ticketRightCol img-rounded"><?= $show_time; ?></div>
                </a>
                <div class="col-md-12 text-center ticketRightCol img-rounded" 
                     style="background-color: black;"><?= \Yii::t('app', 'Seat'); ?></div>
					 
                <div class="col-md-12 text-center ticketRightCol img-rounded" 
                     style="background-color: black;"><?= \Yii::t('app', 'Price'); ?></div>
            </div>
        </div>
        <!--Right Column *********************************************-->
        <div class="col-md-9">
            <div class="col-md-12" style="background-color: whitesmoke;">
                <h3 class="text-center"><?= \Yii::t('app', 'Please Choose a seat'); ?></h3>
                <!--Stage********************************************************************-->
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 img-rounded" style="background-color: white;">
                        <div class="col-md-offset-2 col-md-8 text-center" 
                             style="background-color: whitesmoke;margin-top: 5%;
                             padding-top: 2%;padding-bottom: 2%;">
                            <?= \Yii::t('app', 'Stage'); ?>
                        </div>
                        <div class="col-md-offset-3 col-md-6" 
                             style="background-color: black;margin-top: 0.5%;margin-bottom: 5%;
                             padding-top: 0.5%;padding-bottom: 0.5%;border-radius: 4px;">
                        </div>
                        <!--Seat selection***************************-->
                        <div class="col-md-offset-2 col-md-8 fuselage">
                            <div class="exit">

                            </div>
                            <div class="plane">
                                <div class="col-md-12">
                                    <ol>
                                        <li class="row">
                                            <ol class="seats" type="A">
                                                <li class="seat">
                                                    <input type="checkbox" id="1A" />
                                                    <label class="vip" for="1A">1A</label>
                                                </li>
                                                <li class="seat">
                                                    <input type="checkbox" id="1B" />
                                                    <label class="vip" for="1B">1B</label>
                                                </li>
                                                <li class="seat">
                                                    <input type="checkbox" id="1C" />
                                                    <label class="vip" for="1C">1C</label>
                                                </li>
                                                <li class="seat">
                                                    <input type="checkbox" disabled id="1D" />
                                                    <label for="1D">Occupied</label>
                                                </li>
                                                <li class="seat">
                                                    <input type="checkbox" id="1E" />
                                                    <label class="vip" for="1E">1E</label>
                                                </li>
                                                <li class="seat">
                                                    <input type="checkbox" id="1F" />
                                                    <label class="vip" for="1F">1F</label>
                                                </li>
                                            </ol>
                                        </li>
                                        <li class="row">
                                            <ol class="seats" type="A">
                                                <li class="seat">
                                                    <input type="checkbox" id="2A" />
                                                    <label for="2A">2A</label>
                                                </li>
                                                <li class="seat">
                                                    <input type="checkbox" id="2B" />
                                                    <label for="2B">2B</label>
                                                </li>
                                                <li class="seat">
                                                    <input type="checkbox" id="2C" />
                                                    <label for="2C">2C</label>
                                                </li>
                                                <li class="seat">
                                                    <input type="checkbox" id="2D" />
                                                    <label for="2D">2D</label>
                                                </li>
                                                <li class="seat">
                                                    <input type="checkbox" id="2E" />
                                                    <label for="2E">2E</label>
                                                </li>
                                                <li class="seat">
                                                    <input type="checkbox" id="2F" />
                                                    <label for="2F">2F</label>
                                                </li>
                                            </ol>
                                        </li>
                                        <li class="row">
                                            <ol class="seats" type="A">
                                                <li class="seat">
                                                    <input type="checkbox" id="3A" />
                                                    <label for="3A">3A</label>
                                                </li>
                                                <li class="seat">
                                                    <input type="checkbox" id="3B" />
                                                    <label for="3B">3B</label>
                                                </li>
                                                <li class="seat">
                                                    <input type="checkbox" id="3C" />
                                                    <label for="3C">3C</label>
                                                </li>
                                                <li class="seat">
                                                    <input type="checkbox" id="3D" />
                                                    <label for="3D">3D</label>
                                                </li>
                                                <li class="seat">
                                                    <input type="checkbox" id="3E" />
                                                    <label for="3E">3E</label>
                                                </li>
                                                <li class="seat">
                                                    <input type="checkbox" id="3F" />
                                                    <label for="3F">3F</label>
                                                </li>
                                            </ol>
                                        </li>
                                        <li class="row">
                                            <ol class="seats" type="A">
                                                <li class="seat">
                                                    <input type="checkbox" id="4A" />
                                                    <label for="4A">4A</label>
                                                </li>
                                                <li class="seat">
                                                    <input type="checkbox" id="4B" />
                                                    <label for="4B">4B</label>
                                                </li>
                                                <li class="seat">
                                                    <input type="checkbox" id="4C" />
                                                    <label for="4C">4C</label>
                                                </li>
                                                <li class="seat">
                                                    <input type="checkbox" id="4D" />
                                                    <label for="4D">4D</label>
                                                </li>
                                                <li class="seat">
                                                    <input type="checkbox" id="4E" />
                                                    <label for="4E">4E</label>
                                                </li>
                                                <li class="seat">
                                                    <input type="checkbox" id="4F" />
                                                    <label for="4F">4F</label>
                                                </li>
                                            </ol>
                                        </li>
                                    </ol>
                                </div>
                                <div class="row">
                                    <div class="col-md-12" style="margin-top: 6%;">
                                        <div class=" seats seat">
                                            <input type="checkbox" id="8A" />
                                            <label for="8A">5A</label>

                                            <input type="checkbox" id="8B" />
                                            <label for="8B">5B</label>

                                            <input type="checkbox" id="8C" />
                                            <label for="8C">5C</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Seats explanation *******************************-->
                <div class="row" style="background-color: white;margin-top: 2%;">
                    <div class="col-md-3" >
                        <div class=" seats seat">
                            <input type="checkbox" checked id="selected" />
                            <label for="selected"><?= \Yii::t('app', 'selected'); ?></label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class=" seats seat">
                            <input type="checkbox" id="regular" />
                            <label for="regular"><?= \Yii::t('app', 'regular'); ?></label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class=" seats seat">
                            <input type="checkbox" id="vips" />
                            <label class="vip" for="vips"><?= \Yii::t('app', 'vip'); ?></label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class=" seats seat">
                            <input type="checkbox" disabled id="occupied">
                            <label for="occupied"><?= \Yii::t('app', 'occupied'); ?></label>
                        </div>
                    </div>
                </div>

                <!--Pricing ******************************************-->
                <div class="col-md-offset-1 col-md-10" style="padding-top: 5%;">
                    <div class="col-md-3">
                        <div class=" seats seat">
                            <input type="checkbox" id="regPrice" />
                            <label for="regPrice"><?= \Yii::t('app', 'regular'); ?></label>
                        </div>
                        <center><b>30 <i><?= \Yii::t('app', 'TMM'); ?></i></b></center>
                    </div>
                    <div class="col-md-3">
                        <div class=" seats seat">
                            <input type="checkbox" id="VipPrice" />
                            <label class="vip" for="VipPrice"><?= \Yii::t('app', 'vip'); ?></label>
                        </div>
                        <center><b>50 <i><?= \Yii::t('app', 'TMM'); ?></i></b></center>
                    </div>
                </div>
            </div>

            <!--Buttons "NEXT" and "BACK"-->
            <div class="col-md-12" style="margin-top: 5%;padding-right: 0;">
                <form action="cardInfo.html" method="get">
                    <button class="btn btn-default pull-right" type="submit" style="margin-left: 4%;">
                        <?= \Yii::t('app', 'Next'); ?>
                    </button>
                </form>
                <form action="buyOnline.html" method="get">
                    <button class="btn btn-default pull-right" type="submit">
                        <?= \Yii::t('app', 'Back'); ?>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <hr>
</div> 
<!-- /END OF container ******************************************************-->