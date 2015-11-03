<?php

//add shortcode for the Support form and list the data in backend
add_shortcode('support_form', 'display_support_form');

function display_support_form($atts,  $content = '')
{
	$args = shortcode_atts(
		array(
			'form_title' => 'Click Me',
			'heading' => 'Enter Your Heading Here.',
			'id' => 1,
			'title' => 'false',
			'description' => 'false'
			), $atts
		);

	$r =  ' <a href="#modal-one" class="symple-button large blue btn btn-big" title="'.$args['form_title'].'" style="border-radius:3px"><span class="symple-button-inner" style="border-radius:3px">'.$args['form_title'].'</span></a>';
	$r .= '<div class="modal" id="modal-one" aria-hidden="true">
		  	<div class="modal-dialog">
		    <div class="modal-header">
		      <h2>'.$args['heading'].'</h2>
		      <a href="#close" class="btn-close" aria-hidden="true">×</a> 
		    </div>
		    <div class="modal-body">';
	$r .= do_shortcode('[gravityform id="'.$args['id'].'" title="'.$args['title'].'" description="'.$args['description'].'"]');
	$r .= '</div>
		    <div class="modal-footer"><a href="#close" class="btn">Close</a> 
		    </div>
		    </div>
		 	 </div>
			</div>';

	return $r;
}