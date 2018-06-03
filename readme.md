# Project Title

Laravel Matrix is A library that can used to calculation the matrix.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Installing

For installing this library, follow this step :

```
composer require deki/matrix
```
And update the **config/app** in your root project directory:

```
'providers' => [
		/..
        Deki\Matrix\MatrixServiceProvider::class,
    ],
	
'aliases' => [
		/..
        'Matrix' => Deki\Matrix\MatrixFacade::class,
    ],
```

Just this, Now you can use this package.

## Built With

* [Composer](https://composer.org) - The web framework used
* [PHP](http://php.net) - Dependency Management


## Authors

* **Deki Akbar** - *Initial work* - [Deki Akbar](https://github.com/dekiakbar)


## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

