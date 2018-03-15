#!/bin/bash

######################################
# Filename - CPU5003 UNIX Assignment #
# Gareth Weston - GW2CRT             #
###################################### 
 
echo "Welcome $USER to the REBOOT and SHUTDOWN options "
echo "Please selection from the following: "
echo
echo "SYSTEM REBOOT Options"
echo
echo "1. REBOOT THE SYSTEM IMMEDIATELY"
echo "2. REBOOT THE SYSTEM - (If nobody is currently logged in)"
echo "3. REBOOT THE SYSTEM - (Once all users are logged out)"
echo "4. REBOOT THE SYSTEM - (Schedule a reboot)"
echo "5. REBOOT REPORT - (Generate report of last reboot)"
echo
echo "SYSTEM SHUTDOWN Options"
echo
echo "6. SHUTDOWN THE SYSTEM IMMEDIATELY"
echo "7. SHUTDOWN THE SYSTEM - (If nobody is currently logged in)"
echo "8. SHUTDOWN THE SYSTEM - (Once all users are logged out)"
echo "9. SHUTDOWN THE SYSTEM - (Schedule a SHUTDOWN)"
echo "10. SHUTDOWN REPORT - (Generate report of last SHUTDOWN)"
echo "m. RETURN TO THE MAIN MENU "
echo "q. EXIT"

read usr_select

read -p "Thank You, Option $usr_select has been selected. To comfirm 
your selection press enter."

	case $usr_select in
		1) ./home/gw2crt/ass_folder/reboot_management/rb_opt1.sh;;
		2) ./home/gw2crt/ass_folder/reboot_management/rb_opt2.sh;; 
		3) ./home/gw2crt/ass_folder/reboot_management/rb_opt3.sh;;
		4) ./home/gw2crt/ass_folder/reboot_management/rb_opt4.sh;;
		5) ./home/gw2crt/ass_folder/reboot_management/rb_opt5.sh;;
		6) ./home/gw2crt/ass_folder/reboot_management/rb_opt6.sh;;
		7) ./home/gw2crt/ass_folder/reboot_management/rb_opt7.sh;;
		8) ./home/gw2crt/ass_folder/reboot_management/rb_opt8.sh;;
		9) ./home/gw2crt/ass_folder/reboot_management/rb_opt9.sh;;
		10) ./home/gw2crt/ass_folder/reboot_management/rb_opt10.sh;;
		m) cd / && ./home/gw2crt/ass_folder/main_menu;;
		q) echo "Goodbye $USER" && exit 0;;
		*) echo "Incorrect option"
	esac

## END OF SCRIPT
