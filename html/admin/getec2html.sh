#!/bin/bash
cd /home/zoey/ec2html/
git pull
rm -fR /var/www/html/*
cp -fR /home/zoey/ec2html/* /var/www/html/


