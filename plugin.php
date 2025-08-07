<?php

/**
 * Plugin Name: Stoic Striders Custom Elements
 * Plugin URI: https://stoicstriders.com/
 * Description: Storing Stoic Striders custom elements.
 * Author: Stoic Striders
 * Author URI: https://stoicstriders.com/
 * License: GPLv2
 * Text Domain: breakdance
 * Domain Path: /languages/
 * Version: 0.0.1
 */

namespace StoicStridersCustomElements;

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

add_action('breakdance_loaded', function () {
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/elements',
        'StoicStridersCustomElements',
        'element',
        'Stoic Elements',
        false
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/macros',
        'StoicStridersCustomElements',
        'macro',
        'Stoic Custom Macros',
        false,
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/presets',
        'StoicStridersCustomElements',
        'preset',
        'Stoic Custom Presets',
        false,
    );
},
    // register elements before loading them
    9
);
