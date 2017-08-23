Register New User:
Route => http://127.0.0.1:8000/api/register
Send Json Object
{
	"name":"vindite",
	"email":"vindite@gmail.com",
	"password":"123456"
}


Login with a registered User:
http://127.0.0.1:8000/api/login
Send Json Object
{
	"email":"vindite@sample.com",
	"password":"123456"
}

Run Seeds DB
php artisan migrate:refresh --seed