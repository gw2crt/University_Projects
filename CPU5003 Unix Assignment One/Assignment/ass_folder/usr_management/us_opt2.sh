#!/bin/bash

######################################
# Filename - CPU5003 UNIX Assignment #
# Gareth Weston - GW2CRT             #
###################################### 

## Script used to remove a user from the system

echo "REMOVE A USER"
echo

## Requesting the system user to enter the name for the account to be removed

echo "please enter the name of the user you wish to remove"

## Entered information is stored in a variable named usr_input

read usr_input

## If conditional statement used to make sure the users actions are correct. 
echo "$usr_input, Is this correct? Y/N"
	read answer

## Users input is stored into a variable and used against the below IF condition 
	
	if [ "$answer" = "y" ]; then
		echo "Removing User $usr_input. "
		sleep 1		
		passwd --lock $usr_input ## Locks the users account
		pgrep -u $usr_input ## Searches for any processes currently active
 		pkill -u $usr_input ## Kills any processes which are active
		userdel --remove $usr_select ## fully removes the users account.
		echo "$usr_input, has been removed" ##confirmation the action has been completed
		cd /
		./home/gw2crt/ass_folder/main_menu 
	else ##fall back if the user wants to cancel or enteres anything other than Y. 
		echo "Canceling"
		sleep 1
		cd /
		./home/gw2crt/ass_folder/main_menu
	fi

## end of script



