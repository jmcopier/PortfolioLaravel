Mijn portfolio pagina gemaakt met Laravel Sail.

## Vereisten

- <b>Docker</b>: Zorg ervoor dat Docker geïnstalleerd is op je pc. Docker is the downloaden op de site van <a href="https://www.docker.com/">Docker</a>.
- <b>WSL2</b>: Kan geïnstalleerd worden op de website van <a href="https://learn.microsoft.com/en-us/windows/wsl/install">Windows</a>. Zorg ervoor dat in Docker WSL2 als back-end aanstaat.

## Stappenplan

Zorg dat de commands in de wsl worden uitgevoerd. Dit kan in elke terminal:

1. Open wsl en ga naar de root directory
```bash
wsl
```
```bash
cd ~
```

2. Clone de repository
```bash
git clone https://github.com/jmcopier/PortfolioLaravel.git <project-name>
```

3. Ga naar de juiste directory en open de Code Editor
```bash
cd <project-name>
code .
```

4. Maak een enviroment file aan
```bash
cp .env.example .env
```

Zorg dat in de enviroment file de variables goed staan

```env
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=sail
DB_PASSWORD=password
```

5. Installeer de composer dependencies
   
```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php84-composer:latest \
    composer install --ignore-platform-reqs
```

6. Run de applicatie in docker
   
```bash
./vendor/bin/sail up -d
```

7. Genereer een APP_KEY

```bash
./vendor/bin/sail artisan key:generate
```

8. Installeer de npm

```bash
./vendor/bin/sail npm i
```

9. Migrate een seed de database

```bash
./vendor/bin/sail artisan migrate --seed
```
