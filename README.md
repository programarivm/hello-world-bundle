# Hello World Bundle

Hello world is a simple, ready-to-clone Symfony 5 bundle to be extended as you'd want.

Install the package with:

```console
composer require programarivm/hello-world-bundle
```

Make sure the `Programarivm\HelloWorldBundle\HelloWorldBundle` is enabled in your `config/bundles.php` file.

And... that's it!

## Usage

This bundle provides a single service to receive a radio signal from a planet far away in the galaxy, which you can autowire by using the `HelloWorld` type-hint:

```php
// src/Controller/SomeController.php

use Programarivm\HelloWorldBundle\HelloWorld;
// ...

class SomeController
{
    public function index(HelloWorld $helloWorld)
    {
        $signal = $helloWorld->signal();

        // ...
    }
}
```

This service can also be accessed directly using the id `programarivm.hello_world`.

## Configuration

The radio signal can be configured directly by creating a new `config/packages/programarivm_hello_world.yaml` file:

```yaml
programarivm_hello_world:
    name: '51 Pegasi c'
    is_exoplanet: true
    satellites: 10
```

A greeting command can optionally be added to your `config/services.yaml` file:

```yaml
Programarivm\HelloWorldBundle\Command\GreetCommand:
    tags: ['console.command']
```

Then run:

    php bin/console hello-world:greet

### Contributions

Would you help make this library better? Contributions are welcome.

- Feel free to send a pull request
- Drop an email at info@programarivm.com with the subject "Hello World Bundle"
- Leave me a comment on [Twitter](https://twitter.com/programarivm)

Many thanks.
