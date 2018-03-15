#!/bin/bash

######################################
# Filename - CPU5003 UNIX Assignment #
# Gareth Weston - GW2CRT             #
###################################### 

# Script to check current users who are logged on

# Overview of logged in users.

echo
echo "USER REPORT - USERS WHO ARE CURRENTLY LOGGED ON"
echo
echo -n "There are currenlty "
who | wc -l
echo -n " Users Logged onto the system"
echo
echo

# Iteration loop displaying the results one by one from the command who. displaying the first coloum using the awk command. 

echo -n	
	for user in `who | awk '{print $1}'`
	do
	echo "$user is currently active and logged on"
	sleep 1
	done
	sleep 5
	./home/gw2crt/ass_folder/main_menu

#END OF SCRIPT