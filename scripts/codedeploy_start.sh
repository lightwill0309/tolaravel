echo `date +"%Y/%m/%d %H:%M:%S"` > deploy.log
composer install
ln -s .env.stg .env
