# gatekeeper®

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"/></a></p>

Pssst... gatekeeper was build on top of Laravel. Laravel basically is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects.

## Prerequisite

1. `php v8.x`
2. [`composer`](https://getcomposer.org)
3. [`Node.js`](https://nodejs.org)
4. `npm` (built-in when installing Nodejs)
5. Database i.e, `MySQL`

## Development env

1. clone this repo
2. cd `gatekeeper`
3. run `composer install` & `npm install`
4. type `cp .env.example .env`
5. run again, `php artisan migrate`
6. once again `php artisan key:generate`
7. finally `php artisan serve` & `npm run dev`
8. thats it, just 7 little step

## Format and Deploy

all of us love readable code, because of that, we use `prettier` for formating our code base.

run `npm run format` for see the result.

instead of typing `git add .`, `git commit` and then `git push -u origin main`. we create file `fly.sh` to push to your repository, just type `./fly.sh "very cool commit message"` and boom! it'll automatically `add`, `commit` and `push`

## Maintainer

- [krido](https://github.com/yuxxeun)
- [ibra](https://github.com/ibrahimalanshor)

## License

gatekeeper® is licensed under the terms of [MIT license](./LICENSE).

---

© 2022 valinatic.
