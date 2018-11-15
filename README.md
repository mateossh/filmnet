# FILMNET
Our first battle with PHP. Filmweb clone, made for school purposes.

## INSTALLATION

### Without Docker
1. Set up database config in `config.php`
2. Import tables schemas (and test data) from `filmnet.sql`
3. If you want - fill database with your own ideas xD

### With Docker
1. Change db password in `docker-compose.yml`
2. Change db host, port and password in `config.php` (by default filmnet uses 9906 as db port)
3. `docker-compose build`
4. `docker-compose up -d`

## LICENCE

### DON'T BE A DICK PUBLIC LICENSE

> Version 1.1, December 2016

> Copyright (C) 2018 crapware

 Everyone is permitted to copy and distribute verbatim or modified
 copies of this license document.

> DON'T BE A DICK PUBLIC LICENSE
> TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION

 1. Do whatever you like with the original work, just don't be a dick.

     Being a dick includes - but is not limited to - the following instances:

	 1a. Outright copyright infringement - Don't just copy this and change the name.
	 1b. Selling the unmodified original with no work done what-so-ever, that's REALLY being a dick.
	 1c. Modifying the original work to contain hidden harmful content. That would make you a PROPER dick.

 2. If you become rich through modifications, related works/services, or supporting the original work,
 share the love. Only a dick would make loads off this work and not buy the original work's
 creator(s) a pint.

 3. Code is provided with no warranty. Using somebody else's code and bitching when it goes wrong makes
 you a DONKEY dick. Fix the problem yourself. A non-dick would submit the fix back or submit a [bug report](https://www.chiark.greenend.org.uk/~sgtatham/bugs.html)
