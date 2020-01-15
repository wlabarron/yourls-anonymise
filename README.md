# YOURLS Anonymise Plugin
This plugin stops [YOURLS](http://yourls.org) recording users' IP addresses and user-agents. Since IPs aren't collected, neither are country codes. It's a rather full-on way to reduce the personal data that YOURLS collects.

It'll somewhat diminish the amount of data in your analytics, but click counts, dates, and referrers are maintained.

## Removing data you've already collected
Note that the plugin won't retroactively anonymise data you've already stored. To do that, you can run the SQL command
``` sql
UPDATE `YOUR_TABLE_PREFIX_log` SET `user_agent`="-",`ip_address`="-",`country_code`="-" WHERE 1
```
where `YOUR_TABLE_PREFIX` is the prefix defined in your config file. Backup your database first in case you delete more than you expect!

## Installation
Get the latest release and instructions from the [Releases tab](https://github.com/wlabarron/yourls-anonymise/releases).

## Data Protection
This plugin doesn't necessarily make you compliant with whatever data protection laws you need to abide by.

You'll need to make your own assessment to see what other action you need to take.

This plugin exists, and that's the only seal of approval on it.

## MIT License
Copyright (c) 2010 Ubicoo - http://www.ubicoo.com

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
