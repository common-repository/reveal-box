<?php
function rb_add_content($content) {

	global $rb_options;

	if ($rb_options['enable_plugin'] == true) {
		if ($rb_options['enable_home'] == true) {
			if (is_home()) {
				$modal = '<div class="plugin-modal"><a href="#" data-reveal-id="myModal"><img src="'. plugin_dir_url(__FILE__) . 'img/plus.png" alt="modal" width="32"></a></div>';
				$modalbox = "<div id=\"myModal\" class=\"reveal-modal\">".
		     					"<h2>" . $rb_options['title'] . "</h2>".
		     					"<p>" . nl2br($rb_options['content']) . "</p>".
		     					"<a class=\"close-reveal-modal\">&#215;</a>".
							"</div>";

				$content .= $modal;
				$content .= $modalbox;	
			}
		}
		else {
			$modal = '<div class="plugin-modal"><a href="#" data-reveal-id="myModal"><img src="'. plugin_dir_url(__FILE__) . 'img/plus.png" alt="modal" width="32"></a></div>';
			$modalbox = "<div id=\"myModal\" class=\"reveal-modal\">".
	     					"<h2>" . $rb_options['title'] . "</h2>".
	     					"<p>" . nl2br($rb_options['content']) . "</p>".
	     					"<a class=\"close-reveal-modal\">&#215;</a>".
						"</div>";

			$content .= $modal;
			$content .= $modalbox;
		}
	}
	return $content;

}
add_filter('the_content', 'rb_add_content');