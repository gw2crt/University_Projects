#!/bin/bash

######################################
# Filename - CPU5003 UNIX Assignment #
# Gareth Weston - GW2CRT             #
######################################

# Variable logfile assigned the directory and file name which is used to store the report.

logfile=/home/gw2crt/health_report`date +%d.%m.%Y` 
echo
echo "Generating Report, One Moment Please."
sleep 1

# Generation of the log file

echo > $logfile

echo "********************START OF REPORT********************" >> $logfile

# The report date and time is generated and printed to the logfile

echo >> $logfile
echo -n "Todays Date and Time is: " >> $logfile
date >> $logfile

# System uptime, last reboot and current logged on user information is added to the report

echo >> $logfile
echo -n "Current Uptime: " >> $logfile
uptime >> $logfile
echo >> $logfile
echo -n "Last Reboot: " >> $logfile
last reboot | head -1 >> $logfile
echo >> $logfile
echo -n "Current Users: " >> $logfile
who >> $logfile
echo >> $logfile
echo >> $logfile

# Last 10 login details are added to the report using the last command

echo "--------------------" >> $logfile
echo >> $logfile
echo "Last 10 Login details: " >> $logfile
last -a | head -10 >> $logfile
echo >> $logfile

# System hard drive usage is recorded and sent to the report file using the df or disk free command, free produces the memory usage
 
echo "--------------------" >> $logfile
echo >> $logfile
echo "Disk and memory usage: " >> $logfile
df -h | awk '{print "Free/total disk: " $11 " / " $9}' >> $logfile
free -m | awk '{print "Free / total memory: " $17 " / " $8 " MB"}' >> $logfile
echo >> $logfile

# top shows the system proceses head and tail show the first 3 and the last four. 

echo "--------------------" >> $logfile
echo >> $logfile
echo "System Utilization and Running Process information: " >> $logfile
top -b |head -3 >> $logfile
echo >> $logfile
top -b |head -3 |tail -4 >> $logfile
echo >> $logfile

# ss reports on the number of connections, the -s is to show only the statistics as the connection report would be too big to print.  
echo "--------------------" >> $logfile
echo >> $logfile
echo "Current Connections: " >> $logfile
ss -s >> $logfile
echo >> $logfile

# VMstat info presented on system processes for 1 second 5 times.   	 

echo "--------------------" >> $logfile
echo >> $logfile
echo "vmstat: " >> $logfile
vmstat 1 5 >> $logfile
echo >> $logfile

echo "********************END OF REPORT********************" >> $logfile

echo "Complete "
echo "Would you like to read this report? "
read user_reply
	if [ "$user_reply" = "y" ]; then
		cat /home/gw2crt/health_report`date +%d.%m.%Y`
	else
		echo "Goodbye"
	fi

#END OF SCRIPT

