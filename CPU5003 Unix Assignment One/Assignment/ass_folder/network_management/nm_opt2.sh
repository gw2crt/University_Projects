#!/bin/bash

######################################
# Filename - CPU5003 UNIX Assignment #
# Gareth Weston - GW2CRT             #
######################################  

#Script to ping an address

echo
echo "PING A REMOTE MACHINE"
echo
echo "Please enter the address you would like to test"
read usr_input
ping $usr_input -c 3
echo
echo "returning back to the main menu"

sleep 10
cd /
./home/gw2crt/ass_folder/main_menu

##END OF SCRIPT

