#!/bin/bash

######################################
# Filename - CPU5003 UNIX Assignment #
# Gareth Weston - GW2CRT             #
###################################### 

#Script to report when each user last logged in. 

echo
echo "GENERATE REPORT - WHEN EACH USER LAST LOGGED IN"
echo
	awk 'BEGIN { printf "User Name\tLast Logged on\n "}'
	echo
	lastlog | grep 2016 | grep 19 | grep -v "admin" | awk '{ print $1"\t" "\t" $4 "\t" $5 "\t" $6 "\t" $9}'
	sleep 1
	echo
	echo "Report Complete, Report can be found at Home directory"
	awk 'BEGIN { printf "User Name\tLast Logged on\n "}' > /home/gw2crt/ass_folder/reportlog.txt.`date +%d.%m.%Y.%H.%M`
	printf " "
	lastlog | grep 2016 | grep 19 | grep -v "admin" | awk '{ print $1"\t" "  " "\t"$4"\t"$5"\t"$6"\t"$9}' >> /home/gw2crt/ass_folder/reportlog.txt.`date +%d.%m.%Y.%H.%M`
	sleep 5
	cd /
	./home/gw2crt/ass_folder/main_menu

#END OF SCRIPT