#!/bin/bash

######################################
# Filename - CPU5003 UNIX Assignment #
# Gareth Weston - GW2CRT             #
###################################### 

#Script to generate a report of the last shutdown

echo
echo "Generate Report showing the last SHUTDOWN of the system?"
echo
echo "Is this correct Y/N"
read answer

	if [ "$answer" = "y" ]; then
		echo "Generating Report"
		sleep 1
		last shutdown
		sleep 2
		echo "Returning to Main Menu"
		echo
		cd /
		./home/gw2crt/ass_folder/main_menu
	
	else
	
		"Cancelling Request, Heading back to the Main Menu"
		sleep 2
		cd /
		./home/gw2crt/ass_folder/main_menu
	fi	

## END OF SCRIPT