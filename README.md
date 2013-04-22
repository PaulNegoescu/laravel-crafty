# Crafty - A Laravel Artisan and Generator GUI (LAGG)

This tool is meant to offer an easy to use GUI for all those users who don't want to remember all commands or retype them every time. Please note that it's only been developed for a few days, it's still not full-featured.

I myself am a Windows user and many of the productivity tools you have in a Mac OS environment are simply not available to me, typing out long hard to remember commands each time is not ideal so I created this "fancy" tool to help me fast-click through menial repetitive tasks.

## Requirements

1. A working Laravel 3 installation
2. The generate task for Laravel 3: https://github.com/JeffreyWay/Laravel-Generator

*A Laravel 4 version will be created in a separate repo.*

## Installation

1. `git clone` this repo or download all files and folders as a .zip archive and extract it.
2. Copy the contents to a folder (I'll name it crafty) inside your `<laravel_installation>/bundles` directory so that `<laravel_installation>/bundles/crafty/routes.php` is accessible.
3. In `<laravel_installation>\application\bundles.php` edit the array you find there and add this line:
	`'crafty' => array('handles' => 'crafty'),`

*Note* - In most cases the array above will already contain other lines take care not to break those, just add the line at the end

### Uninstalling

To remove the bundle just undo the steps 2 and 3 above.

## Usage

1. Navigate to http://yourlaravelhost.dev/crafty
2. Use the buttons, should be self explanatory

*More info Soon*

*TODO* - Add hints from the official documentation of the tools.

### Important

In case you are running on *nix systems (including MacOS) you'll need to make sure your server user has the necessary rights to execute shell commands, this has only been tested and found working on Windows.

**Warning!** Only leave this bundle enabled in a development environment remove it in production! 