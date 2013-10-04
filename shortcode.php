<?php 

add_shortcode( 'six', 'six' );
add_shortcode( 'four', 'four' );
add_shortcode( 'eight', 'eight' );
add_shortcode( 'one', 'one' );
add_shortcode( 'blockquote', 'blockquote' );
add_shortcode( 'button', 'button' );
add_shortcode( 'image', 'image' );
add_shortcode( 'alert', 'alert' );
add_shortcode( 'progressbar', 'progressbar' );
add_shortcode( 'modal', 'modal' );


function six( $atts, $content="" ) {
 	if (!isset($atts['title'])) {
        $r = '<div class="col-md-6">'. $content.'</div>';
        }else{
        $r = '<div class="col-md-6"><h3>'.$atts['title'].'</h3>'. $content.'</div>';
}
     return $r;
}


function four( $atts, $content="" ) {
 	if (!isset($atts['title'])) {
        $r = '<div class="col-md-4">'. $content.'</div>';
        }else{
        $r = '<div class="col-md-4"><h3>'.$atts['title'].'</h3>'. $content.'</div>';
}
     return $r;
}


function eight( $atts, $content="" ) {
 	if (!isset($atts['title'])) {
        $r = '<div class="col-md-8">'. $content.'</div>';
        }else{
        $r = '<div class="col-md-8"><h3>'.$atts['title'].'</h3>'. $content.'</div>';
}
     return $r;
}


function one( $atts, $content="" ) {
 	if (!isset($atts['title'])) {
        $r = '<div class="col-md-1">'. $content.'</div>';
        }else{
        $r = '<div class="col-md-1"><h3>'.$atts['title'].'</h3>'. $content.'</div>';
}
     return $r;
}

function blockquote( $atts, $content="" ) {
 	if (!isset($atts['by'])) {
 		$r = '<blockquote>
  <p>'.$content.'</p>
</blockquote>';
        }else{
        $r = '<blockquote>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  <small><cite title="'.$atts['by'].'">'.$atts['by'].'</cite></small>
</blockquote>';
}
     return $r;
}

// // blockquote
// // ollist
// // lilist

function button( $atts, $content=""){
	if(isset($atts['modal'])){$m = 'data-toggle="modal"';}else{$m = '';}
	if(!isset($atts['type'])){$atts['type'] = 'button';}
	if(!isset($atts['style'])){$atts['style'] = 'btn-primary';}else{
		if ($atts['style'] == 'default') {	$atts['style'] = "btn-default";}
		if ($atts['style'] == 'success') {	$atts['style'] = "btn-success";}
		if ($atts['style'] == 'info') {	$atts['style'] = "btn-info";}
		if ($atts['style'] == 'warning') {	$atts['style'] = "btn-warning";}
		if ($atts['style'] == 'danger') {	$atts['style'] = "btn-danger";}
		if ($atts['style'] == 'link') {	$atts['style'] = "btn-link";}
	}

	if(!isset($atts['type'])){$atts['size'] = '';}else{
		if ($atts['size'] == 'large') {	$atts['size'] = "btn-lg";}
		if ($atts['size'] == 'small') {	$atts['size'] = "btn-sm";}
		if ($atts['size'] == 'xsmall') {	$atts['size'] = "btn-xs";}
	}
	if(!isset($atts['href'])){$atts['href']="";}
return	'<button '.$m.' href="'.$atts['href'].'" type="'.$atts['type'].'" class="btn '.$atts['style'].' '.$atts['size'].'">'.$content.'</button>';

}

function image( $atts, $content="" ) {
if(!isset($atts['src'])){$content = 'Pls Provide the Image Src';}
	if(!isset($atts['style'])){$atts['style'] = 'img-rounded';}else{
		if ($atts['style'] == 'circle') {	$atts['style'] = "img-circle";}
		if ($atts['style'] == 'thumbnail') {	$atts['style'] = "img-thumbnail";}
	}
return	'<img src="'.$atts['src'].'" alt="'.$content.'" class="'.$atts['style'].'">';
}


// 
function alert( $atts, $content="" ) {
	if(!isset($atts['type'])){$atts['style'] = 'alert-success';}else{
		if ($atts['style'] == 'info') {	$atts['style'] = "alert-info";}
		if ($atts['style'] == 'wraning') {	$atts['style'] = "alert-warning";}
		if ($atts['style'] == 'danger') {	$atts['style'] = "alert-danger";}
	}

	
return	'<div class="alert '.$atts['style'].'">'.$content.'</div>';
}

function progressbar( $atts, $content=""){
	if(!isset($atts['per'])){$atts['per'] = "100";}
	if(!isset($atts['style'])){$atts['style'] = '';}else{
		if ($atts['style'] == 'sucess') {	$atts['style'] = "progress-bar-success";}
		if ($atts['style'] == 'info') {	$atts['style'] = "progress-bar-info";}
		if ($atts['style'] == 'warning') {	$atts['style'] = "progress-bar-warning";}
		if ($atts['style'] == 'danger') {	$atts['style'] = "progress-bar-danger";}
		if ($atts['style'] == 'link') {	$atts['style'] = "btn-link";}
	}

		if((!isset($atts['striped']) )|| ($atts['striped'] == "no")){$atts['striped'] = "";}else{$atts['striped'] = "progress-striped";}
		if((!isset($atts['live']) )|| ($atts['live'] == "no")){$atts['live'] = "";}else{$atts['live'] = "active";}

return '<div class="progress '.$atts['striped'].' '.$atts['live'].'">
  <div class="progress-bar  '.$atts['style'].'" role="progressbar" aria-valuenow="'.$atts['per'].'%" aria-valuemin="0" aria-valuemax="100" style="width: '.$atts['per'].'%;">
  </div>
</div>';
}

function modal($atts ,$content=""){
	if(!isset($atts['id'])){$atts['id'] = "myModal";}
	if(!isset($atts['title'])){$atts['title'] = "Modal Title";}
	if(!isset($atts['id'])){$atts['id'] = "myModal";}
	if(!isset($atts['btn1'])){$atts['btn1'] = "Close";}
	if(!isset($atts['btn2'])){$atts['btn2'] = "Save Changes";}


return	'<div class="modal fade" id="'.$atts['id'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">'.$atts['title'].'</h4>
        </div>
        <div class="modal-body">
          '.$content.'
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">'.$atts['btn1'].'</button>
          <button type="button" class="btn btn-primary">'.$atts['btn2'].'</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->';
}





?>