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
add_shortcode( 'tabs', 'tabs' );


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

function tabs(){

	echo "<script>
  $('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
</script>";
	return '<!-- Tabs
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <h1 id="tabs">Togglable tabs <small>tab.js</small></h1>
    </div>

    <h2 id="tabs-examples">Example tabs</h2>
    <p>Add quick, dynamic tab functionality to transition through panes of local content, even via dropdown menus.</p>
    <div class="bs-example bs-example-tabs">
      <ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
        <li><a href="#profile" data-toggle="tab">Profile</a></li>
        <li class="dropdown">
          <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
            <li><a href="#dropdown1" tabindex="-1" data-toggle="tab">@fat</a></li>
            <li><a href="#dropdown2" tabindex="-1" data-toggle="tab">@mdo</a></li>
          </ul>
        </li>
      </ul>
      <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in active" id="home">
          <p>Raw denim you probably havent heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
        </div>
        <div class="tab-pane fade" id="profile">
          <p>Food truck fixie locavore, accusamus mcsweeneys marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
        </div>
        <div class="tab-pane fade" id="dropdown1">
          <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeneys organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably havent heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
        </div>
        <div class="tab-pane fade" id="dropdown2">
          <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
        </div>
      </div>
    </div><!-- /example -->
';


}



?>