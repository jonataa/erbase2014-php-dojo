Erbase 2014 – PHP Coding Dōjō
=============================

Sobre
------
Encontro realizado no dia 21/05 na UEFS durante o Erbase 2014. Os slides da apresentação podem ser baixados [aqui](https://speakerdeck.com/jonataa/erbase-2014-php-coding-dojo).

Requisitos Mínimos
-------------------
* PHP >= 5.4 [Getting Started](http://www.phptherightway.com/#getting_started)
* Composer [Download](https://getcomposer.org/download/)
* Git [Download](http://git-scm.com/downloads)

Clonar o Repositório
--------------------
Abrir o terminal e digitar os comandos abaixo.
```shell
git clone https://github.com/jonataa/erbase2014-php-dojo.git
```

Executar os testes
-----------------------
Digitar os comandos abaixo na linha de comando.
```shell
cd erbase2014-php-dojo/
composer install
./vendor/bin/phpunit tests/
```

Resultado esperado
------------------
```shell
PHPUnit 4.1.0 by Sebastian Bergmann.

Configuration read from /path/to/your/project/erbase2014-php-dojo/phpunit.xml

..................

Time: 122 ms, Memory: 5.50Mb

OK (18 tests, 22 assertions)
```

Créditos
--------
* Calebe Oliveira <becalebe@gmail.com>
* Jonata Weber <jonataa@gmail.com>