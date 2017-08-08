<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
?>

<!-- main body contents starts here-->
<div class="container" style="margin-top: 5%;">
    <div class="row" style="margin-top: 5%;">
        <!--Left Column *********************************************-->
        <div class="col-md-3">
            <div class="col-md-12" style="background-color: whitesmoke;
                 padding-top: 5%;padding-bottom: 15%;">
                <div class="col-md-12 img-rounded" 
                     style="background-color: white;padding-top: 5%;padding-bottom: 15%;">
                    <h4 class="text-center">SHOW</h4>
                    <u><a href="#">Buratino 5+</a></u><br><br>
                    <u><a href="#">Hanuma 16+</a></u><br><br>
                    <u><a href="#">Otello 16+</a></u><br><br>
                    <u><a href="#">Kolobok 5+</a></u><br>
                </div>

                <a href="#">
                    <div class="col-md-12 text-center ticketRightCol img-rounded">Teahtre</div>
                </a>
                <a href="#">
                    <div class="col-md-12 text-center ticketRightCol img-rounded">Show time</div>
                </a>
                <a href="#">
                    <div class="col-md-12 text-center ticketRightCol img-rounded" 
                         style="background-color: black;">Seats</div>
                </a>
                <a href="#">
                    <div class="col-md-12 text-center ticketRightCol img-rounded" 
                         style="background-color: black;">Price</div>
                </a>
            </div>
        </div>
        <!--Right Column *********************************************-->
        <div class="col-md-9">
            <h3 class="text-center"><?= \Yii::t('app', 'Buy Tickets Online'); ?></h3>
            <h4 class="text-center"><?= $cultural_place_translation[0]->place_name ?></h4>

            <div class="col-md-offset-2 col-md-8">
                <div class="col-md-1" style="padding-right: 0;padding-top: 5px;
                     width: 22px;height: 31px;">
                    <button type="button" class="btn btn-primary btn-xs pull-right" onclick="plusDivs(-1)">
                        <span class="fa fa-arrow-left"></span>
                    </button>
                </div>


                <div class=" mySlides col-md-10">
                    <div class="col-md-4" style="background-color: brown;">
                        <p>Sat 4th Feb</p>
                    </div>

                    <div class="col-md-4">
                        <p>Sun 5th Feb</p>
                    </div>

                    <div class="col-md-4">
                        <p>Mon 6th Feb</p>
                    </div>
                </div>

                <div class=" mySlides col-md-10">
                    <div class="col-md-4" style="background-color: brown;">
                        <p>Tue 7th Feb</p>
                    </div>

                    <div class="col-md-4">
                        <p>Wed 8th Feb</p>
                    </div>

                    <div class="col-md-4">
                        <p>Thu 9th Feb</p>
                    </div>
                </div>

                <div class="col-md-1" style="padding-left: 0;padding-top: 5px;
                     width: 22px;height: 31px;">
                    <button type="button" class="btn btn-primary btn-xs" onclick="plusDivs(+1)">
                        <span class="fa fa-arrow-right"></span>
                    </button>
                </div>
            </div>

            <div class="col-md-12 ticketOnline">
                <h5><?= $show_translation[0]->show_name ?></h5>
                <div style="margin-top: 5%;">
                    <p>Start Time 
                        <time class="ticketTime"><b> <?= $show[0]->start_hour, ':', $show[0]->start_min; ?></b></time>
                    </p>
                </div>
            </div>

            <div class="col-md-12 ticketOnline">
                <h5>Show Name</h5>
                <div style="margin-top: 5%;">
                    <p>Start Time 
                        <time class="ticketTime"><b> 16:00</b></time>
                    </p>
                </div>
            </div>
            <div class="col-md-12" style="padding-top: 5%;">
                <p>
                    By pressing "Next" button, you are agree with 
                    <i style="color: red;">user terms</i>
                </p>
            </div>
            <form action="seat.html" method="get">
                <button class="btn btn-default pull-right" type="submit">
                    Next
                </button>
            </form>
        </div>
    </div>

    <hr>
</div> 
<!-- /END OF container ******************************************************-->