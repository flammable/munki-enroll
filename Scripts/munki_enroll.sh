#!/bin/sh 

scutil="/usr/sbin/scutil"
curl="/usr/bin/curl"

COMPUTERNAME=$(${scutil} --get ComputerName)
SUBMITURL="http://munki/repo/munki-enroll/enroll.php"

${curl} --max-time 5 --silent --get -d hostname="${COMPUTERNAME}" "$SUBMITURL"

# Use this if you're using HTTP/HTTPS Basic Authentication
# ${curl} --max-time 5 --silent --get -d hostname="${COMPUTERNAME}" --user "login:password" "$SUBMITURL"

exit 0
