**V 1.0.0**
# Endpoints

### GET: /crossings
Returns a list of all crossings and thier current status.


##### Returns
```
{
	result: "OK",
	data: [
		{
			id: 12345,
			location: {
				lat: 12.513456,
				lon: 12.513456
			},
			status: "down"
		},
		{...}
	]
}
```

### GET: /crossings/{crossing_id}
Returns all the metadata related to a crossing.

##### Params
| Required | Name        | Type       | Location |
| -------- | ----------- | ---------- | -------- |
| ✅       | crossing_id | Integer    | URL      |


##### Returns
```
{
		result: "OK",
	data: {
		id: 12345,
		type: "road",
		status: "down",
		name: "Caterbury Crossing Five",
		location: {
			city: "Canterbury",
			country: "UK",
			postcode: "CT1 4DD",
			
			lat: 12.513456,
			lon: 12.513456
		},
		image: "http://picserve.com?id=123",
		line: {
			trainsPerDay: 10,
			northSpeed: 60,
			southSpeed: 70,
		}
	}
}
```

### GET: /crossings/{crossing_id}/times
Returns the times that a crossing will be down for the specified crossing id, between the supplied date range.

##### Params
| Required | Name        | Type       | Location |
| -------- | ----------- | ---------- | -------- |
| ✅       | crossing_id | Integer    | URL      |
| ✅       | start_date  | ISO String | GET      |
| ✅       | end_date    | ISO String | GET      |


##### Returns
```
{
	result: "OK",
	data: [
		{
			downTime: "2015-06-02 12:05Z+0100",
			upTime: "2015-06-02 12:08Z+0100",
			fromTime: "2015-06-02 12:00Z+0100",
			toTime: "2015-06-02 12:12Z+0100",
			duration: 480
		},
		{...}
	]
}
```

## Errors

Requests may return an error. If its a catchable error then it should return the error code and then a nice message. If its an unknown error then error should contain `unknown` and still provide the error message.

#### Crossing ID not valid
```
{
	result: "ERROR",
	error: "crossing.not_found"
	error_message: "Crossing id 34566 does not exist"
}
```

#### Unknown
```
{
	result: "ERROR",
	error: "unkown"
	error_message: "Fatal PHP error. Error on in trains.php line 45."
}
```