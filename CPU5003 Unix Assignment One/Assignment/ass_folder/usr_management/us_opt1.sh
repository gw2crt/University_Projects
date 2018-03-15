#!/bin/bash

######################################
# Filename - CPU5003 UNIX Assignment #
# Gareth Weston - GW2CRT             #
######################################  

## A script to Add a user to the system

echo "ADD A USER TO THE SYSTEM"
echo

## Requesting the system user to enter the name for the account to be added
 
echo "Please enter the username for the user"

## Entered information is stored in a variable named usr_input

read usr_input

## command USERADD is made with the variable $usr_input which contains the name of the account to be setup. 

useradd $usr_input

echo "Thank you, $usr_select has been added."
echo
echo "GOODBYE"

## Command to return the user back to the main menu

sleep 1
cd /
./home/gw2crt/ass_folder/main_menu

## end of script