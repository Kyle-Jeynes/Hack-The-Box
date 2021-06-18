#!/bin/bash

nmap -sC -sV -A $1 > out.scan
./snmp-tool/snmpbw.pl $1 public 2 1
smbclient -L '\\$1'
dig version.bind CHAOS TXT @10.10.10.244 > dns.scan
