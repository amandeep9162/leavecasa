<?php $__env->startSection('content'); ?>
<?php 
use App\Helpers\Hotel;
$mark_price = 0;
?>

<div class="home1 h-50" style="">
  <div class="home_slider_container1">
    <div class="owl-carousel owl-theme home_slider1">
      <div class="owl-item home_slider_item1">
        <div class="home_slider_background1" style="background-image:url(/../images/bg.jpg)"></div>
        <div class="home_slider_content1 text-center">
          <div class="home_slider_content_inner1" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
          </div>
        </div>
      </div>
    </div>
  </div>   
</div>
<section class="section" id="content">
	<div class="container">
			<?php
			$end = $first = 1;
			$children = array_column($hotel_req['rooms'], 'children_ages');
			$other = $hotel;
			$hotel = $hotel['hotel'];
			if(!empty($hotel['category'])){
			$dull = 5 - $hotel['category'];
			}
			?>
			<?php
			$adult=0;
			$child=0;
			foreach($hotel_req['rooms'] as $room_no => $room_val){
			if(!empty($room_val['adults'])){
			$adult+= $room_val['adults'];
			}
			if(!empty($room_val['children_ages'])){
			$child+= count($room_val['children_ages']);
			}
			}
			?>
		<div class="row mt-5 mb-1 justify-content-md-left">
			<div class="col">
				<p class="f28w100 white-text mt0 mb0"><?php echo e($hotel['name']); ?>  </p>
	 			<p class="mt0 ">
					<span class="fs15 white-text text-darken-4">
						<i class="far fa-clock orange-text"></i> Check In :
					<?php echo e(\Carbon\Carbon::parse($hotel_req['checkin'])->format('d M ,Y')); ?>

						</span>
					<span class="fs15 white-text text-darken-4">
						&nbsp;<i class="far fa-clock orange-text"></i> Check Out :
					<?php echo e(\Carbon\Carbon::parse($hotel_req['checkout'])->format('d M ,Y')); ?>

						</span>	
				</p>
			</div>
		</div>
	</div>
</section>
<?php $__env->stopSection(); ?>	
<?php echo $__env->make('frontend.layout.materialize', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>