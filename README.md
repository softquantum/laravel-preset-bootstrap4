# Laravel 5.5.x Front-end Preset For Bootstrap 4 beta

Preset for Bootstrap 4 scaffolding on new Laravel 5.5.x project.
This preset uses bootstrap native to avoid the use of JQuery and includes pagination stubs.

*Current version*: **Bootstrap 4**

## Usage
0. If not a fresh install of Laravel, make sure you committed to your repository or that you have a backup of your files.
1. Fresh install Laravel 5.5.x and `cd` to your app.
2. Install this preset via `composer require softquantum/laravel-preset-bootstrap4 --dev`. Laravel 5.5.x will automatically discover this package. No need to register the service provider.
3. Use `php artisan preset bootstrap4` for basic Bootstrap4 preset. **OR** Use `php artisan preset bootstrap4-auth` for basic preset, Auth route entry and Bootstrap4 Auth views in one go. (**NOTE**: If you run this command several times, be sure to clean up the duplicate Auth entries in `routes/web.php`)
4. `npm install`
5. `npm run dev`

## License
MIT

## Notes
Share if you made a better version. Submit a PR or share the link to your repo. 
