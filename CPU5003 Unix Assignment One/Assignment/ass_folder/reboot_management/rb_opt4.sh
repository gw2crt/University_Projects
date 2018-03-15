#!/bin/bash

######################################
# Filename - CPU5003 UNIX Assignment #
# Gareth Weston - GW2CRT             #
###################################### 

#Script to schedule a reboot.

echo "Schedule A Reboot"
echo
sleep 2

echo "When would you like to schedule a Reboot?"
echo "Enter In the format - 2:30 PM 10/21/2016"
read usr_input


	echo "reboot" | at $usr_input
	echo "System reboot scheduled for $usr_input"
	sleep 5
	cd / && ./home/gw2crt/ass_folder/main_menu

## END OF SCRIPT




