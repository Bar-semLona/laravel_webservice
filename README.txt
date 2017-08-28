#Get Started

##Run Seeds DB
###php artisan migrate:refresh --seed

#How to use REST Resources

##Register New User:
###Route => http://127.0.0.1:8000/api/register
###Send Json Object
{
	"name":"Vinicius Oliveira",
	"email":"vinicius_o.a@live.com",
	"password":"123456"
}


##Login with a registered User:
###http://127.0.0.1:8000/api/login
###Send Json Object
{
	"email":"vinicius_o.a@live.com",
	"password":"123456"
}

##Return a JSON object with all data events
http://localhost:8000/api/events?api_token=FogPvAbPKFq0JrQ1zcNw0AH6R0K5Ou6MUBSHCeDDDxBjwgr4oPCIe2V46NSG
###Resource Params{
	Base URI: http://localhost:8000/api/
	Resource: events
	api_token: (User Logged in Token)
}
