# Libreria Manager - Laravel CRUD

Progetto sviluppato in **Laravel 12** per la gestione di prodotti (libri/fumetti) e categorie.

L'applicazione permette di creare, modificare, visualizzare ed eliminare prodotti e categorie attraverso un sistema CRUD completo.

---

#  Funzionalità

## Gestione Prodotti

* Creazione prodotto
* Modifica prodotto
* Eliminazione prodotto
* Visualizzazione prodotto
* Caricamento immagine prodotto
* Selezione categoria

## Gestione Categorie

* Creazione categoria
* Modifica categoria
* Eliminazione categoria
* Visualizzazione categoria
* Visualizzazione prodotti appartenenti alla categoria

---

#  Struttura del progetto

```
app
 ├── Models
 │    ├── Product.php
 │    └── Category.php
 │
 ├── Http/Controllers
 │    ├── ProductController.php
 │    └── CategoryController.php

resources/views
 ├── layouts
 │    └── app.blade.php
 │
 ├── products
 │    ├── index.blade.php
 │    ├── create.blade.php
 │    ├── edit.blade.php
 │    └── show.blade.php
 │
 ├── categories
 │    ├── index.blade.php
 │    ├── create.blade.php
 │    ├── edit.blade.php
 │    └── show.blade.php
 │
 └── home.blade.php
```

---

# Relazioni Database

Una **categoria può avere molti prodotti**.

```
Category
   ↓
Product
```

Laravel Eloquent:

```php
Category -> hasMany(Product)
Product -> belongsTo(Category)
```

---

# Tecnologie utilizzate

* Laravel 12
* PHP
* MySQL
* Bootstrap 5
* Vite
* Blade Template Engine

---

# Avvio del progetto

Installare le dipendenze:

```
composer install
```

Installare le dipendenze frontend:

```
npm install
```

Avviare vite:

```
npm run dev
```

Avviare il server Laravel:

```
php artisan serve
```

---

#  Autore

Progetto sviluppato per esercizio CRUD Laravel.
