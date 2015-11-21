# adb-getevent-php-converter
#### Convert 'adb shell getevent' to 'sendevent' using PHP
__hex2dat.php generated a .scr (not a screen saver) file based on input file and it's name.__


Open your app/place you want to start

To record an action:  
`$ adb shell getevent > <file_name>`  
Press ctrl+c / stop the proccess when you end your task

To convert the file:  
`$ php hex2dat.php <file_name>`

Upload into device sdcard (considering you have an sdcard):  
`$ adb push <file_name>.scr /sdcard/<new_file_name>`

To play the recorded action:
`$ adb shell sh /sdcard/<new_file_name>`


##### Sample:  
`$ adb shell getevent > home_button_press`  
Press the home button on the phone then ctrl+c/cancel this procces in `$ terminal` window

`$ php hex2dat.php home_button_press`  
`$ adb push app_drawer_close.scr /sdcard/home_button_press.scr`  
`$ adb shell sh /sdcard/home_button_press.scr`  

And the home button was pressed :)
