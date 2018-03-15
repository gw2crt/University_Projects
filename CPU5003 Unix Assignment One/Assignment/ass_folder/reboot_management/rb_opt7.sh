#!/bin/bash

######################################
# Filename - CPU5003 UNIX Assignment #
# Gareth Weston - GW2CRT             #
###################################### 

#A script to shut down the system if there are no users logged on

echo "SHUTDOWN if there are no current users logged on"
echo
echo -n "Press enter to continue"
read input

	if [ 'users | wc -l' ]; then
		echo "Attempting system SHUTDOWN"
		echo
		echo "Unable to execute command, Users are still currently logged on"
		echo
		echo "Taking you back to the menu"
		sleep 3
		./reboot_options.sh
 	else
		echo "Attempting Shutdown"
		sleep 1
		echo "Shutting Down Now"
		shutdown -P now	
	fi

## END OF SCRIPT
