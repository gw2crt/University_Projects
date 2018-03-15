#!/bin/bash

######################################
# Filename - CPU5003 UNIX Assignment #
# Gareth Weston - GW2CRT             #
###################################### 

#Script to reboot the system if there are no users logged on 

echo "REBOOT if there are no current users logged on"
echo
echo "Checking if any users are currently logged on"

#conditional statment checks if there are any currently users logged on. if there are it produces an error, if not the system is rebooted. 

sleep 2

	if [ 'users | wc -l' ]; then
		echo "Attempting system REBOOT"
		echo
		sleep "Unable to execute command, Users are still currently logged on"
		echo
		echo "Taking you back to the menu"
		sleep 3
		./reboot_options.sh
		
	else
		echo "Attempting Reboot"
		sleep 1
		echo "Rebooting System"
		reboot -f	
	fi

## END OF SCRIPT
