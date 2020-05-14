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
$("input#sort").bind('change', function(){
    var csrf = $('meta[name="_token"]').attr('content');
    var id = $(this).attr('data');
    var sort = $(this).val();
    $.post("<?php echo e(route('slidersort')); ?>", {_token:csrf,id:id,sort:sort}, function(data){
        console.log(data);
    });
})
</script><?php /**PATH C:\xampp\htdocs\moveklang\resources\views/admin/layout/forms_js.blade.php ENDPATH**/ ?>