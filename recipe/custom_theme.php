<?php

namespace Deployer;

desc( 'Updates remote assets with local assets, but without deleting previous assets on destination' );
task( 'custom_theme:upload_assets_only', function () {
    upload("{{local_root}}/{{theme_path}}/", "{{release_path}}/{{theme_path}}");
} );

desc( 'Builds assets and uploads them on remote server' );
task( 'push:custom_theme', [
    'custom_theme:upload_assets_only',
] );
