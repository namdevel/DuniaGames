# DuniaGames
Un-official API to Check Username / Nickname By Account ID

[![Hits](https://hits.seeyoufarm.com/api/count/incr/badge.svg?url=https%3A%2F%2Fgithub.com%2Fnamdevel%2FDuniaGames&count_bg=%23EF5503&title_bg=%23555555&icon=protocols-dot-io.svg&icon_color=%23E7E7E7&title=VIEWS&edge_flat=true)](https://hits.seeyoufarm.com)

Usage
---------

```php
require('src/duniaGames.php');

$a = new DuniaGames();

echo $a->getUserNameMobileLegends('<userID>', '<zoneID>');
echo $a->getUserNameFreeFire('<gameID>');
echo $a->getUserNameCODMobile('<openID>');
echo $a->getUserNameLifeAfter('<gameID>', '<ServerName>');
```

License
------------

This open-source software is distributed under the MIT License. See LICENSE.md

Contributing
------------

All kinds of contributions are welcome - code, tests, documentation, bug reports, new features, etc...

* Send feedbacks.
* Submit bug reports.
* Write/Edit the documents.
* Fix bugs or add new features.
