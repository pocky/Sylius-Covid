<p align="center">
    <a href="https://sylius.com" target="_blank">
        <img src="https://demo.sylius.com/assets/shop/img/logo.png" />
    </a>
</p>

<h1 align="center">Sylius Covid Edition</h1>

<p align="center">This is Sylius Covid Edition repository for starting new projects.</p>

Work In Progress!
-----------------

Current Plugins:
- Sitemap Plugin: https://sylius.com/plugin/google-sitemaps/
- Customer Reorder Plugin: https://sylius.com/plugin/customer-reorder-plugin/
- Customer Order Cancellation Plugin: https://sylius.com/plugin/customer-order-cancellation-plugin/
- Click 'N' Collect : https://click-n-collect.shop/ (AGPL License)
- Import Export Plugin : https://sylius.com/plugin/import-export/
- Seo Plugin: https://github.com/dediagency/sylius-seo-plugin

Be fair!
--------

This project is Open Source and use an AGPL plugin. Show us your changes and help us to build a better web.

It's also possible to help contributors with sponsoring, donations, supports and/or by purchasing service. [Send us a mail](mailto:sylius-covid@alexandre.balmes.co) if you don't know how to do that. We will happily helps you in English or French.


Automatic deployment
--------------------
<p>
<a href="https://console.platform.sh/projects/create-project/?template=https://github.com/Sylius-Covid/Sylius-Covid.git" target="_blank" title="Deploy with Platform.sh">
    <img src="https://platform.sh/images/deploy/deploy-button-lg-blue.svg">
</a>
</p>

__SymfonyCloud__ :
SymfonyCloud is available and preconfigured for a quick start. Clone this repository and follow the [official instructions](https://symfony.com/doc/master/cloud/getting-started.html#creating-the-project-in-the-cloud)


Docker installation
-------------------
If you want to install the project with docker, simply follow these steps:

```bash
$ docker-compose up -d
$ docker-compose exec php bin/console sylius:install --fixture-suite=covid
$ docker-compose exec nodejs yarn encore production
```

First Run
---------

Run `bin/console sylius:install --fixture-suite=covid`

Pimp it!
--------

__Logo__: Updates defaults logo in `assets/shop/img` directory and run `yarn encore production`

Sponsors
--------

This project was made possible thanks to the support of:

<p align="center">

[![Vanoix.com](https://vanoix.com/assets/vanoix125.png "Vanoix give us some time")](https://vanoix.com)

</p>

# Official README

About
-----

Sylius is the first decoupled eCommerce platform based on [**Symfony**](http://symfony.com) and [**Doctrine**](http://doctrine-project.org). 
The highest quality of code, strong testing culture, built-in Agile (BDD) workflow and exceptional flexibility make it the best solution for application tailored to your business requirements. 
Enjoy being an eCommerce Developer again!

Powerful REST API allows for easy integrations and creating unique customer experience on any device.

We're using full-stack Behavior-Driven-Development, with [phpspec](http://phpspec.net) and [Behat](http://behat.org)

Documentation
-------------

Documentation is available at [docs.sylius.com](http://docs.sylius.com).

Installation
------------

```bash
$ wget http://getcomposer.org/composer.phar
$ php composer.phar create-project sylius/sylius-standard project
$ cd project
$ yarn install
$ yarn build
$ php bin/console sylius:install
$ php bin/console server:start
$ open http://localhost:8000/
```

Troubleshooting
---------------

If something goes wrong, errors & exceptions are logged at the application level:

```bash
$ tail -f var/log/prod.log
$ tail -f var/log/dev.log
```

If you are using the supplied Vagrant development environment, please see the related [Troubleshooting guide](etc/vagrant/README.md#Troubleshooting) for more information.

Contributing
------------

Would like to help us and build the most developer-friendly eCommerce platform? Start from reading our [Contribution Guide](https://docs.sylius.com/en/latest/contributing/)!

Stay Updated
------------

If you want to keep up with the updates, [follow the official Sylius account on Twitter](http://twitter.com/Sylius) and [like us on Facebook](https://www.facebook.com/SyliusEcommerce/).

Bug Tracking
------------

If you want to report a bug or suggest an idea, please use [GitHub issues](https://github.com/Sylius/Sylius/issues).

Community Support
-----------------

Have a question? Join our [Slack](https://slackinvite.me/to/sylius-devs) or post it on [StackOverflow](http://stackoverflow.com) tagged with "sylius". You can also join our [group on Facebook](https://www.facebook.com/groups/sylius/)!

MIT License
-----------

Sylius is completely free and released under the [MIT License](https://github.com/Sylius/Sylius/blob/master/LICENSE).

Authors
-------

Sylius was originally created by [Paweł Jędrzejewski](http://pjedrzejewski.com).
See the list of [contributors from our awesome community](https://github.com/Sylius/Sylius/contributors).
