#!/bin/bash

######################################
# Filename - CPU5003 UNIX Assignment #
# Gareth Weston - GW2CRT             #
###################################### 

# Script to reboot the system 

echo "IMMEDIATE REBOOT"
echo "Is this Correct? Y/N"
read answer

	if [ "$answer" = "y" ]; then
		echo "Rebooting now"
		sleep 1
		cd /
		reboot -f
	else
		echo "Cancelling Reboot, Heading back to the Main Menu"
		sleep 1
		cd /
		./home/gw2crt/ass_folder/main_menu
		
	fi

## END OF SCRIPT