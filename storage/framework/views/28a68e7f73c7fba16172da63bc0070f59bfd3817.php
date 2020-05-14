
<?php $__env->startSection('title', 'Search Companies By Alphabet | Move Klang'); ?>
<?php $__env->startSection('description', "We provides you best business promotion platform"); ?>
<?php $__env->startSection('keywords', 'business, promotions, platform'); ?>

<?php $__env->startPush('css'); ?>
<style>
.list-group-item {
    padding: 3px 10px !important;
    font-size: 12px !important;
}
.badge {
    padding: 5px 10px;
    background-color:#eee !important;
    font-size: 15px;
    font-weight: 500;
    border-radius: 3px;
    color:black;
}
</style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <div class="page-breadcrumbs">
        <h1 class="section-title">Browse Companies by Alphabet</h1>	
    </div>
    <small>Browse Companies by Alphabet - A-Z</small>

    <div class="section" style="background-color: white;">
        <div class="row">
            <div class="col-sm-12">
                <br>
                    <?php $__currentLoopData = range('A', 'Z'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $elements): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <a href="<?php echo e(route('companies.alphabet', [$elements])); ?>" class="badge badge-info"><?php echo e($elements); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="clearfix"></div>
                <p class="col-sm-3 mt-8"><small> Companies: <?php echo e(count($allcomps)); ?></small></p>
        </div>
    </div>
</div>

<div class="section">
				<div class="row">
					<div class="col-sm-9">
						<div id="site-content" class="site-content">
							<div class="lifestyle-news">
							</div><!--/.section-->
							<div class="section listing-news">
                                <?php $__empty_1 = true; $__currentLoopData = $allcomps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <div class="post">
									<div class="entry-header">
										<div class="entry-thumbnail">
                                        <img class="img-responsive" src="<?php echo e(url('public/assets/logos')); ?>/<?php echo e($comp->company_logo); ?>" alt="" />
										</div>
									</div>
									<div class="post-content">								
										<div class="entry-meta">
											<ul class="list-inline">
												<li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> Nov 15, 2015 </a></li>
												<li class="views"><a href="#"><i class="fa fa-eye"></i>15k</a></li>
												<li class="loves"><a href="#"><i class="fa fa-heart-o"></i>278</a></li>
											</ul>
                                        </div>
                                        <div class="col-sm-9">
										<h2 class="entry-title">
                                        <a href="news-details.html"><?php echo e($comp->company_name); ?></a>
										</h2>
										<div class="entry-content">
                                        <p><?php echo e($comp->description); ?></p>
                                            <p></p>
                                        <p><i class="fa fa-map-marker"></i> <?php echo e($comp->company_address); ?></p>
                                        <p><i class="fa fa-phone"></i> <?php echo e($comp->primary_phone); ?></p>
                                        </div>
                                        </div>
                                        <div class="col-sm-3 text-center"><ul class="list-group">
                                            <li class="list-group-item"><i class="fa fa-plus-square"></i><br>Add Inquiry</li>
                                            <li class="list-group-item"><i class="fa fa-heart-o"></i><br>Favorite</li>
                                            <li class="list-group-item"><i class="fa fa-envelope"></i><br>Contact Company</li>
                                          </ul></div>
									</div>
								</div><!--/post-->    
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <h4>No Data Available!</h4>
                                <?php endif; ?>
								
								 
								
								<div class="post google-add">
									<div class="add inner-add text-center">
										<a href="#"><img class="img-responsive" src="images/post/google-add.jpg" alt="" /></a>
									</div><!--/.section-->
								</div><!--/.google-add-->
								
							</div>
						</div><!--/#site-content-->
						
						
					</div><!--/.col-sm-9 -->	
					
					<div id="sticky" class="col-sm-3">
						<div id="sitebar">
							<div class="widget">
								<div class="add featured-add">
									<a href="#"><img class="img-responsive" src="<?php echo e(asset('public/assets/images/post/add/add1.jpg')); ?>" alt="" /></a>
								</div>
							</div><!--/#widget-->
							
							<div class="widget follow-us">
								<h1 class="section-title title">Follow Us</h1>
								<ul class="list-inline social-icons">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-youtube"></i></a></li>
								</ul>
							</div><!--/#widget-->	
						</div><!--/#sitebar-->
					</div>
				</div>				
			</div><!--/.section-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\moveklang\resources\views/frontend/pages/companies.blade.php ENDPATH**/ ?>