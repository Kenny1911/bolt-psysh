PsySH For oltCMS
======================

A extension to use the php REPL PsySH with BoltCMS v3. Learn more at [psysh.org](http://psysh.org/).

What does it do exactly?

* Loads PsySH with the application dependencies
* Gives access to the following variables:

| Variable | Description |
|---|---|
| `$app` | Instance of Pimple container |

## Install

Before using this extension, you must install `psy/psysh` package:

```bash
php composer install psy/psysh @stable
```

Then you can install extension:

```bash
php app/nut extensions:install kenny1911/bolt-psysh 1.0.0
```

## Usage

```bash
php app/nut psysh
```
