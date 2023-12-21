</div>
</div><!-- FOOTER -->
<footer class="footer">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-md-12 col-sm-12 text-center">
                Copyright © 2019 <a href="<?= base_url(); ?>">Matrubhumi</a>. Designed by <a href="https://dktechs.in">DK Technos</a> All rights reserved.
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER CLOSED -->
</div>

<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- JQUERY SCRIPTS -->
<script src="<?= base_url(); ?>template/assets/js/vendors/jquery-3.2.1.min.js"></script>

<!-- BOOTSTRAP SCRIPTS -->
<script src="<?= base_url(); ?>template/assets/js/vendors/bootstrap.bundle.min.js"></script>

<!-- SPARKLINE -->
<script src="<?= base_url(); ?>template/assets/js/vendors/jquery.sparkline.min.js"></script>

<!-- CHART-CIRCLE -->
<script src="<?= base_url(); ?>template/assets/js/vendors/circle-progress.min.js"></script>

<!-- RATING STAR -->
<script src="<?= base_url(); ?>template/assets/plugins/rating/jquery.rating-stars.js"></script>

<!-- C3.JS CHART PLUGIN -->
<script src="<?= base_url(); ?>template/assets/plugins/charts-c3/d3.v5.min.js"></script>
<script src="<?= base_url(); ?>template/assets/plugins/charts-c3/c3-chart.js"></script>

<!-- INPUT MASK PLUGIN-->
<script src="<?= base_url(); ?>template/assets/plugins/input-mask/jquery.mask.min.js"></script>

<!-- SIDE-MENU JS -->
<script src="<?= base_url(); ?>template/assets/plugins/toggle-menu/sidemenu.js"></script>

<!-- CHARTJS CHART -->
<script src="<?= base_url(); ?>template/assets/plugins/chart/Chart.bundle.js"></script>
<script src="<?= base_url(); ?>template/assets/plugins/chart/utils.js"></script>

<!-- PIETYCHART -->
<script src="<?= base_url(); ?>template/assets/plugins/peitychart/jquery.peity.min.js"></script>
<script src="<?= base_url(); ?>template/assets/plugins/peitychart/peitychart.init.js"></script>

<!-- CUSTOM SCROLL BAR JS-->
<script src="<?= base_url(); ?>template/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- CHARTS PLUGIN -->
<script src="<?= base_url(); ?>template/assets/plugins/highcharts/highcharts.js"></script>

<!-- SIDEBAR JS -->
<script src="<?= base_url(); ?>template/assets/plugins/sidebar/sidebar.js"></script>

<!-- INDEX-SCRIPTS -->
<script src="<?= base_url(); ?>template/assets/js/index.js"></script>
<script src="<?= base_url(); ?>template/assets/js/index1.js?2"></script>

<!-- CUSTOM JS-->
<script src="<?= base_url(); ?>template/assets/js/custom.js"></script>

<!-- DATA TABLE -->
<script src="<?= base_url(); ?>template/assets/plugins/datatable/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>template/assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>template/assets/plugins/datatable/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>template/assets/js/tech.js?3"></script>
<!--Export table buttons-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.1/js/buttons.print.min.js"></script>
<script>
    $(document).ready(function() {
        $('#datatable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        });
    });
</script>

</body>

</html>