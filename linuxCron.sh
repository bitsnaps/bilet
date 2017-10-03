#!/bin/bash
# My first script

echo Cron for BiletTm
cd /usr/share/nginx/tmbilet/php yii hello > /usr/share/nginx/tmbilet/cron.log 2>&1
echo executed

#*/5 * * * * /xampp/htdocs/basic/linuxCron.sh