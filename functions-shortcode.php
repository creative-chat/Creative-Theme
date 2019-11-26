<?php 

function shortcode($video, $content=null){
    $template=shortcode_atts(
		array(
        	// image_url不能大写
			'video_name1' => '',
			'video_url1' => '',
			'video_name2' => '',
            'video_url2' => ''
		), $video
	);

	return '	
        <div class="menus menus3">
            <ul>
                <div class="bg"></div>
                <li><span>' . $video['video_name1'] . '</span></li>
                <li><span>' . $video['video_name2'] . '</span></li>
            </ul>
            <div class="clear"></div>
            <div class="tab tab2 show">

                <div class="image">

                    <iframe height="480px" src="' . $video['video_url1'] . '" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

                </div>

            </div>
            <div class="tab tab2">

                <div class="image">

                    <iframe frameborder="0" height="498" src="' . $video['video_url2'] . '" allowfullscreen></iframe>

                </div>

            </div>
            
        </div>
		';
	}
add_shortcode('video', 'shortcode');
