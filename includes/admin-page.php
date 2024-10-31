<?php
function rb_options_page() {

	global $rb_options;

	ob_start(); ?>

	<div class="wrap">
		<h2>Twitter To Me</h2>

		<form method="post" action="options.php">

			<?php settings_fields('rb_settings_group'); ?>

			<h3><?php _e('Enable', 'rb_domain'); ?></h3>
			<p>
				<input id="rb_settings[enable_plugin]" name="rb_settings[enable_plugin]" type="checkbox" value="1" <?php checked('1', $rb_options['enable_plugin']); ?> />
				<label class="description" for="rb_settings[enable_plugin]"><?php _e('Enable plugin', 'rb_domain'); ?></label>
			</p>
			<p>
				<input id="rb_settings[enable_home]" name="rb_settings[enable_home]" type="checkbox" value="1" <?php checked('1', $rb_options['enable_home']); ?> />
				<label class="description" for="rb_settings[enable_home]"><?php _e('Show plugin only on homepage', 'rb_domain'); ?></label>
			</p>

			<h3><?php _e('Title', 'rb_domain'); ?></h3>
			<p>
				<input id="rb_settings[title] title" name="rb_settings[title]" type="text" value="<?php echo $rb_options['title']; ?>"/>
			</p>

			<h3><?php _e('Content', 'rb_domain'); ?></h3>
			<p>
				<?php wp_editor($rb_options['content'], $editor_id = 'rb_settings[content]', $prev_id = 'title', $media_buttons = true, $tab_index = 2) ?>
			</p>
			
			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e('Save Options', 'rb_domain'); ?>" />
			</p>
		</form>
	</div>
	<?php
	echo ob_get_clean();
}

function rb_add_options_link() {
	add_options_page('Reveal Box', 'Reveal Box', 'manage_options', 'rb-options',  'rb_options_page');
}
add_action('admin_menu', 'rb_add_options_link');

function rb_register_settings() {
	register_setting('rb_settings_group', 'rb_settings');
}
add_action('admin_init', 'rb_register_settings');