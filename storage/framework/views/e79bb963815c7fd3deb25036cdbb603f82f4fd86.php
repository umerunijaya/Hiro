
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
                <h4 class="mt-0 header-title">Add New Category</h4>
                <?php if(!empty(session('successmsg'))): ?> <div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                     <?php echo e(session('successmsg')); ?> </div> <?php endif; ?>
            <form method="post" action="<?php echo e(route('news.add.cat')); ?>" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                <div class="col-md-6">
                <div class="form-group col-lg-12">
                        <label class="mb-3">Single select</label>
                        <select name="parentcat" class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;">
                            <option value="0">Select</option>
                            <?php $__empty_1 = true; $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <option value="<?php echo e($opt->id); ?>"><?php echo e($opt->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <?php endif; ?>

                        </select>
                    </div> 
                </div>
                    <div class="col-md-6">
                        <div class="form-group col-lg-12">
                        <label for="exampleInputEmail1">Category Name</label>
                        <input type="text" class="form-control" name="category" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category Name">
                    <small class="text-danger"><?php if($errors->has('category')): ?><?php echo e($errors->first('category')); ?><?php endif; ?></small>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group col-lg-12">
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

    <?php $__empty_1 = true; $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <?php if(!empty($cat->logo)): ?> <img class="float-left" width="48px" src="<?php echo e(url('public/assets/catimages')); ?>/<?php echo e($cat->logo); ?>"> <?php endif; ?> 
            <div class="float-left col-md-8">
                <h4 class="mt-0 header-title"><a class="btn btn-danger btn-block" data-toggle="collapse" href="#collapse<?php echo e($key); ?>" role="button" aria-expanded="false" aria-controls="collapse<?php echo e($key); ?>"><?php echo e($cat->name); ?></a></h4></div>
                
            <div class="float-right"><a href="<?php echo e(route('edit.news.categories', [$cat->id])); ?>"><i class="mdi mdi-pencil-outline"></i></a> <a onclick="return confirm('Are you sure to delete? It will delete sub categories as well')" href="<?php echo e(route('delete.news.categories', [$cat->id])); ?>"><i class="mdi mdi-trash-can-outline"></i></a>
                
                </div>
                    <div class="clearfix"></div>
                <?php $__empty_2 = true; $__currentLoopData = $cat->subCats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
            <div class="col-lg-12 collapse" id="collapse<?php echo e($key); ?>">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-left"><h4 class="mt-0 header-title"><?php if(!empty($subcat->logo)): ?> <img width="48px" src="<?php echo e(url('public/assets/catimages')); ?>/<?php echo e($subcat->logo); ?>"> <?php endif; ?> <?php echo e($subcat->name); ?></h4></div>
                            <div class="float-right"><a href="<?php echo e(route('edit.news.categories', [$subcat->id])); ?>"><i class="mdi mdi-pencil-outline"></i></a> <a href="<?php echo e(route('delete.news.categories', [$subcat->id])); ?>" onclick="return confirm('Are you sure to delete?')"><i class="mdi mdi-trash-can-outline"></i></a></div>
                        </div>
                    </div>
                </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                <?php endif; ?>
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <?php endif; ?>


</div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<?php echo $__env->make('admin.layout.forms_js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\moveklang\resources\views/admin/pages/news/category.blade.php ENDPATH**/ ?>