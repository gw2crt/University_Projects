#!/bin/bash

######################################
# Filename - CPU5003 UNIX Assignment #
# Gareth Weston - GW2CRT             #
######################################

# a script to find a file within the system.

echo "Welcome $user"
echo
echo "Please enter the file name you wish to search for"
echo
read search

	if find /home/gw2crt -iname "$search" -type f | grep $search;  #|grep used to overcome a glitch on the return code
	then		
	echo "The File exists"
	else
	echo "The File does not exist"
	fi

echo "Heading back to the the Main Menu"

sleep 10
cd /
echo
./home/gw2crt/ass_folder/main_menu

##END OF SCRIPT
	

