# WAX Restrict ACF Menu by Username

This mu-plugin hide ACF menu from admin for every users except the one you want.  


## Features

* This mu-plugin hide ACF menu from admin for every users except the one you've hard coded in wax-restrict-acf-menu-admin.php.

## Screenshots

![Screenshot](https://github.com/webaxones/wax-restrict-acf-menu-by-username/raw/master/assets/screenshots/screenshot-1.png "Screenshot")

## Installation

This is a must have plugin, so, use at it as a mu-plugin.
Since this is a folder, you must use a MU Loader and I know of no better than this one : https://github.com/BeAPI/wp-mu-loader.

### via Composer

1. Add a line to your repositories array: `{ "type": "vcs", "url": "https://github.com/webaxones/wax-restrict-acf-menu-by-username" }`
2. Add a line to your require block: `"webaxones/wax-restrict-acf-menu-by-username": "dev-master"`
3. Run: `composer update`
4. Replace 'John' with the user name of your choice in wax-restrict-acf-menu-by-username.php


### Manual

1. Copy the plugin folder into your must use plugins folder.

## Changelog

### 1.0.0 - 10 Sep 2017
* Initial