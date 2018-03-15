#!bin/bash

######################################
# Filename - CPU5003 UNIX Assignment #
# Gareth Weston - GW2CRT             #
###################################### 

## Script to change a users password

echo "PASSWORD CHANGE"
echo

## Requesting the system user to enter the name for the account to be added

echo "Please enter the username whose password you would like to change"

## Entered information is stored in a variable named usr_input

read usr_input

## If conditional statement used to make sure the users actions are correct.

echo "The user you have entered is: $usr_input"
echo
echo "Is this correct? Y/N"
read answer

## Users input is stored into a variable and used against the below IF condition
	if [ "$answer" = "y" ]; then
		echo "Changing password for user $usr_input"
	 	passwd $usr_input ##command used to change the password.
	 	echo "password changed"
	
	else
	 	echo "Canceling"
	 	sleep 1
		 cd /
	 	./home/gw2crt/ass_folder/main_menu
	fi

## end of script
