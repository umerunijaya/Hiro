
<?php $__env->startSection('description', 'Welcome to Admin Control Panel'); ?>
<?php $__env->startSection('title', 'Move Klang Admin Panel'); ?>
<?php $__env->startPush('css'); ?>
<?php echo $__env->make('admin.layout.forms_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            
            <h4 class="page-title">Manage Home Page Sliders</h4>
        </div><!--end page-title-box-->
    </div><!--end col-->
</div>
<div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Add New Sliders</h4>
                <?php if(!empty(session('successmsg'))): ?> <div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                     <?php echo e(session('successmsg')); ?> </div> <?php endif; ?>
            <form method="post" action="<?php echo e(route('sliderspost')); ?>" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                    <div class="col-md-6">
                        <div class="form-group col-lg-12">
                    <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" name="sliderimage" id="catimg">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    <div class="">
                        <label class="sort" for="sort">Sorting</label>
                        <input type="number" class="form-control" min="1" name="sort" required>
                    </div>
                </div>
            </div>
                <button type="submit" class="btn btn-gradient-primary">Add New Slider</button>
            </form>                                           
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->


    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
            <div class="float-left col-md-8">
                <h4 class="mt-0 header-title">All Sliders</h4></div>
                <?php $__empty_1 = true; $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-sm-6">
                        <?php if(!empty($slider->image)): ?> <img class="img" width="550" src="<?php echo e(url('public/assets/images/sliders')); ?>/<?php echo e($slider->image); ?>"> <?php endif; ?> 
                    </div>
                <div class="col-sm-2"><br> <input id="sort" data="<?php echo e($slider->id); ?>" value="<?php echo e($slider->sort); ?>" class="form-control" type="number" min="1" name="sort" class="form-controll" placeholder="Sort"></div>
                <div class="col-sm-2"><br>
                    <a onclick="return confirm('Are you sure to delete?');" class="btn btn-danger" href="<?php echo e(route('sliderdelete',[$slider->id])); ?>">Delete</a></div>
                </div>
                <hr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    
                <?php endif; ?>
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->


</div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<?php echo $__env->make('admin.layout.forms_js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\moveklang\resources\views/admin/pages/slider/sliders.blade.php ENDPATH**/ ?>