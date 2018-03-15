#!/bin/bash

######################################
# Filename - CPU5003 UNIX Assignment #
# Gareth Weston - GW2CRT             #
######################################

#Script to create a directory 

echo "Welcome $user"
echo
echo "PLEASE ENTER THE NAME OF THE DIRECTORY YOU WOULD LIKE TO CREATE"
echo
read usr_input
	cd
	mkdir $usr_input
	echo "Directory created"

echo "Heading back to the the Main Menu"
sleep 10

cd /
echo
./home/gw2crt/ass_folder/main_menu

##END OF SCRIPT