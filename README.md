# DuniaGames
Un-official API to Check Username / Nickname By Account ID

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
