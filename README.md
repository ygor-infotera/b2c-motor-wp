# Infotravel Motor WordPress Plugin

## Version 3.1 - Unified Motor

This WordPress plugin provides integration with Infotravel's search engines for hotels, flights, packages, and services through a single, unified interface.

## Features

### Unified Motor Shortcode

The `[infotravel_motor_unified]` shortcode provides a complete, tabbed interface that includes all search engines in one place:

- **Hotel Search** - Accommodation search
- **Service Search** - Service search
- **Flight Search** - Air ticket search
- **Dynamic Package** - Build your own package
- **Flight Package** - Flight + hotel packages
- **Hotel Package** - Hotel packages
- **Bus + Hotel Package** - Bus + hotel packages
- **Bus + Services Package** - Bus + services packages

### Configuration Options

The plugin includes configurable options for:

- **jQuery Loading** - Automatically load jQuery
- **jQuery UI Loading** - Automatically load jQuery UI
- **CSS Loading** - Automatically load motor CSS
- **Tabs Loading** - Enable/disable tab functionality

## Installation

1. Upload the plugin to your WordPress plugins directory
2. Activate the plugin
3. Configure your Infotravel credentials in the admin panel
4. Use the shortcode in your posts or pages

## Usage

### Single Shortcode

```php
<?php do_shortcode("[infotravel_motor_unified]"); ?>
```

Or simply:

```
[infotravel_motor_unified]
```

## Configuration

1. Go to **Settings > Infotravel** in your WordPress admin
2. Enter your Infotravel credentials:
   - **Domain** - Your Infotravel B2C domain
   - **Key** - Your API key
   - **Company** - Your company identifier
3. Configure dependency loading options
4. Save changes

## Requirements

- WordPress 3.7 or higher
- PHP 7.0 or higher
- Infotravel B2C account

## Support

For support, please contact Infotera Tecnologia at suporte@infotera.com.br

## Changelog

### Version 3.1

- Updated admin configuration placeholders with correct default URLs
- Improved user experience with more descriptive placeholder text
- Fixed placeholder text for engine base URL and API base URL

### Version 3.0

- Complete rewrite with unified motor interface
- Single shortcode for all search engines
- Modern tabbed interface
- Configurable dependency loading
- Removed legacy individual motor shortcodes
