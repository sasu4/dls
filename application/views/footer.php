

<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                &copy; 2015 <a target="_blank" href="http://teacher.sk/" title="Implementácia e-learningových riešení">Teacher.sk</a>.
                All Rights Reserved. Design by
                <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>
            </div>
            <div class="col-lg-6">
                <ul class="pull-right">
                    <li><a href="#">Domov</a></li>
                    <li><a href="#">O nás</a></li>
                    <li><a href="#">Kontakt</a></li>
                    <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                </ul>
            </div>
        </div>
    </div>
</footer><!--/#footer-->

<script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.prettyPhoto.js') ?>"></script>
<script src="<?php echo base_url('assets/js/main.js') ?>"></script>
<script src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                //responsive: true;
                language: {
                    "url": "//cdn.datatables.net/plug-ins/1.10.8/i18n/Slovak.json"
                }
        });
    });
</script>
</body>
</html>