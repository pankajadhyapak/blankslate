</div> <!-- /container -->

	<footer>
	<div class="container">
	<div class="row">
  <div class="col-md-3"><?php if ( dynamic_sidebar('footer1') ) : else : endif; ?></div>
  <div class="col-md-3"><?php if ( dynamic_sidebar('footer2') ) : else : endif; ?></div>
  <div class="col-md-3"><?php if ( dynamic_sidebar('footer3') ) : else : endif; ?></div>
  <div class="col-md-3"><?php if ( dynamic_sidebar('footer3') ) : else : endif; ?></div>

</div>
	</div>
	</footer>
<footer style="margin-top:0px; border-top:1px solid #fff;">

<div class="container">
        <p>&copy; Company 2013</p>
		</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" style="color:#000">Login here</h4>
        </div>
        <div class="modal-body">
          <h2>ghjkl</h2>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
</footer>
<?php wp_footer(); ?>
   <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
</body>
</html>