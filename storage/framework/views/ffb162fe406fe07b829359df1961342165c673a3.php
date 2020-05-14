
<?php $__env->startSection('description', 'Welcome to Admin Control Panel'); ?>
<?php $__env->startSection('title', 'Move Klang Admin Panel'); ?>
<?php $__env->startPush('css'); ?>
<link href="<?php echo e(asset('public/admin/plugins/daterangepicker/daterangepicker.css')); ?>" rel="stylesheet" />
<link href="<?php echo e(asset('public/admin/plugins/select2/select2.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('public/admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('public/admin/plugins/timepicker/bootstrap-material-datetimepicker.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('public/admin/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')); ?>" rel="stylesheet" />

<!-- App css -->
<link href="<?php echo e(asset('public/admin/assets/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('public/admin/assets/css/jquery-ui.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('public/admin/assets/css/icons.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('public/admin/assets/css/metisMenu.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(asset('public/admin/assets/css/app.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            
            <h4 class="page-title">Manage Locations</h4>
        </div><!--end page-title-box-->
    </div><!--end col-->
</div>
<div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Edit Location Information</h4>
                <?php if(!empty(session('successmsg'))): ?> <div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                     <?php echo e(session('successmsg')); ?> </div> <?php endif; ?>
            <form method="post" action="<?php echo e(route('edit.loc')); ?>">
                <?php echo e(csrf_field()); ?>

            <input type="hidden" name="id" value="<?php echo e($locd->id); ?>">
                <div class="form-group col-lg-12">
                    <div class="col-md-6">
                        <label class="mb-3">Single select</label>
                        <select name="parentloc" id="select2" class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;">
                            <option value="0">Select</option>

                            <?php $__empty_1 = true; $__currentLoopData = $locs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <option value="<?php echo e($loc->id); ?>" <?php if($locd->parent_id==$loc->id): ?> selected="selected" <?php endif; ?>><?php echo e($loc->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <?php endif; ?>

                        </select>
                    </div> <br>
                    <div class="col-md-6">
                        <label for="exampleInputEmail1">Location Name</label>
                    <input type="text" class="form-control" name="location" value="<?php echo e($locd->name); ?>" placeholder="Enter Location Name">
                    <small class="text-danger"><?php if($errors->has('location')): ?><?php echo e($errors->first('location')); ?><?php endif; ?></small>
                    </div>
                </div>
                <button type="submit" class="btn btn-gradient-primary">Submit</button>
            </form>                                           
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->



</div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<script src="<?php echo e(asset('public/admin/assets/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin/assets/js/jquery-ui.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin/assets/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin/assets/js/metismenu.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin/assets/js/waves.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin/assets/js/feather.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin/assets/js/jquery.slimscroll.min.js')); ?>"></script> 

<!-- Plugins js -->
<script src="<?php echo e(asset('public/admin/plugins/moment/moment.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin/plugins/daterangepicker/daterangepicker.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin/plugins/select2/select2.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin/plugins/timepicker/bootstrap-material-datetimepicker.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js')); ?>"></script>

<script src="<?php echo e(asset('public/admin/assets/pages/jquery.forms-advanced.js')); ?>"></script>

<!-- App js -->
<script src="<?php echo e(asset('public/admin/assets/js/app.js')); ?>"></script>

<script>
    $("#select2").select2({
  tags: true
});
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\moveklang\resources\views/admin/pages/location/editlocation.blade.php ENDPATH**/ ?>