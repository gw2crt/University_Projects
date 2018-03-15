#!/bin/bash

######################################
# Filename - CPU5003 UNIX Assignment #
# Gareth Weston - GW2CRT             #
###################################### 

# Script to generate a report on users who have not logged in for a given time.

echo
echo "GENERATE REPORT - NOT LOGGED IN FOR A GIVEN TIME"
echo
echo
echo -n "Todays Date is - "
date
echo
echo "Report generated on Users that have not logged into the system for X Days"
echo -n "Enter number of days: "
read usr_input

# User is asked to input a number of days to search, the variable is compared to the lastlog -b command. results are ommitted using the grep -v, a grep command is issued searching for users with PTS followed by the awk statement to produce the format. 

echo "Users who have not logged in for $usr_input day(s) is shown below: "
echo
lastlog -b $usr_input | grep -v -e Never -e root | grep pts | awk '{ print $1 "\t" "           " "\t" $4 " " $5 " " $6 " " $7}' 

lastlog -b $usr_input | grep -v -e Never -e root | grep pts | awk '{ print $1 "\t" "           " "\t" $4 " " $5 " " $6 " " $7}' > /home/gw2crt/ass_folder/dormantreportlog.txt.`date +%d.%m.%Y.%H.%M`
    
sleep 5
cd /
./home/gw2crt/ass_folder/main_menu

#END OF SCRIPT