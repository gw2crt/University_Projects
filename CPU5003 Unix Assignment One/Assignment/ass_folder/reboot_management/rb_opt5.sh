#!/bin/bash

######################################
# Filename - CPU5003 UNIX Assignment #
# Gareth Weston - GW2CRT             #
###################################### 

#Report on the last time the system was rebooted. 

echo
echo "Generate Report showing the Last Reboot of the Server?"
echo
echo "Is this Correct Y/N"
read answer
	
	if [ "$answer" = "y" ]; then
		echo "Generating Report"
		sleep 1 
		last reboot 
		sleep 2
		echo "Returning User to Main Menu"
		echo
 		cd /
		./home/gw2crt/ass_folder/main_menu
	else
		echo "Canceling Request, Heading back to the Main Menu"
		sleep 2
		cd /
		./home/gw2crt/ass_folder/main_menu
	fi

## END OF SCRIPT

	

