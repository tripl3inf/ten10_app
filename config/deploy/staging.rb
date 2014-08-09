############################################
# Setup Server
############################################

set :stage, :staging
set :stage_url, "http://t3inf.com"
server "t3inf.com", user: "tripl3inf", roles: %w{web app db}
set :deploy_to, "/srv/client/ten10"

############################################
# Setup Git
############################################

set :branch, "wp_deploy"
