REM copy from Dropbox to xampp folder

REM BUSH HILL PARK
Robocopy /mir "O:\elec-notice\BushHillDocs" "C:\xampp\htdocs\elec-notice\BushHillPark\docs" /LOG+:"C:\xampp\htdocs\elec-notice\logs\CopyDocFilesFromOneDrive.log

REM JUBILEE PARK 
Robocopy /mir "O:\elec-notice\JubileeParkDocs" "C:\xampp\htdocs\elec-notice\JubileePark\docs" /LOG+:"C:\xampp\htdocs\elec-notice\logs\CopyDocFilesFromOneDrive.log

REM LEA VALLEY
Robocopy /mir "O:\elec-notice\LeaValleyDocs" "C:\xampp\htdocs\elec-notice\LeaValley\docs" /LOG+:"C:\xampp\htdocs\elec-notice\logs\CopyDocFilesFromOneDrive.log

REM POLISH
Robocopy /mir "O:\elec-notice\PolishDocs" "C:\xampp\htdocs\elec-notice\Polish\docs" /LOG+:"C:\xampp\htdocs\elec-notice\logs\CopyDocFilesFromOneDrive.log