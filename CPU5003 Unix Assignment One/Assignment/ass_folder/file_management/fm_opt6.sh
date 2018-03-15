#!/bin/bash

######################################
# Filename - CPU5003 UNIX Assignment #
# Gareth Weston - GW2CRT             #
######################################

#a script to zip and archive a directory

echo "Welcome $user"
echo
echo "Please enter the file name you wish to archive" ## Asks the user to enter the archive name
echo
echo "Your current direcotry contains the following" #asks the user what file or directory they would like to archive

## used to direct the system to the user home folder and lists the directories and files

cd
ls -l
sleep 5

echo "Please enter the name you wish to call the archive"
read usr_input

echo "And what directory you like to archive? "
read arch_input

tar -czvf $usr_input.tar.gz /home/gw2crt/$arch_input ## tar is the archive tool the user variables have been decalred and used for the file names.

echo "File has been compressed and resides in your home directory. "

echo "Heading back to the the Main Menu"
sleep 10
cd /
echo
./home/gw2crt/ass_folder/main_menu

##END OF SCRIPT
	