# YOURLS Anonymise Plugin
This plugin stops [YOURLS](http://yourls.org) recording users' IP addresses, User-Agents, and referrers. Since IPs aren't collected, neither are country codes. It's a rather full-on way to reduce the personal data that YOURLS collects.

It'll somewhat diminish the amount of data in your analytics, but click counts and dates are maintained.

## Removing data you've already collected
This plugin won't retroactively delete data you've already stored. To do that:

### Step 1
Backup your database in case you delete more than expected.

### Step 2
To anonymise visitor data you've already collected, run the following SQL command on your server:
``` sql
UPDATE `YOUR_TABLE_PREFIX_log` SET `user_agent`="",`ip_address`="",`country_code`="" WHERE 1
```
Change `YOUR_TABLE_PREFIX` to the prefix defined in your config file (by default, `yourls_`).

### Step 3
If you also want to delete the IP addresses of the people who created the links, run:
``` sql
UPDATE `YOUR_TABLE_PREFIX_url` SET `ip`="" WHERE 1
```
Again, `YOUR_TABLE_PREFIX` is the prefix defined in your config file (by default, `yourls_`).

## Installation
Get the latest release and instructions from the [Releases tab](https://github.com/wlabarron/yourls-anonymise/releases).

## Data Protection
This plugin doesn't necessarily make you compliant with whatever data protection laws you need to abide by.

You'll need to make your own assessment to see what other action you need to take.

This plugin exists, and that's the only seal of approval on it.
