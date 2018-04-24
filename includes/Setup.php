<?php


class Setup
{
    public function __construct($arguments)
    {
        $this->plugins = $arguments['plugins'];
        $this->activate_plugin();
    }

    public function activate_plugin()
    {
        foreach ($this->plugins as $plugin) {
            $result = $this->run_activate_plugin($plugin);
            if (is_wp_error($result)) {
                echo $result->get_error_message();die;
            }
        }
    }

    public function run_activate_plugin($plugin)
    {
        $current = get_option('active_plugins');
        $plugin = plugin_basename(trim($plugin));

        if (!in_array($plugin, $current)) {
            $current[] = $plugin;
            sort($current);
            do_action('activate_plugin', trim($plugin));
            update_option('active_plugins', $current);
            do_action('activate_'.trim($plugin));
            do_action('activated_plugin', trim($plugin));
        }

        return;
    }
}
