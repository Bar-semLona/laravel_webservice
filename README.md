# Web-Service Laravel 5
Project developed for the TSI course.

## Authors

* **Kevin Belletarde** - *(https://github.com/belletarde)
* **Laura** - *(#)
* **Mateus Martins** - *(https://github.com/MateusMartins)
* **Tonielton Mota** - *(https://github.com/tonimota)
* **Vinicius Oliveira** - *(https://github.com/vindite)

## Get in Started

Running a Seeds DB
php artisan migrate:refresh --seed

### How to use REST Resources

* Register New User:
    * Route => http://127.0.0.1:8000/api/register
    * Making a Json POST Request
    * {
    	"name":"Vinicius Oliveira",
    	"email":"vinicius_o.a@live.com",
    	"password":"123456"
    }


### Login with a registered User:
* Route => http://127.0.0.1:8000/api/login
    * Making a Json POST Request
    * {
    	"email":"vinicius_o.a@live.com",
    	"password":"123456"
    }

### Return a JSON object with all data events
* Route => http://localhost:8000/api/events?api_token=FogPvAbPKFq0JrQ1zcNw0AH6R0K5Ou6MUBSHCeDDDxBjwgr4oPCIe2V46NSG

    * Resource Params {
    	Base URI: http://localhost:8000/api/
    	Resource: events
    	api_token: (User Logged in Token)
    }

## License

This project is licensed under the MIT License.
