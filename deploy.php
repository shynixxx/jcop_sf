<?php
namespace Deployer;

require 'recipe/symfony3.php';

// Project name
set('application', 'jcop_sf');
// Project repository
set('ssh_type', 'native');
set('ssh_multiplexing', false);
set('repository', 'git@github.com:shynixxx/jcop_sf.git');
// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', false);
// Hosts
host('dev2.ylly.fr')
    ->user('ylly')
    ->set('deploy_path', '/var/www/p/circle_ci_test');

after('deploy:failed', 'deploy:unlock');
