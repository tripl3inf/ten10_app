# config valid only for Capistrano 3.1
lock '3.1.0'

# require Slack config
require './config/slack'

############################################
# Setup WordPress
############################################

set :wp_user, "tripl3inf" # The admin username
set :wp_email, "tripl3infinity@gmail.com" # The admin email address
set :wp_sitename, "ten10" # The site title
set :wp_localurl, "http://localhost" # Your local environment URL

############################################
# Setup project
############################################

set :application, "wp_deploy"
set :repo_url, "git@github.com:tripl3inf/ten10_app.git"
set :scm, :git

set :git_strategy, SubmoduleStrategy


############################################
# Setup Capistrano
############################################

set :log_level, :debug
set :use_sudo, false

set :ssh_options, {
  forward_agent: true
}

set :keep_releases, 5

############################################
# Linked files and directories (symlinks)
############################################

#set :linked_files, %w{wp-config.php .htaccess}
set :linked_files, %w{wp-config.php}
set :linked_dirs, %w{content/uploads}

namespace :deploy do
namespace :composer do
    desc "Install composer dependencies"
    task :install do
        on roles (:app) do
            within release_path do
                execute "composer", "install", "--no-dev --prefer-dist --no-scripts --quiet"
            end
        end
    end
end


    before "deploy:started", "composer:install"


  desc "create WordPress files for symlinking"
  task :create_wp_files do
    on roles(:app) do
      execute :touch, "#{shared_path}/wp-config.php"
      #execute :touch, "#{shared_path}/.htaccess"
    end
  end

  after 'check:make_linked_dirs', :create_wp_files

  desc "Creates robots.txt for non-production envs"
  task :create_robots do
  	on roles(:app) do
  		if fetch(:stage) != :production then

		    io = StringIO.new('User-agent: *
Disallow: /')
		    upload! io, File.join(release_path, "robots.txt")
        execute :chmod, "644 #{release_path}/robots.txt"
      end
  	end
  end

  after :finished, :create_robots
  after :finishing, "deploy:cleanup"

end







