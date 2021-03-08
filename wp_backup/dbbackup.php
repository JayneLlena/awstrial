<?php
$DATABASE="ymxdrbamvx";
$DBUSER="ymxdrbamvx";
$DBPASSWD="PrUzA3zrqY";
$PATH="/home/master/applications/ymxdrbamvx/public_html/wp_backup/";
$FILE_NAME="site-name-backup-" . date("Y-m-d") . ".sql.gz";
exec('/usr/bin/mysqldump -u '.$DBUSER.' -p'.$DBPASSWD.' '.$DATABASE.' | gzip --best > '.$PATH.$FILE_NAME);
echo "Database(".$DATABASE.") backup completed. File name: ".$FILE_NAME;
?>

