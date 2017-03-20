<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<script type="text/javascript" src="<?= base_url('/') ?>assets/js/jquery-3.2.0.min.js"></script>
	<script type="text/javascript" src="<?= base_url('/') ?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= base_url('/') ?>assets/js/custom.js"></script>
	<script>
		// Get array of classes without jQuery
		var array = <?= json_encode($a) ?>;
		var brray = <?= json_encode($b) ?>;
		var crray = <?= json_encode($c) ?>;
		var drray = <?= json_encode($d) ?>;
		var erray = <?= json_encode($e) ?>;
		var frray = <?= json_encode($f) ?>;
	</script>

		<!-- Footer -->
    <footer>
    	<hr>
        <div class="row">
            <div class="col-lg-12">
                <p>Desenvolvido por <a href="mailto:gustavorpaiva@gmail.com">Gustavo Paiva</a></p>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </footer>

    </div>
    <!-- main container -->

	</body>

</html>