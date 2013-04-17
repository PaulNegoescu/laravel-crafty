# Crafty - A Laravel Artisan and Generator GUI (LAGG)

This tool is meant to offer an easy to use GUI for all those users who don't want to remember all commands or retype them every time. 

I myself am a Windows user and many of the productivity tools you have in a Mac OS environment are simply not available to me, typing out long hard to remember commands each time is not ideal so I created this fancy tool to help me fast-click through menial repetitive tasks.

## Requirements

1. A working Laravel 3 installation
2. The generate task for Laravel 3: https://github.com/JeffreyWay/Laravel-Generator

*A Laravel 4 version will be created in a separate repo.*

## Installation

1. `git clone` this repo or download all files and folders as a .zip archive and extract it.
2. Copy the contents to a folder inside your `<laravel_installation>/bundles` directory so that `<laravel_installation>/bundles/routes.php` is accessible.
3. in `<laravel_installation>\application\bundles.php` edit the array you find there and add this line:
	```'crafty' => array('handles' => 'crafty'),```


*Note* - In most cases the array above will already contain other lines take care not to break those, just add the line at the end

**Warning!** Only leave this bundle enabled in a development environment remove it in production! 

To remove the bundle just undo the steps above (not necessary for the first step).

## Usage

1. Navigate to http://yourlaravelhost.dev/crafty
2. Use the buttons

*Note* - Generator tasks do not work at the moment.