        <script src="<?php echo e(asset('public/admin/assets/js/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/admin/assets/js/jquery-ui.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/admin/assets/js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/admin/assets/js/metismenu.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/admin/assets/js/waves.js')); ?>"></script>
        <script src="<?php echo e(asset('public/admin/assets/js/feather.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/admin/assets/js/jquery.slimscroll.min.js')); ?>"></script> 

        <script src="<?php echo e(asset('public/admin/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/admin/plugins/datatables/dataTables.bootstrap4.min.js')); ?>"></script>
        <!-- Buttons examples -->
        <script src="<?php echo e(asset('public/admin/plugins/datatables/dataTables.buttons.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/admin/plugins/datatables/buttons.bootstrap4.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/admin/plugins/datatables/jszip.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/admin/plugins/datatables/pdfmake.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/admin/plugins/datatables/vfs_fonts.js')); ?>"></script>
        <script src="<?php echo e(asset('public/admin/plugins/datatables/buttons.html5.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/admin/plugins/datatables/buttons.print.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/admin/plugins/datatables/buttons.colVis.min.js')); ?>"></script>
        <!-- Responsive examples -->
        <script src="<?php echo e(asset('public/admin/plugins/datatables/dataTables.responsive.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/admin/plugins/datatables/responsive.bootstrap4.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/admin/assets/pages/jquery.datatable.init.js')); ?>"></script>

        <script src="<?php echo e(asset('public/admin/assets/js/app.js')); ?>"></script>

        <script>
                $("button#edittype").bind('click', function(){
                        $("#result").empty();
                    var csrf = $('meta[name="_token"]').attr('content');
                    var id = $(this).attr('data');
                    var type = $("input#type"+id).val();
                    $.post("<?php echo e(route('editbusinessnature')); ?>", {_token:csrf,id:id,type:type}, function(data){
                       $("#result").html(data);
                    })
                });
        </script><?php /**PATH C:\xampp\htdocs\moveklang\resources\views/admin/layout/datatable_js.blade.php ENDPATH**/ ?>