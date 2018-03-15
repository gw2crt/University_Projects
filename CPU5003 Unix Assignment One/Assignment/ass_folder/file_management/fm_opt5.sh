#!/bin/bash

######################################
# Filename - CPU5003 UNIX Assignment #
# Gareth Weston - GW2CRT             #
######################################

#A script to remove a directory

echo "Welcome $user"
echo
echo "PLEASE ENTER THE NAME OF THE DIRECTORY YOU WOULD LIKE TO REMOVE"
echo
read usr_input
	cd
	rm -r $usr_input
	echo "Directory removed"

echo "Heading back to the the Main Menu"
sleep 10

cd /
echo
./home/gw2crt/ass_folder/main_menu
##END OF SCRIPT