
<?php $__env->startSection('description', 'Welcome to Admin Control Panel'); ?>
<?php $__env->startSection('title', 'Add New Company | Move Klang Admin Panel'); ?>
<?php $__env->startPush('css'); ?>
<?php echo $__env->make('admin.layout.datatable_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Datatable</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">All Companies</h4>
                <p class="text-muted mb-3">
                </p>
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Location</th>
                        <th>Category</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $comps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                        <td><?php echo e($comp->company_name); ?></td>
                        <td><?php echo e($comp->primary_email); ?></td>
                        <td><?php $__currentLoopData = json_decode($comp->locations); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e(\App\Location::getLocationName($loc)); ?> , <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>
                        <td><?php $__currentLoopData = json_decode($comp->categories); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e(\App\NewsCategory::getCategoryName($cat)); ?> , <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>
                        <td><?php echo e($comp->primary_phone); ?></td>
                        <td><a title="Edit company information" href="<?php echo e(route('companies.edit',[$comp->id])); ?>" class="btn btn-primary"><i class="ti-pencil"></i></a> 
                        <a href="<?php echo e(route('companies.details', [$comp->id])); ?>" title="Check news and promotion of this company" class="btn btn-info"><i class="ti ti-rss-alt"></i></a>
                            <?php if($comp->status == 1): ?> <a title="Deactivate the company" href="<?php echo e(route('companies.deactivate',[$comp->id])); ?>" class="btn btn-danger btn-small"><i class="ti ti-close"></i></a><?php else: ?> 
                        <a title="Activate the company" href="<?php echo e(route('companies.activate',[$comp->id])); ?>" class="btn btn-primary btn-small"><i class="ti ti-check-box"></i></a> <?php endif; ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            
                        <?php endif; ?>
                    </tbody>
                </table>        
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<?php echo $__env->make('admin.layout.datatable_js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\moveklang\resources\views/admin/pages/company/companylist.blade.php ENDPATH**/ ?>