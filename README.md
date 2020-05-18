# email_notification
This is a library uses composer as the basis for generating email notification


# Notification library via email using phpMailer

This library has the function of sending e-mail using the phpmailer library. Doing this in an uncomplicated way is essential for any system.

To install the library, run the following command:

``` sh
composer require junior-fernandes/email_notification
```

To use the library, simply require the composer to autoload, invoke the class, and call the method:

``` sh
<?php

require __DIR__.'/vendor/autoload.php';

use Notification\Email;

$email = new Email();

$email->sendEmail("Subject", "Content", "address@email.com", "Address Name");
```

Note that the entire configuration of sending the email is using the magic method builder! Once the builder method has been invoked within your application, your system will be able to take the shots.

### Developer
* [Junior Fernandes] - Developer of this library
* [phpMailer] - Lib to send Email

License
----

MIT

[//]: #
[Junior Fernandes]: <mailto: ademilsonjnr@gmail.com>