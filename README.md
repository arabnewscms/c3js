# c3js
c3js charts and graph 
easy way to make Chart with C3js 
#Free Package To Make Your KPI and Charts By PHPanonymous (Mahmoud Ibrahim)

# installation 

`composer require phpanonymous/c3js`

# usage 
provide this on your header or footer 
make sure to use jquery library 
`  {!! C3js::c3jAsset() !!}`


# widget 
this example to how to make your first chart 

use the C3js::widget static function

```
use Phpanonymous\C3JS\C3js;
$chart_1 = C3js::widget([
	'options'   => [
		'data'     => [
			'x'       => 'x',
			'columns' => [
				['x', '2016-01-01', '2016-02-01', '2016-03-01', '2016-04-01', '2016-05-01', '2016-06-01'],
				['data1', 30, 200, 100, 400, 150, 250],
				['data2', 50, 20, 10, 40, 15, 25],
			],
			'types'  => [
				'data1' => 'bar',
				'data2' => 'bar',
			],
		],

		'axis'        => [
			'y'          => [
				'label'     => [
					'text'     => 'Y Label',
					'position' => 'outer-middle',
				],
			],
			'x'        => [
				'type'    => 'timeseries',
				'tick'    => [
					'format' => '%Y-%m-%d',
				],
				'label'     => [
					'text'     => 'X Label',
					'position' => 'outer-middle',
				],
			],
		],
	],

]);
 ```


# this package based on c3js library 
https://c3js.org/ 

this is demo package is beta not released just soon we are publish release version 1
