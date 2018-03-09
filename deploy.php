<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'infusionx');

// Project repository
set('repository', 'git@github.com:XanderLuciano/infusionx.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true); 

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server 
add('writable_dirs', []);


// Hosts

host('infusionx')
    ->set('deploy_path', '/srv/prod/{{application}}');    
    
// Tasks

task('deploy:composer', function () {
    run('cd {{release_path}} && composer install');
});

/*task('build', function () {
    run('cd {{release_path}} && build');
});

// Update Composer
after('deploy:writable', 'deploy:composer');
*/

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

//before('deploy:symlink', 'artisan:migrate');

