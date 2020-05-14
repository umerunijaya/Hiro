
<?php $__env->startSection('description', 'Welcome to Admin Control Panel'); ?>
<?php $__env->startSection('title', 'Add New Company | Move Klang Admin Panel'); ?>
<?php $__env->startPush('css'); ?>
<?php echo $__env->make('admin.layout.forms_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            
            <h4 class="page-title">Add New Company</h4>
        </div><!--end page-title-box-->
    </div><!--end col-->
</div>
<div class="container-fluid">
    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Basic Information</h4>
                                    <?php if(!empty(session('successmsg'))): ?> <div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <?php echo e(session('successmsg')); ?> </div> <?php endif; ?>
                                    <p></p>
                                <form method="post" action="<?php echo e(route('companies.addpost')); ?>" enctype="multipart/form-data">
                                    <?php echo e(csrf_field()); ?>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="username">Company Name</label>
                                                    <input type="text" name="companyname" class="form-control" value="<?php echo e(old('companyname')); ?>" id="username" required>
                                                    <?php if(!empty($errors->first('companyname'))): ?> <span class="text-danger"><?php echo e($errors->first('companyname')); ?></span> <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="useremail">Email address</label>
                                                    <input type="email" name="email" value="<?php echo e(old('email')); ?>"  class="form-control" id="useremail" required>
                                                    <?php if(!empty($errors->first('email'))): ?> <span class="text-danger"><?php echo e($errors->first('email')); ?></span> <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="subject">Company Address</label>
                                                    <input type="text" name="companyaddress" value="<?php echo e(old('companyaddress')); ?>"  class="form-control" id="subject" required>
                                                    <?php if(!empty($errors->first('companyaddress'))): ?> <span class="text-danger"><?php echo e($errors->first('companyaddress')); ?></span> <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="subject">primary Contact #</label>
                                                    <input type="text" name="companycontact" value="<?php echo e(old('companycontact')); ?>"  class="form-control" id="subject" required>
                                                    <?php if(!empty($errors->first('companycontact'))): ?> <span class="text-danger"><?php echo e($errors->first('companycontact')); ?></span> <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">                            
                                                <div class="form-group">
                                                    <label for="message">Description</label>
                                                    <textarea class="form-control" name="description" rows="5" id="message"><?php echo e(old('description')); ?></textarea>
                                                    <?php if(!empty($errors->first('description'))): ?> <span class="text-danger"><?php echo e($errors->first('description')); ?></span> <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">                            
                                                <div class="form-group">
                                                    <label for="message">Website Links</label>
                                                    <textarea name="weblinks" class="form-control" rows="5" id="message"><?php echo e(old('weblinks')); ?></textarea>
                                                    <?php if(!empty($errors->first('weblinks'))): ?> <span class="text-danger"><?php echo e($errors->first('weblinks')); ?></span> <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">                            
                                                <div class="form-group">
                                                    <label for="message">Categories</label>
                                                    <select name="categories[]" class="select2 mb-3 select2-multiple" style="width: 100%" multiple="multiple" data-placeholder="Choose" required>
                                                       <?php $__empty_1 = true; $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    <optgroup label="<?php echo e($cat->name); ?>">
                                                        <?php $__empty_2 = true; $__currentLoopData = $cat->subCats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                                                    <option value="<?php echo e($subcat->id); ?>"><?php echo e($subcat->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                                                        <?php endif; ?>
                                                        </optgroup> 
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                        <?php endif; ?>
                                                    </select> 
                                                    <?php if(!empty($errors->first('categories'))): ?> <span class="text-danger"><?php echo e($errors->first('categories')); ?></span> <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">                            
                                                <div class="form-group">
                                                    <label for="message">Locations</label>
                                                    <select name="locations[]" class="select2 mb-3 select2-multiple" style="width: 100%" multiple="multiple" data-placeholder="Choose" required>
                                                       <?php $__empty_1 = true; $__currentLoopData = $locs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    <optgroup label="<?php echo e($loc->name); ?>">
                                                        <?php $__empty_2 = true; $__currentLoopData = $loc->subLocs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subloc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                                                    <option value="<?php echo e($subloc->id); ?>"><?php echo e($subloc->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                                                        <?php endif; ?>
                                                        </optgroup> 
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                        <?php endif; ?>
                                                    </select> 
                                                    <?php if(!empty($errors->first('categories'))): ?> <span class="text-danger"><?php echo e($errors->first('categories')); ?></span> <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="useremail">FB Messenger</label>
                                                    <input type="text" name="messenger" value="<?php echo e(old('messenger')); ?>"  class="form-control" id="useremail" required>
                                                    <?php if(!empty($errors->first('messenger'))): ?> <span class="text-danger"><?php echo e($errors->first('messenger')); ?></span> <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="useremail">Whatsapp</label>
                                                    <input type="text" name="whatsapp" value="<?php echo e(old('whatsapp')); ?>"  class="form-control" id="useremail" required>
                                                    <?php if(!empty($errors->first('whatsapp'))): ?> <span class="text-danger"><?php echo e($errors->first('whatsapp')); ?></span> <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">                            
                                                <div class="form-group">
                                                    <div class="custom-file mb-3">
                                                        <input type="file" name="companylogo" class="custom-file-input">
                                                        <label class="custom-file-label" for="customFile">Company Logo</label>
                                                        <?php if(!empty($errors->first('companylogo'))): ?> <span class="text-danger"><?php echo e($errors->first('companylogo')); ?></span> <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">                            
                                                <div class="form-group">
                                                    <div class="custom-file mb-3">
                                                        <input name="featuredimage" type="file" class="custom-file-input" required>
                                                        <label class="custom-file-label" for="customFile">Featured Image</label>
                                                        <?php if(!empty($errors->first('featuredimage'))): ?> <span class="text-danger"><?php echo e($errors->first('featuredimage')); ?></span> <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">                            
                                                <div class="form-group">
                                                    <label for="message">Business Types</label>
                                                    <select name="businesstype[]" class="select2 mb-3 select2-multiple" style="width: 100%" multiple="multiple" data-placeholder="Choose" required>
                                                       <?php $__empty_1 = true; $__currentLoopData = $btypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $btype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    <option value="<?php echo e($btype->id); ?>"><?php echo e($btype->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                        <?php endif; ?>
                                                    </select> 
                                                    <?php if(!empty($errors->first('businesstype'))): ?> <span class="text-danger"><?php echo e($errors->first('businesstype')); ?></span> <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <br>Note: All Social Links are optionals you can leave empty<br><br>
                                            <div class="clearfix"></div>
                                        <div class="row">
                                            
                                            <div class="col-md-4">
                                                
                                                <div class="form-group">
                                                    <label for="useremail">Facebook Link</label>
                                                    <input type="text" name="fblink" value="<?php echo e(old('fblink')); ?>"  class="form-control" id="useremail" required>
                                                    <?php if(!empty($errors->first('fblink'))): ?> <span class="text-danger"><?php echo e($errors->first('fblink')); ?></span> <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="useremail">Twitter</label>
                                                    <input type="text" name="twitter" value="<?php echo e(old('twitter')); ?>"  class="form-control" id="useremail" required>
                                                    <?php if(!empty($errors->first('twitter'))): ?> <span class="text-danger"><?php echo e($errors->first('twitter')); ?></span> <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="useremail">Instagram</label>
                                                    <input type="text" name="instagram" value="<?php echo e(old('instagram')); ?>"  class="form-control" id="useremail" required>
                                                    <?php if(!empty($errors->first('instagram'))): ?> <span class="text-danger"><?php echo e($errors->first('instagram')); ?></span> <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="useremail">Youtube</label>
                                                    <input type="text" name="youtube" value="<?php echo e(old('youtube')); ?>"  class="form-control" id="useremail" required>
                                                    <?php if(!empty($errors->first('youtube'))): ?> <span class="text-danger"><?php echo e($errors->first('youtube')); ?></span> <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="useremail">Linkedin</label>
                                                    <input type="text" name="linkedin" value="<?php echo e(old('linkedin')); ?>"  class="form-control" id="useremail" required>
                                                    <?php if(!empty($errors->first('linkedin'))): ?> <span class="text-danger"><?php echo e($errors->first('linkedin')); ?></span> <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="useremail">Pintrest</label>
                                                    <input type="text" name="pintrest" value="<?php echo e(old('pintrest')); ?>"  class="form-control" id="useremail" required>
                                                    <?php if(!empty($errors->first('pintrest'))): ?> <span class="text-danger"><?php echo e($errors->first('pintrest')); ?></span> <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="useremail">Thumbler</label>
                                                    <input type="text" name="thumbler" value="<?php echo e(old('thumbler')); ?>"  class="form-control" id="useremail" required>
                                                    <?php if(!empty($errors->first('thumbler'))): ?> <span class="text-danger"><?php echo e($errors->first('thumbler')); ?></span> <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="useremail">Google+</label>
                                                    <input type="text" name="googleplus" value="<?php echo e(old('googleplus')); ?>"  class="form-control" id="useremail" required>
                                                    <?php if(!empty($errors->first('googleplus'))): ?> <span class="text-danger"><?php echo e($errors->first('googleplus')); ?></span> <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 text-center">
                                                <button type="submit" class="btn btn-gradient-primary px-5 py-2">Add Company</button>
                                            </div>
                                        </div>
                                    </form>
                                </div><!--end card-body-->
                            </div><!--end card-->
                    </div> <!-- end row --> 
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<?php echo $__env->make('admin.layout.forms_js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\moveklang\resources\views/admin/pages/company/addcompany.blade.php ENDPATH**/ ?>