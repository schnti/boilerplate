# Kirby Umami plugin

A simple Kirby plugin that

* adds a frontend snippet for tracking page views with Umami
* adds an Analytics link to the Kirby Panel (opens Umami in a new tab)

---

## Commercial Usage

This plugin is free. If you use it in a commercial project, please consider:

* [making a donation](https://www.paypal.me/schnti/5)

---

## Installation

Via Composer:

```bash
composer require schnti/umami
```

Or download the plugin from the GitHub releases and place it in:

```
/site/plugins/umami
```

---

## Configuration

Add the following to your `config/config.php`:

```php
'schnti.umami' => [
  // Required: Umami share link (opens from the Panel menu)
  'sharedLink' => 'https://stats.example.com/share/XXXXXXXX',

  // Required: Umami tracking script
  // Can be umami.io or a self-hosted instance
  'script' => 'https://stats.example.com/script.js',

  // Required: Website ID
  'id' => 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx',
],

```

### Notes

* `sharedLink` should point to an **Umami share URL** (read-only dashboard).
* `script` must be the standard Umami tracking script.
* Works with Umami v2+ (cloud or self-hosted).

## Frontend usage

Add the snippet inside your site’s `<head>` section:

```php
<?php snippet('umami'); ?>
```

### Behavior

The snippet outputs **nothing** when:
  * Kirby is in `debug` mode
  * a user is logged into the Panel

This prevents tracking editors and local development traffic.

## Content Security Policy (CSP)

A minimal CSP setup for a self‑hosted Umami instance might look like this:

```txt
script-src 'self' https://stats.example.com;
connect-src https://stats.example.com;
```

No `frame-src`, no `unsafe-eval`, no inline scripts required.