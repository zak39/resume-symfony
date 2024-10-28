# Resume Json

This project is a rusme built with Symfony. It's designed as a learning tool for practicing asset mapper and Tailwind.

## Start project

First, install all dependencies using Composer:

```bash
composer install
```

Next, start the database using Docker Compose in detached mode:

```bash
docker compose up -d
```

Then, start the Symfony development server:

```bash
symfony server:start -d
```

Visit http://localhost:8000 in your browser to see the application in action.


To build Tailwind, run this command :

```bash
symfony console tailwind:build
```

To watch Tailwind, run this command :

```bash
symfony console tailwind:build --watch
```