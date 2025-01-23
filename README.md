
## Finance

Suivi des dépenses et des revenus personnels avec laravel et vuejs 


## Installation

- Clone le repertoire
```
git clone https://github.com/AndryOnja/finance.git
```
- Entrer dans le repertoire
```
cd finance
```
- Copy .env.example file
```
cp .env.example .env
```
- Installer composer
```
composer imstall
```
- Generer la key
```
php artisan key:generate
```
- Installer  node
```
npm install
```
- Modifier les infos de la BD dans le fichier .env 
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=finance
DB_USERNAME=root
DB_PASSWORD=
```
- faire une migration avec les seeder
```
php artisan migrate --seed
```

- Lancer le serveur de dev dans un terminal
```
php artisan serve
```
- Dans un autre terminal
```
npm run dev
```
- Dans le navigateur
```
http://127.0.0.1:8000/
```

## Admin infos
- Admin
```
email:admin@gmail.com
Password:admin1234
```

## Credit

- **[ONjalalaina](https://github.com/AndryOnja/)**

