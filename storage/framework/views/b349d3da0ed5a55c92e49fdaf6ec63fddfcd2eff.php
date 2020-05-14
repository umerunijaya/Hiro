
<?php $__env->startSection('description', 'Welcome to Admin Control Panel'); ?>
<?php $__env->startSection('title', 'Move Klang Admin Panel'); ?>
<?php $__env->startPush('css'); ?>
<?php echo $__env->make('admin.layout.forms_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            
            <h4 class="page-title">Manage News Categories</h4>
        </div><!--end page-title-box-->
    </div><!--end col-->
</div>
<div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Edit Category Information</h4>
                <?php if(!empty(session('successmsg'))): ?> <div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                     <?php echo e(session('successmsg')); ?> </div> <?php endif; ?>
            <form method="post" action="<?php echo e(route('news.edit.cat')); ?>" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

            <input type="hidden" name="id" value="<?php echo e($catd->id); ?>">
                <div class="form-group col-lg-12">
                    <div class="col-md-6">
                        <label class="mb-3">Single select</label>
                        <select name="parentcat" id="select2" class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;">
                            <option value="0">Select</option>

                            <?php $__empty_1 = true; $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <option value="<?php echo e($opt->id); ?>" <?php if($catd->parent_id==$opt->id): ?> selected="selected" <?php endif; ?>><?php echo e($opt->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <?php endif; ?>

                        </select>
                    </div> <br>
                    <div class="col-md-6">
                        <label for="exampleInputEmail1">Category Name</label>
                    <input type="text" class="form-control" name="category" value="<?php echo e($catd->name); ?>" placeholder="Enter Category Name">
                    <small class="text-danger"><?php if($errors->has('category')): ?><?php echo e($errors->first('category')); ?><?php endif; ?></small>
                    </div><br>
                    <div class="col-md-6">
                    <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" name="catimg" id="catimg">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
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
<?php echo $__env->make('admin.layout.forms_js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\moveklang\resources\views/admin/pages/news/editcategories.blade.php ENDPATH**/ ?>