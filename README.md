# Crafty - A Laravel Artisan and Generator GUI (LAGG)

v. 1.0

This tool is meant to offer an easy to use GUI for all those users who don't want to remember all commands or retype them every time. 

I myself am a Windows user and many of the productivity tools you have in a Mac OS environment are simply not available to me, typing out long hard to remember commands each time is not ideal so I created this "fancy" tool to help me fast-click through menial repetitive tasks.

*Keep an eye on this repo, I will be adding new features for the next couple of weeks.*

## Requirements

1. A working Laravel 3 installation
2. The generate task for Laravel 3: https://github.com/JeffreyWay/Laravel-Generator

*A Laravel 4 version will be created in a separate repo.*

## Installation

### From the Laravel Bundle Repository
1. Run the following command in your Laravel installation:
	`php artisan bundle:install Crafty`
2. Follow step 3 below

**or**

### From Github

1. `git clone` the repo or download all files and folders as a .zip archive and extract it from here: http://github.com/PaulNegoescu/laravel-crafty.
2. Copy the contents to a folder (name it laravel-crafty) inside your `<laravel_installation>/bundles` directory so that `<laravel_installation>/bundles/laravel-crafty/routes.php` is accessible.
3. In `<laravel_installation>\application\bundles.php` edit the array you find there and add this line:
	`'laravel-crafty' => array('handles' => 'crafty'),`

*Note* - In most cases the array above will already contain other lines take care not to break those, just add the line at the end

*Note 2* - The bundle does **not** need to be published, all resources are external or in-line (this is the reason for the bad practice styles and scripts :) ).

*Note 3* - If the GUI fails for any reason please see the **Important** info at the end.

### Uninstalling

To remove the bundle just undo the steps 2 and 3 above (delete the bundle (/laravel-crafty) folder and remove the line from bundles.php).

*See the warning below.*

## Usage

1. Navigate to http://yourlaravelhost.dev/crafty
2. Each of the headings describes a group of controls, if you have JavaScript enabled you need to click on them.
2. Use the buttons, should be self-explanatory

*More info Soon*

*TODO* - Add hints from the official documentation of the tools.

## Important

In case you are running on *nix systems (including MacOS) you'll need to make sure your webserver user has the necessary rights to execute shell commands, this is working by default on Windows.

If the GUI still won't execute the command line commands please make sure that in your php.ini file "safe_mode" is set to false.

**Warning!** Only leave this bundle enabled in a development environment remove it in production! 

## Collaborating

If you would like a new feature or have found a bug please leave an issue on Github for me to follow up on.

If you'd like to actively contribute please follow the Laravel guidelines for collaboration on Github