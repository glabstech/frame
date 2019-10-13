<?php

function _value_($ObjRef,$ifNull=""){
    $ret = $ifNull;
    if(empty($ObjRef)){
        return $ifNull;
    }
    else{
        return $ObjRef;
    }
}

/*
    get_terms that has post type support
*/
function _get_terms_($taxonomies, $args=array() ){
    global $_args;
    //Parse $args in case its a query string.
    $args = wp_parse_args($args);

    if( !empty($args['post_types']) ){
        
        $args['post_types'] = (array) $args['post_types'];
        $_args = $args;
        add_filter( 'terms_clauses','wpse_filter_terms_by_cpt',10,3);

        function wpse_filter_terms_by_cpt( $pieces, $tax, $args){
            global $wpdb,$_args;
            //Don't use db count
            $pieces['fields'] .=", COUNT(*) " ;

            //Join extra tables to restrict by post type.
            $pieces['join'] .=" INNER JOIN $wpdb->term_relationships AS r ON r.term_taxonomy_id = tt.term_taxonomy_id 
                                INNER JOIN $wpdb->posts AS p ON p.ID = r.object_id ";

            //Restrict by post type and Group by term_id for COUNTing.
            $post_types_str = implode(',',$_args['post_types']);
            $pieces['where'].= $wpdb->prepare(" AND p.post_type IN(%s) GROUP BY t.term_id", $post_types_str);

            remove_filter( current_filter(), __FUNCTION__ );
            return $pieces;
        }
    }//endif post_types set

    return get_terms($taxonomies, $args);           
}



/*
	Excerpt with limit
*/
function excerpt($limit){
	$excerpt = get_the_excerpt();
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);

	if ( strlen($excerpt) < $limit ) {
		return $excerpt;
	}
	else if ( strlen($excerpt) <= 0 ) {
		$excerpt = 'Call us on 03 9804 7710 for any enquiries';
		return $excerpt;
	}
	else {

		$break_pos = strpos($excerpt, ' ', $limit); //find next space after desired length
    	$visible = substr($excerpt, 0, $break_pos);
    	return balanceTags($visible) . " …";
	}
}

/*
    Limit Text
*/

function limit_the_text($text, $limit){
	$excerpt = $text;
	$excerpt = strip_shortcodes($excerpt);

	if ( strlen($excerpt) < $limit ) {
		return $excerpt;
	}
	else {

		$break_pos = strpos($excerpt, ' ', $limit); //find next space after desired length
    	$visible = substr($excerpt, 0, $break_pos);
    	return balanceTags($visible) . " …";
	}
}