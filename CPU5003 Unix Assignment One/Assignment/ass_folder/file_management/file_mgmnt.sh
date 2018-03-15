#!/bin/bash

######################################
# Filename - CPU5003 UNIX Assignment #
# Gareth Weston - GW2CRT             #
######################################

clear
echo
echo "WELCOME $USER TO FILE MANAGEMENT"
echo
echo "Please choose from the following options: "
echo
	echo " 1 - List all files in a directory "
	echo " 2 - List all files in the ROOT directory "
	echo " 3 - Confirm a file exists "
	echo " 4 - Create a directory "
	echo " 5 - Remove a directory "
	echo " 6 - Archive a directories contents "
	echo " m. RETURN TO THE MAIN MENU "
	echo " q - EXIT "

read mselect

echo "Thank You $USER, Option $mselect has been chosen. "

case $mselect in

	1) ./home/gw2crt/ass_folder/file_management/fm_opt1.sh;;
	2) ./home/gw2crt/ass_folder/file_management/fm_opt2.sh;;
	3) ./home/gw2crt/ass_folder/file_management/fm_opt3.sh;;
	4) ./home/gw2crt/ass_folder/file_management/fm_opt4.sh;;
	5) ./home/gw2crt/ass_folder/file_management/fm_opt5.sh;;
	6) ./home/gw2crt/ass_folder/file_management/fm_opt6.sh;;
	m) cd / && ./home/gw2crt/ass_folder/main_menu;;
	q) echo "GOODBYE $USER" && exit 0;;
	
esac
	 
## END OF SCRIPT
