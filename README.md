# meal-recommendation-api
API for meals recommendation based on customer allergies

URL : https://edenmeals.herokuapp.com

## Get Allergies

* Endpoint
 GET `{{URL}}/meals/allergies`

Header Authentication: None

Request : Empty

## Get Proteins
* Endpoint
 GET `{{URL}}/meals/proteins`

Header Authentication: None

Request : Empty

## Get Sides
* Endpoint
 GET `{{URL}}/meals/sides`

Header Authentication: None

Request : Empty

## Get Meals
* Endpoint
 GET `{{URL}}/meals`

Header Authentication: None

Request : Empty

## Get Single Meal Recommendation
* Endpoint
 GET `{{URL}}/meals/recommendation`

Header Authentication: None

Request : 
```
{
    "allergies":[["65fa1abf-bab1-4a3f-99a7-164fcfaee628", "adcbc6e1-b4b3-4b7a-b161-54be12b9bc48"]],
    "length":"10"
}

```

## Get Multiple Meal Recommendation
* Endpoint
 GET `{{URL}}/meals/recommendation`

Header Authentication: None

Request : 
```
{
    "allergies":[["65fa1abf-bab1-4a3f-99a7-164fcfaee628", "adcbc6e1-b4b3-4b7a-b161-54be12b9bc48"], ["16b18705-7eb9-47f2-8ae5-e093dd9f6bae"]],
    "length":"10"
}
```

Notes on Recommendation Endpoint
* Multiple allergies arrays represents ability to fetch meal recommendation for more than one user
* Allergies are represented in the Request using their ids, which can be fetched from the Get Allergies endpoint
* length field is optional for pagination






