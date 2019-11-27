Anax REM server (remserver) module implements a REM server. A REM server is a REST Mockup API, useful for development and test of REST clients.

You can use this module, together with an Anax installation, to enable a scaffolded REM server, useful for test, development and prototyping.

This remserver can be used with various HTTP methods to use CRUD operations on predefined datasets.

The data is stored in the session and can therefore not be shared between users and browsers.



Table of content
------------------------------------

* [Install as Anax module](#Install-as-Anax-module)
* [Install using scaffold postprocessing file](#Install-using-scaffold-postprocessing-file)
* [Install and setup Anax](#Install-and-setup-Anax)
* [License](#License)


Install as Anax module
------------------------------------

This is how you install the module into an existing Anax installation.

Install using composer.

```
composer require emau18/weather
```

## Configuration files for weather

```
rsync -av vendor/emau18/weather/config ./
```

## Views, Controller and Models

```
rsync -av vendor/emau18/weather/src/IpController /src

```

```
rsync -av vendor/emau18/weather/src/Models /src

```

## Router


Install using scaffold postprocessing file
------------------------------------

The module supports a postprocessing installation script, to be used with Anax scaffolding. The script executes the default installation, as outlined above.

```text
bash vendor/emau18/anax/scaffold/postprocess.d/700_weather.bash
```

The postprocessing script should be run after the `composer require` is done.



Install and setup Anax
------------------------------------

You need a Anax installation, before you can use this module. You can create a sample Anax installation, using the scaffolding utility [`anax-cli`](https://github.com/canax/anax-cli).

Scaffold a sample Anax installation `anax-site-develop` into the directory `rem`.

```
$ anax create rem anax-site-develop
$ cd rem
```

Point your webserver to `rem/htdocs` and Anax should display a Home-page.




License
------------------

This software carries a MIT license. See [LICENSE.txt](LICENSE.txt) for details.



```
 .  
..:  Copyright (c) 2019 Emelie Åslund (emelie-aslund@hotmail.com)
```
