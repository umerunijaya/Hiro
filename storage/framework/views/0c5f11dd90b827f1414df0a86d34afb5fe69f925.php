
<?php $__env->startSection('description', 'Welcome to Admin Control Panel'); ?>
<?php $__env->startSection('title', 'Move Klang Admin Panel'); ?>
<?php $__env->startPush('css'); ?>
<?php echo $__env->make('admin.layout.datatable_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            
            <h4 class="page-title">Manage Business Types</h4>
        </div><!--end page-title-box-->
    </div><!--end col-->
</div>
<div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Add New Business Type</h4>
                <?php if(!empty(session('successmsg'))): ?> <div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                     <?php echo e(session('successmsg')); ?> </div> <?php endif; ?>
            <form method="post" action="<?php echo e(route('addbusinessnature')); ?>" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                    <div class="col-md-6">
                        <div class="form-group col-lg-12">
                        <label for="type">Type Name</label>
                        <input type="text" class="form-control" name="type" placeholder="Enter Type Name">
                    <small class="text-danger"><?php if($errors->has('type')): ?><?php echo e($errors->first('type')); ?><?php endif; ?></small>
                    </div>
                    </div>
                    
                <button type="submit" class="btn btn-gradient-primary">Submit</button>
            </form>                                           
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->

    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="col-sm-12" id="result"></div>
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                        <td><input id="type<?php echo e($type->id); ?>" name="type" value="<?php echo e($type->name); ?>" class="form-control"></td>
                        <td><button id="edittype" data="<?php echo e($type->id); ?>" title="Edit company information" class="btn btn-success"><i class="ti-save"></i></button> 
                        <a title="Activate the company" onclick="return confirm('Are you sure, you want to delete?');" href="<?php echo e(route('deletebusinessnature',[$type->id])); ?>" class="btn btn-danger btn-small"><i class="ti ti-trash"></i></a>
                    </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            
                        <?php endif; ?>
                    </tbody>
                </table>        
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->
    


</div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<?php echo $__env->make('admin.layout.datatable_js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\moveklang\resources\views/admin/pages/businessnature/businessnature.blade.php ENDPATH**/ ?>