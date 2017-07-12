# Simple Amadeus Package
A Simple Amadeus To Get Information Hotels And Rental Cars By Amadeus.com. Creation and development By PhpAnonymous ( phpanonymous.com )

Laravel Version 5 and Above 

##Install with Composer 
```php
composer require AmadeusNonymous/Amadeus:dev-master
```
# Provider Class 
put on your ` config/app.php ` in provider array this class
```php
  AmadeusNonymous\Amadeus\AmadeusProvider::class,
 
```

#Aliases 
add this in aliases array
```php 
'Amadeus' => AmadeusNonymous\Amadeus\Amadeus::class,
```
#publish 
with composer run this command `php artisan vendor:publish `

now you can check this file amadeus.php on config path 
 



#usage 

you can use The Amadeus Class anywhere you want it , in Controller or Blade File 
#simple Codes
```php
 /*
   $data = [
   'origin'=>'NYC',
   'destination'=>'LAX',
   'departure_date'=>'2017-07-12--2017-07-26',
   'one-way'=>'false',
   'duration'=>1,
   'direct'=>'false',
   'max_price'=>'100',
   'aggregation_mode'=>'DAY',
  ];
  $flights1 = Amadeus::make($data,'flights/inspiration-search');  
  */

  /*
  $data = [
   'origin'=>'NYC',
   'origin'=>'AFB',
   'destination'=>'LON',
   'departure_date'=>'2017-07-12--2017-07-26',
   'one-way'=>'false',
   'duration'=>1,
   'direct'=>'false',
   'max_price'=>'100',
   'officeId'=>'xxxxxxxxx',
   'aggregation_mode'=>'DAY',
  ];
  $flights = Amadeus::make($data,'flights/extensive-search');
  */

 /*
  $data = [
   'origin'=>'BER',
   'destination'=>'LON',
   'departure_date'=>'2017-08-25',
   'return_date'=>'2017-08-28',
   'arrive_by'=>'2017-08-25T16:00',
   'return_by'=>'2017-08-28T16:00',
   'adults'=>'1',
   'children'=>'1',
   'infants'=>'0',
   'include_airlines'=>'',
   'exclude_airlines'=>'',
   'nonstop'=>'false',
   'one-way'=>'false',
   'duration'=>1,
   'max_price'=>980,
   'currency'=>'USD',
   'travel_class'=>'ECONOMY',
   'number_of_results'=>'ECONOMY',
  ];

  $flights = Amadeus::make($data,'flights/low-fare-search');
 */
/*
  $data = [
   'location'=>'BOS',
   'check_in'=>'2017-07-12',
   'check_out'=>'2017-07-16',
   'radius'=>'42',
   'lang'=>'EN',
   'currency'=>'USD',
   //'chain'=>'6C',
   'max_rate'=>'500',
   'number_of_results'=>'5',
   'all_rooms'=>'false',
   'show_sold_out'=>'false',
    
    
   ];
   $flights = Amadeus::make($data,'hotels/search-airport','GET');
  */

   /*
  $data = [
   'location'=>'BOS',
   'check_in'=>'2017-07-12',
   'check_out'=>'2017-07-16',
   'lang'=>'EN',
   'currency'=>'USD',
   //'chain'=>'6C',
   'max_rate'=>'500',
   'number_of_results'=>'5',
   'all_rooms'=>'false',
   'show_sold_out'=>'false',
   'latitude'=>'36.0857',
   'longitude'=>'-115.1541',
   'radius'=>'42',
   ];
   return Amadeus::make($data,'hotels/search-circle','GET');
   */
    
   /*
   $data = [
   'south_west_corner'=>'38.8675,-77.1457',
   'north_east_corner'=>'38.9072,-77.0632',
   'check_in'=>'2017-07-12',
   'check_out'=>'2017-07-16',
   'destination'=>'CAI',
   'one-way'=>'true',
  // 'duration'=>1,
   'direct'=>'false',
   'max_price'=>'500',
  ];
   return dd(Amadeus::make($data,'hotels/search-box','GET'));
   */


````

  
if you have any questions about this package join us on group facebook  (https://www.facebook.com/groups/anonymouses.developers) 

Enjoy :) 


