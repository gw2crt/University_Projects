#!/bin/bash

######################################
# Filename - CPU5003 UNIX Assignment #
# Gareth Weston - GW2CRT             #
###################################### 

## A script to search for and confirm a user exists

echo "CONFIRM A USER EXISTS"
echo
echo "Please enter the username you wish to search for"
echo
read usr_input

# user entered search stored in usr_input is searched using getent in the passwd file. if found id is provided and search is complete. 
	
echo "Just checking if $usr_input is a valid system user"
sleep 1
echo

# If conditional statement running the 
	if getent passwd $usr_input  then
		echo "$usr_input exists and has been found"
		sleep 1		
		echo -n "Current user id is: " 
		id -u $usr_input
		sleep 5
		cd /
		./home/gw2crt/ass_folder/main_menu
	else
		echo "Sorry we are unable to find $usr_input"
		echo
		echo "A list of all current system users will be provided"
		echo
		grep home /etc/passwd
		sleep 15
		echo "Taking you back to the main menu"
		cd /
		./home/gw2crt/ass_folder/main_menu
	fi

#END OF SCRIPT

		
