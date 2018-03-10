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
	->stage('prod')
    ->set('deploy_path', '/srv/prod/{{application}}');
	
// TODO: add build script for dev
//host('dev')
    
// Tasks

//*
task('npm:install', function () {
    run('cd {{release_path}} && npm install');
});

task('npm:prod', function () {
    run('cd {{release_path}} && npm run prod');
});

// Run npm prod
after('deploy:writable', 'npm:install');
after('npm:install', 'npm:prod');
//*/

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');

