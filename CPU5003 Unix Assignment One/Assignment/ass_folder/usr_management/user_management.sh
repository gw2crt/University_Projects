#!/bin/bash

######################################
# Filename - CPU5003 UNIX Assignment #
# Gareth Weston - GW2CRT             #
######################################  

echo "Welcome $USER to the User Management optings "
echo
echo "Please select from the following options"
echo
echo "USER MANAGEMENT"
echo
echo "1. ADD A NEW USER "
echo "2. REMOVE A USER "
echo "3. CAHANGE A PASSWORD "
echo "4. CONFIRM A USER EXISTS "
echo "5. USER REPORT - CURRENTLY LOGGED IN "
echo "6. USER REPORT - NOT LOGGED IN FOR A GIVEN TIME "
echo "7. USER REPORT - WHEN EACH USER LAST LOGGED IN "
echo "8. USER REPORT - WHICH COMMANDS HAVE BEEN USED "
echo "9. REMOVE ALL USERS WHO HAVE NOT LOGGED IN FOR A SPECIFIC TIME "
echo "m. RETURN BACK TO THE MAIN MENU "
echo "q. EXIT "

read usr_select

read -p "Thank you $USER, option $usr_select has been selected. To comfirm press enter. "

case $usr_select in
	1) ./home/gw2crt/ass_folder/usr_management/us_opt1.sh;;
	2) ./home/gw2crt/ass_folder/usr_management/us_opt2.sh;;
	3) ./home/gw2crt/ass_folder/usr_management/us_opt3.sh;;
	4) ./home/gw2crt/ass_folder/usr_management/us_opt4.sh;;
	5) ./home/gw2crt/ass_folder/usr_management/us_opt5.sh;;
	6) ./home/gw2crt/ass_folder/usr_management/us_opt6.sh;;
	7) ./home/gw2crt/ass_folder/usr_management/us_opt7.sh;;
	8) ./home/gw2crt/ass_folder/usr_management/us_opt8.sh;;
	9) ./home/gw2crt/ass_folder/usr_management/us_opt9.sh;;
	m) cd / && ./home/gw2crt/ass_folder/main_menu;;
	q) echo "GOODBYE $USER" && exit 0;;
	*) echo "Incorrect Option"
esac

##END OF SCRIPT