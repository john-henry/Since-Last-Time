# Since Last Time

Highlight new entries since user's last visit.

## Installation

1. Download the [latest release](https://github.com/john-henry/Since-Last-Time/releases/latest).
2. Copy the `since_last_time` folder to your `system/user/addons` folder (you can ignore the rest of this repository's files).
3. In your ExpressionEngine control panel, visit the Add-On Manager and click Install next to "Since Last Time".


## Usage

### `{exp:since_last_time}`

To be used inside the {exp:channel:entries} tag pair

#### Example Usage


        {exp:since_last_time entry_date="{entry_date format='%D %M %d, %Y %h:%i %A'}" markup="<strong>NEW</strong>"}


#### Parameters

  - `entry_date` - Entry Date to compare to.
  - `markup` - HTML to be added if entry is new since last visit.

## Compatibility

Since Last Time is compatible with ExpressionEngine 3

## Changelog


### 1.0.0

- Initial release


## Warranty/License

There's no warranty of any kind. If you find a bug, please tell me and I may try to fix it. It's provided completely as-is; if something breaks, you lose data, or something else bad happens, the author(s) and owner(s) of this plugin are in no way responsible.

This plugin is owned by John Henry Donovan (@johnhenry_ie). You can modify it and use it for your own personal or commercial projects, but you can't redistribute it.
