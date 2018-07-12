# Affair


[![GitHub issues](https://img.shields.io/github/issues/Samwel24/affair.svg)](https://github.com/Samwel24/affair/issues)
[![license](https://img.shields.io/github/license/Samwel24/affair.svg)](LICENSE.md)
[![GitHub forks](https://img.shields.io/github/forks/Samwel24/affair.svg)](https://github.com/Samwel24/affair/network)
[![GitHub stars](https://img.shields.io/github/stars/Samwel24/affair.svg)](https://github.com/Samwel24/affair/stargazers)



## Table of Contents

- [Install](#install)
- [Documentation](#documentation)
- [License](#license)

## Install

To install the Affair

first download via composer by running the command `composer require dreamaker\affair`
if you do not have composer you could just clone this repo

after download 

Then include or into your project directory and put this at the top of you class or file 
``` use Dreamaker\Affair\Affair;```

## Documentation

``` Affair::put($key, $value)```

This method is used to save items into the session, but adding a key and value

``` Affair::get($key)```

This method is used to retrieve items from a session

``` Affair::all()```

This returns all session saved

To start a session, all you have to do is instantiate a new affair class

``` $affair = new Affair;```
This will start a session

``` Affair::destroy()```
This will destroy all session variables in existence

``` Affair::exists($key)```
This will return true if the session exists with the $key parameter passed into it otherwise false

## License

Affair is free software distributed under the terms of the MIT license.

## Contribution guidelines

Please report any issue you find in the issues page.  
Pull requests are welcome.