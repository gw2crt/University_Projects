#!/bin/bash

######################################
# Filename - CPU5003 UNIX Assignment #
# Gareth Weston - GW2CRT             #
###################################### 

#Script to Shutdown the system on a condition there are no Users logged on 

loggedin=$(who | wc -l)

echo "SHUTDOWN if there are no current users logged on"
echo
echo "Checking if any users are currently logged on"

sleep 2

# Iteration condition which runs until the number of users logged in reaches 1 which is the current user 'Root' then it will Shutdown.

	until [ $loggedin -eq 1 ]
	do	
		echo "Attempting system Shutdown"
		echo
		echo "Unable to execute command, Users are still currently logged on"
        	echo
		who | sort | uniq 
		echo
		echo "Trying again in 60 Seconds"
		sleep 60
	done
		echo "system rebooting"
		shutdown -r now
	
## END OF SCRIPT