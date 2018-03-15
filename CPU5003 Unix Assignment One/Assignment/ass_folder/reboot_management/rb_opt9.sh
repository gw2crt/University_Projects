#!/bin/bash

######################################
# Filename - CPU5003 UNIX Assignment #
# Gareth Weston - GW2CRT             #
###################################### 

# Script to shutdown at a specific time 

echo "Schedule SHUTDOWN"
echo
sleep 2

echo "When would you like to schedule a SHUTDOWN?"
echo "Enter In the format - 2:30 PM 10/21/2016"
read usr_input


	echo "shutdown" | at $usr_input
	echo "System SHUTDOWN scheduled for $usr_input"
	sleep 5
	cd / && ./home/gw2crt/ass_folder/main_menu

## END OF SCRIPT
