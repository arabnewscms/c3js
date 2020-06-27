<?php
namespace Phpanonymous\C3JS;
use Illuminate\Support\ServiceProvider;

class C3js extends ServiceProvider {

	public static function c3jAsset() {
		$asset = '';
		$asset .= '<link href="'.url('css/c3js/c3.css').'" rel="stylesheet">';
		$asset .= '<script src="'.url('js/c3js/c3.min.js').'"></script>';
		$asset .= '<script src="'.url('js/c3js/d3.min.js').'"></script>';
		return $asset;
	}

	public static function widget($data, $chart_name = null) {

		$data       = json_encode($data);
		$chart_name = $chart_name === null?'#chart_'.rand(0000, 999999):$chart_name;
		$var_name   = rand(0000, 999999);

		$c3jdata = '';
		$c3jdata .= '<div id="'.$chart_name.'"></div>';
		$c3jdata .= '<script type="text/javascript">';
		$c3jdata .= 'var chart_'.$var_name.' = c3.generate({bindto: "'.$chart_name.'",'.$data.'});';
		$c3jdata .= '</script>';
		return $c3jdata;
	}
}
