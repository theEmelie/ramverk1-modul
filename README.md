[![Build Status](https://travis-ci.org/theEmelie/ramverk1-modul.svg?branch=master)](https://travis-ci.org/theEmelie/ramverk1-modul)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)  

[![CircleCI](https://circleci.com/gh/theEmelie/ramverk1-modul.svg?style=svg)](https://circleci.com/gh/theEmelie/ramverk1-modul)
[![Maintainability](https://api.codeclimate.com/v1/badges/caf03940c2a44f61a6d0/maintainability)](https://codeclimate.com/github/theEmelie/ramverk1-modul/maintainability)  

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/theEmelie/ramverk1-modul/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/theEmelie/ramverk1-modul/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/theEmelie/ramverk1-modul/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/theEmelie/ramverk1-modul/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/theEmelie/ramverk1-modul/badges/build.png?b=master)](https://scrutinizer-ci.com/g/theEmelie/ramverk1-modul/build-status/master)


Table of content
------------------------------------

* [Install as Anax module](#Install-as-Anax-module)
* [Install using scaffold postprocessing file](#Install-using-scaffold-postprocessing-file)
* [Configuration files for weather](#Configuration-files-for-weather)
* [Views, Controller and Models](#Views,-Controller-and-Models)
* [Install and setup Anax](#Install-and-setup-Anax)
* [License](#License)


Install as Anax module
------------------------------------

This is how you install the module into an existing Anax installation.

Install using composer.

```
composer require emau18/weather
```

Install using scaffold postprocessing file
------------------------------------

The module supports a postprocessing installation script, to be used with Anax scaffolding. The script executes the default installation, as outlined above.

```text
bash vendor/emau18/weather/.anax/scaffold/postprocess.d/700_weather.bash
```

The postprocessing script should be run after the `composer require` is done.

Configuration files for weather
------------------------------------

```
rsync -av vendor/emau18/weather/config ./
```

Views, Controller and Models
------------------------------------

```
rsync -av vendor/emau18/weather/src/IpController /src
```

```
rsync -av vendor/emau18/weather/src/Models /src
```

```
rsync -av vendor/emau18/weather/view/weather /view
```



Install and setup Anax
------------------------------------

You need a Anax installation, before you can use this module. You can create a sample Anax installation, using the scaffolding utility [`anax-cli`](https://github.com/canax/anax-cli).

Scaffold a sample Anax installation `anax-site-develop` into the directory `rem`.

```
$ anax create site ramverk1-me-v2
$ cd site
```

Point your webserver to `rem/htdocs` and Anax should display a Home-page.




License
------------------

This software carries a MIT license. See [LICENSE.txt](LICENSE.txt) for details.



```
 .  
..:  Copyright (c) 2019 Emelie Åslund (emelie-aslund@hotmail.com)
```
