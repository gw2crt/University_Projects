#!/bin/bash

######################################
# Filename - CPU5003 UNIX Assignment #
# Gareth Weston - GW2CRT             #
###################################### 

#Script to shutdown the system

echo "IMMEDIATE SHUTDOWN"
echo "Is this Correct? Y/N"
read answer

	if [ "$answer" = "y" ]; then
		echo "SHUTTING DOWN NOW"
		sleep 1
		cd /
		shutdown -r now
	else
		echo "Cancelling shutdown, Heading back to the Main Menu"
		sleep 1
		cd /
		./home/gw2crt/ass_folder/main_menu
		
	fi

## END OF SCRIPT
