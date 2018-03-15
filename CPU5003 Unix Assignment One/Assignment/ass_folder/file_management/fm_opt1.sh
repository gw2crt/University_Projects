#!/bin/bash

######################################
# Filename - CPU5003 UNIX Assignment #
# Gareth Weston - GW2CRT             #
######################################

#Script to list all files in the current directory

echo "Listing all the Files in the Current Directory"
echo
echo -n "Current Directory is: "
pwd
echo
ls -l
echo

echo "Heading back to the the Main Menu"
sleep 10

cd /
echo
./home/gw2crt/ass_folder/main_menu
echo

## END OF SCRIPT
