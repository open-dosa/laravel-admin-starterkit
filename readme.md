
## About Laravel SBadmin themes
This [Sbadmin2 theme](https://startbootstrap.com/theme/sb-admin-2) based laravel package 


## Dependency

[thomaspaulson/vendor-plugin](https://github.com/thomaspaulson/vendor-plugin)  for exposing assets in 'vendor/*' folders

## Installation

run  composer require opendosa/sbadmin

### How to customise

php artisan vendor:publish --provider="LastGrade\SBAdmin\CMSServiceProvider" --tag="views"
And rename 'resources/packages/lastgrade/cms/...' to 'resources/vendor/opendosa/sbadmin/...' in 'resource/views/layouts' files

## License

The SBadmin is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).