# OneSignal Leaf PHP Extension

This repository provides an extension for the Leaf PHP framework that integrates OneSignal, a powerful and reliable push notification service. This extension simplifies the process of sending push notifications through OneSignal by wrapping the OneSignal API with a convenient PHP class.

> [!IMPORTANT]
> This extension has been created as part of a livestream series, is not actively maintained, and should not be used in production. Please check out the series on [YouTube](#) for more information.

## Features

- Easy integration with OneSignal using Leaf PHP framework.
- Simple setup with minimal configuration.
- Provides a ready-to-use OneSignal client for your Leaf PHP applications.

## Installation

To install this extension, you can use Composer. Run the following command in your project directory:

```bash
composer require your-namespace/onesignal-leaf-extension
```

## Usage

### Configuration

First, ensure you have your OneSignal REST API key and User Auth key. You can obtain these from the OneSignal dashboard.

### Example

Here is an example of how to use this extension in your Leaf PHP application:

```php
require 'vendor/autoload.php';

use OneSignal\OneSignal;

// Initialize the OneSignal client with your REST API key and User Auth key
$rest_api_key = 'YOUR_REST_API_KEY';
$user_auth_key = 'YOUR_USER_AUTH_KEY';
$oneSignal = new OneSignal($rest_api_key, $user_auth_key);

// Get the OneSignal client
$client = $oneSignal->getClient();

// Now you can use the $client to send notifications, manage devices, etc.
```

## API

### `OneSignal`

The main class of this extension. It initializes the OneSignal client.

#### `__construct($rest_api_key, $user_auth_key)`

- `$rest_api_key`: Your OneSignal REST API key.
- `$user_auth_key`: Your OneSignal User Auth key.

Initializes the OneSignal client with the provided keys.

#### `getOneSignalClient()`

Returns the initialized OneSignal client instance.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Acknowledgements

- [OneSignal](https://onesignal.com/) for providing a robust push notification service.
- [Leaf PHP Framework](https://leafphp.dev/) for providing a simple and powerful PHP framework.
- [GuzzleHttp](http://docs.guzzlephp.org/en/stable/) for providing a reliable HTTP client.
