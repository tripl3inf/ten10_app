# config valid only for Capistrano 3.1
lock '3.1.0'

# require Slack config
#require './config/slack'

############################################
# Setup WordPress
############################################

#set :wp_user, "yourname" # The admin username
#set :wp_email, "yourname@example.com" # The admin email address
#set :wp_sitename, "WP Deploy" # The site title
#set :wp_localurl, "http://wpdeploy" # Your local environment URL

############################################
# Setup project
############################################

set :application, 'ten10'
set :repo_url, 'git@github.com:tripl3inf/ten10_app.git'
set :scm, :git

#set :git_strategy, SubmoduleStrategy


set :branch, :master

set :deploy_to, "/var/www/CLIENT/#{fetch(:application)}"


############################################
# Setup Capistrano
############################################

set :log_level, :debug
set :use_sudo, true
set :pty, true

set :ssh_options, {
  forward_agent: true
}

set :keep_releases, 5

############################################
# Linked files and directories (symlinks)
############################################


set :linked_files, %w{.env}
set :linked_dirs, %w{web/app/uploads}



############################################
# Deploy Actions
############################################

namespace :deploy do

  desc 'Restart application'
  task :restart do # doesnt do anything, but is req by ruby app
    on roles(:app), in: :sequence, wait: 5 do
      # Your restart mechanism here, for example:
      execute :service, :nginx, :reload
    end
  end
end

# The above restart task is not run by default
# Uncomment the following line to run it on deploys if needed
# after 'deploy:publishing', 'deploy:restart'









