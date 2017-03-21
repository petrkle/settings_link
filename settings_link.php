<?php

class settings_link extends rcube_plugin
{
	function init()
	{
		$rcmail = rcube::get_instance();
		$this->load_config('config.inc.php.dist');
		$this->load_config('config.inc.php');
		$rcmail->output->set_env('settings_link_url', $rcmail->config->get('settings_link_url'));

		if ($rcmail->output->type == 'html') {
			$this->include_script('settings_link.js');
		}
	}
}
