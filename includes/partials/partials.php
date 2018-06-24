<?php

$sections = get_field('sections');
	
if(!empty($sections)){
    if(!empty($sections['content_block'])){
        $i = 0;
        foreach($sections['content_block'] as $section){
            //var_dump($section);
            $type = $section['acf_fc_layout'];
            //$section[$type]
            include($type.'.php');
            
        }
    }
}