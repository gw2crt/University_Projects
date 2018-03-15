#!/bin/bash

######################################
# Filename - CPU5003 UNIX Assignment #
# Gareth Weston - GW2CRT             #
######################################  

echo
echo "WELCOME $USER TO THE NETWORK MANAGEMENT OPTIONS"
echo
echo "Plese Select from the following options"
echo
echo "NETWORK MANAGEMENT"
echo
echo "1. SHOW THE ARP TABLE "
echo "2. PING A REMOTE MACHINE "
echo "m. RETURN TO THE MAIN MENU "
echo "q. QUIT "
echo
read usr_select

read -p "Thank you $USER, option $usr_select has been selected. To confirm press enter. "

case $usr_select in

	1) ./nm_opt1.sh;;
	2) ./nm_opt2.sh;;
	m) cd / && ./home/gw2crt/ass_folder/main_menu;;
	q) echo "GOODBYE $USER" exit 0;;
	*) "Incorrect option, Please try again"

esac

##END OF SCRIPT
