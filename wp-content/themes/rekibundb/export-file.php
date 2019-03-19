<?php 

header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename=file.csv');
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
echo "\xEF\xBB\xBF";

// WP_Query arguments
$args = array(
	'post_type'              => array( 'master' ),
);

// The Query
$query = new WP_Query( $args );

$df = fopen("php://output", 'w');
   fputcsv($df, array('master name', 'program info') );

if(count($query->posts) > 0){
	foreach ($query->posts as $k => $v) {
		$row = array();
		$row[] = get_the_title($v->ID);

		$list = get_field("list" , $v->ID);
		if($list){
			foreach ($list as $k_c => $k_v) {
				$row[] = $k_v['title'];
				foreach ($k_v['content'] as $content_k => $content_v) {
					$row[] = get_the_title($content_v["program"]->ID);
				}
			}
		
		}

		fputcsv($df, $row);
		
	}
}

exit;

?>