<?php
/**
 * 文件描述
 *
 * @copyright  2012 mwg0304@163.com
 * @author	   mwg
 * @createdate 2012-10-22
 * @version    $Id$
 */
include('ExcelExport.class.php');

$arr[] = array(
		array('val'=>'这是第一个excel导出功能', 'font-size'=>18,'colspan'=>4),
);
$arr[] = array(
		array('val'=>'序号','align'=>'center','width'=>10),
		array('val'=>'标题','align'=>'center','width'=>40),
		array('val'=>'描述','align'=>'center','width'=>50),
		array('val'=>'明细','align'=>'center','width'=>30),
		array('val'=>'备注','align'=>'center','width'=>30),
);
$arr[] = array(
		array('val'=>'1','rowspan'=>3),
		array('val'=>'商品1','rowspan'=>3),
		array('val'=>'这是商品1的描述','rowspan'=>3),
		array('val'=>'1001'),
		array('val'=>'这是备注信息1'),
);
$arr[] = array(
		array('val'=>null),
		array('val'=>null),
		array('val'=>null),
		array('val'=>'1002'),	
);
$arr[] = array(
		array('val'=>null),
		array('val'=>null),
		array('val'=>null),
		array('val'=>'1003'),
		array('val'=>'这是备注信息3'),
);
$arr[] = array(
		array('val'=>'2','rowspan'=>3),
		array('val'=>'商品2','rowspan'=>3),
		array('val'=>'这是商品2的描述','rowspan'=>3),
		array('val'=>'2001'),

);
$arr[] = array(
		array('val'=>null),
		array('val'=>null),
		array('val'=>null),
		array('val'=>'2002'),
);
$arr[] = array(
		array('val'=>null),
		array('val'=>null),
		array('val'=>null),
		array('val'=>'2003'),
);
$arr[] = array(
		array('val'=>'3'),
		array('val'=>'商品3'),
		array('val'=>'这是商品3的描述'),
		array('val'=>'3002'),
);

$excel = new ExcelExport('excel导出');
foreach($arr as $val){
	$excel->setCells($val);
}
$excel->save();

?>