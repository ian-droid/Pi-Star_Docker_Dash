<?php
$logPath='/var/log';
$callsign=parse_ini_file("/usr/local/etc/mmdvmhost")["Callsign"];
$registerURL = '';
$starLogPath = $logPath . '/STARnet.log';
$linkLogPath = $logPath . '/Links.log';
$hdrLogPath = $logPath . '/Headers.log';
$ddmode_log = $logPath . '/DDMode.log';
$configPath='/etc';
$gatewayConfigPath = '/usr/local/etc/ircddbgateway';
$defaultConfPath = '/etc/default';
$sharedFilesPath = '/usr/local/etc';
$sysConfigPath = '/etc/sysconfig';
?>
