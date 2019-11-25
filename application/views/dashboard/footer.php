            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> &copy; 2019 - IMK </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    
    
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/ample/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/ample/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/ample/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo base_url(); ?>assets/ample/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>assets/ample/js/waves.js"></script>
    <script src="<?php echo base_url(); ?>assets/ample/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <script src="<?php echo base_url(); ?>assets/ample/js/toastr.js"></script>
    <!-- Sweet-Alert  -->
    <script src="<?php echo base_url(); ?>assets/ample/plugins/bower_components/sweetalert/sweetalert.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/ample/plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/ample/js/custom.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/ample/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
<!--
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
-->
    <!-- end - This is for export functionality only -->
    
    
    <script>
//    $(document).ready(function() {
//        $('#myTable').DataTable();
//        $(document).ready(function() {
//            var table = $('#example').DataTable({
//                "columnDefs": [{
//                    "visible": false,
//                    "targets": 2
//                }],
//                "order": [
//                    [2, 'asc']
//                ],
//                "displayLength": 25,
//                "drawCallback": function(settings) {
//                    var api = this.api();
//                    var rows = api.rows({
//                        page: 'current'
//                    }).nodes();
//                    var last = null;
//                    api.column(2, {
//                        page: 'current'
//                    }).data().each(function(group, i) {
//                        if (last !== group) {
//                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
//                            last = group;
//                        }
//                    });
//                }
//            });
//            // Order by the grouping
//            $('#example tbody').on('click', 'tr.group', function() {
//                var currentOrder = table.order()[0];
//                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
//                    table.order([2, 'desc']).draw();
//                } else {
//                    table.order([2, 'asc']).draw();
//                }
//            });
//        });
//    });
//    $('#example23').DataTable({
//        dom: 'Bfrtip',
//        buttons: [
//            'copy', 'csv', 'excel', 'pdf', 'print'
//        ]
//    });
    </script>
    <!--Style Switcher -->
    <script src="<?php echo base_url(); ?>assets/ample/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>

