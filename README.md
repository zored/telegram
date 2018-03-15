# PHP Telegram API

[![Latest Stable Version](https://poser.pugx.org/zored/telegram/version.png)](https://packagist.org/packages/zored/telegram)
[![Build Status](https://travis-ci.org/zored/telegram.svg?branch=master)](https://travis-ci.org/zored/telegram)
[![Coverage Status](https://coveralls.io/repos/github/zored/telegram/badge.svg?branch=master)](https://coveralls.io/github/zored/telegram?branch=master)
[![Code Quality Status](https://scrutinizer-ci.com/g/zored/telegram/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/zored/telegram/?branch=master)
[![AppVeyor Status](https://ci.appveyor.com/api/projects/status/ewh9cu52r2e5sukd?svg=true
)](https://ci.appveyor.com/project/zored/telegram)

Subset of Telegram API that you are free to extend.

## Features
- Object oriented.
- Based on PHP7.1.
- Easy to extend.
- Easy to use.

## Example
- Copy `.env.dist` into `.env` and fill your values.
- [Warm-up session cache](./bin/warmup.php) (optional, but first run takes time). 
- Run:
    - [Client](./bin/client.php)
    - [Server](./bin/bot.php)
