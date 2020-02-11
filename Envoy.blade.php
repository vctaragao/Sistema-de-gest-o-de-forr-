@servers(['web' => 'deployer@206.189.216.247'])

@setup
$repository = 'git@gitlab.com:vct.aragao/Sistema-de-gestao-forro.git';
$releases_dir = '/var/www/sigf/releases';
$app_dir = '/var/www/sigf';
$release = date('YmdHis');
$new_release_dir = $releases_dir .'/'. $release;
@endsetup

@story('deploy')
setup_app_dir
clone_repository
run_composer
create_env
create_links
@endstory

@task('setup_app_dir')
echo 'Checking app dir'
[ -d {{ $app_dir }} ] && echo "Exists" || mkdir {{ $app_dir }}
@endtask

@task('clone_repository')
echo 'Cloning repository'
[ -d {{ $releases_dir }} ] || mkdir {{ $releases_dir }}
git clone --depth 1 {{ $repository }} {{ $new_release_dir }}
cd {{ $new_release_dir }}
git reset --hard {{ $commit }}
@endtask

@task('run_composer')
echo "Starting deployment ({{ $release }})"
cd {{ $new_release_dir }}
composer install --prefer-dist --no-scripts -q -o
@endtask

@task('create_env')
echo "Creating .env file"
[ -f {{ $new_release_dir }}/.env ] || touch {{ $new_release_dir }}/.env
@endtask

@task('create_links')
echo "Linking storage directory"
rm -rf {{ $new_release_dir }}/storage
ln -nfs {{ $app_dir }}/storage {{ $new_release_dir }}/storage
mkdir {{ $new_relase_dir }}/storage/frameworks/cache
mkdir {{ $new_relase_dir }}/storage/frameworks/sessions
mkdir {{ $new_relase_dir }}/storage/frameworks/views

echo 'Linking .env file'
ln -nfs {{ $app_dir }}/.env {{ $new_release_dir }}/.env

echo 'Linking current release'
ln -nfs {{ $new_release_dir }} {{ $app_dir }}/current
@endtask