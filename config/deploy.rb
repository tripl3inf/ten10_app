set :application, 'ten10'
set :repo_url, 'git@github.com:tripl3inf/ten10_app.git'

# Branch options
# Prompts for the branch name (defaults to current branch)
#ask :branch, proc { `git rev-parse --abbrev-ref HEAD`.chomp }

# Sets branch to current one
#set :branch, proc { `git rev-parse --abbrev-ref HEAD`.chomp }

# Hardcodes branch to always be master
# This could be overridden in a stage config file
set :branch, :master

set :deploy_to, "/var/www/CLIENT/#{fetch(:application)}"

set :log_level, :debug
set :pty, true

set :linked_files, %w{.env}
set :linked_dirs, %w{web/app/uploads}
set :theme_path, "#{release_path}/app/themes/ten10_theme"

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
