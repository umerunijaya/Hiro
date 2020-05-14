
<?php $__env->startSection('description', 'Welcome to Admin Control Panel'); ?>
<?php $__env->startSection('title', 'Move Klang Admin Panel'); ?>
<?php $__env->startPush('css'); ?>
<?php echo $__env->make('admin.layout.forms_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            
            <h4 class="page-title">Edit News & Promotions</h4>
        </div><!--end page-title-box-->
    </div><!--end col-->
</div>
<div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="float-left"><h4 class="mt-0 header-title">Edit Information of  News & Poromotion</h4></div>
            <div class="float-right"><a href="<?php echo e(route('companies.details',[$data->company_id])); ?>" class="btn btn-primary">Back</a></div>
                <br>
                <div class="clearfix"></div>
                <?php if(!empty(session('successmsg'))): ?> <div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                     <?php echo e(session('successmsg')); ?> </div> <?php endif; ?>
                <form method="post" action="<?php echo e(route('companies.details.editpost')); ?>" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                     <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="username">News Title</label>
                            <input type="text" name="title" class="form-control" value="<?php echo e($data->title); ?>" id="username" required>
                            <?php if(!empty($errors->first('title'))): ?> <span class="text-danger"><?php echo e($errors->first('title')); ?></span> <?php endif; ?>
                        </div>
                    </div>
    
                        <div class="custom-file mb-3">
                            <?php if(!empty($data->featured_image)): ?>
                                <img src="<?php echo e(url('public/assets/featuredimages')); ?>/<?php echo e($data->featured_image); ?>" width="200"alt="">
                            <?php endif; ?>
                            <input type="file" class="custom-file-input" name="featuredimg">
                            <input type="hidden" name="oldimage" value="<?php echo e($data->featured_image); ?>">
                            <label class="custom-file-label" for="customFile">Choose Featured Image</label>
                        </div>
                        <div class="col-md-12">
                            <label>Description</label>
                        <textarea id="elm1" name="description"><?php echo e($data->description); ?></textarea>
                        </div>
                        <br>
                        <div class="col-md-12">                            
                            <div class="form-group">
                                <label for="message">Categories</label>
                                <select name="categories" class="select2 mb-3 select2-multiple" style="width: 100%"  data-placeholder="Choose" required>
                                   <?php $__empty_1 = true; $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <optgroup label="<?php echo e($cat->name); ?>">
                                    <?php $__empty_2 = true; $__currentLoopData = $cat->subCats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                                <option value="<?php echo e($subcat->id); ?>" <?php if($data->id == $subcat->id): ?> selected="selected" <?php endif; ?>><?php echo e($subcat->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                                    <?php endif; ?>
                                    </optgroup> 
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <?php endif; ?>
                                </select> 
                                <?php if(!empty($errors->first('categories'))): ?> <span class="text-danger"><?php echo e($errors->first('categories')); ?></span> <?php endif; ?>
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
<script src="<?php echo e(asset('public/admin/plugins/tinymce/tinymce.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin/assets/pages/jquery.form-editor.init.js')); ?>"></script> 
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\moveklang\resources\views/admin/pages/company/editnews.blade.php ENDPATH**/ ?>