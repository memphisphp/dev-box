# Memphis PHP Dev Box

## Requires
* [VirtualBox](https://www.virtualbox.org/)
* [Vagrant](http://www.vagrantup.com/) >= v1.2.0 (please use [installer](http://downloads.vagrantup.com/) provided by Vagrant)
    * Please see [Vagrant CLI documentation](http://docs.vagrantup.com/v2/cli/index.html) if you're not already familiar
* git and a [GitHub](http://github.com) account
    * Unfamiliar with git?  Check out GitHub's excellent [help site](https://help.github.com/).

## Usage
* First, add the following line to your `/etc/hosts`:
```
192.168.56.101    sandbox.dev
```
* [Fork and clone](https://help.github.com/articles/fork-a-repo) this repository
* `cd` into repo directory
* `$ vagrant up`
* Start developing!
    * In almost all cases, any code you write should be placed in the project root
    * Any pages, images, javascript, and css should be added to the `public` directory
    * View your changes/progress at http://sandbox.dev (this assumes you've added sandbox.dev to your `/etc/hosts`)

## Includes
* [Composer](http://getcomposer.org)
* [Bootstrap](http://twitter.github.io/bootstrap/)
* [Slim Framework](http://www.slimframework.com/)
* PHP 5.4.x
* [Xdebug](http://xdebug.org)
* Much more!

## Contributing
* Please review GitHub's ["Fork A Repo"](https://help.github.com/articles/fork-a-repo) instructions.
* When issuing a pull request, please create it agains the `develop` branch

## Help
* Join us on irc.freenode.net in \#memphisphp
* Open an issue here on Github
* Ping [@MemphisPHP](http://twitter.com/memphisphp)

## Credits
* Brought to you by [Memphis PHP](http://memphisphp.org)
* Created with Vagrant and Puppet using [PuPHPet](https://puphpet.com/)
