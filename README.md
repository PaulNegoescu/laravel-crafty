# Crafty - A Laravel Artisan and Generator GUI (LAGG)

This tool is meant to offer an easy to use GUI for all those users who don't want to remember all commands or retype them every time. 

I myself am a Windows user and many of the productivity tools you have in a Mac OS environment are simply not available to me, typing out long hard to remember commands each time is not ideal so I created this fancy tool to help me fast-click through menial repetitive tasks.

## Requirements

1. A working Laravel installation
2. The generate task: https://github.com/JeffreyWay/Laravel-Generator

## Installation

1. `git clone` this repo
2. Copy the contents to a `crafty` folder inside your `<laravel_installation>/bundles` directory (make sure this file is in the root of that `crafty` folder and all other files and folders in the same places (like in the repo) relatively to it)
3. in `<laravel_installation>\application\bundles.php` edit the array you find there to look something like this:

	return array(
		'docs' => array('handles' => 'docs'),
		'crafty' => array('handles' => 'crafty'),
	);

*Note* - In some cases the array above might already contain other lines then the ones above please edit carefully only adding the relevant line:

	'crafty' => array('handles' => 'crafty')

**Warning!** Only leave this bundle enabled in a development environment remove it in production! 

To remove the bundle just undo the steps above (not necessary for the first step).

## Usage

1. Navigate to http://yourlaravelhost.dev/crafty
2. Use the buttons