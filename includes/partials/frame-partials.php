<?php

//process header
$allFields = get_fields();
if($allFields['enable_title_options']){
    $titleOption = $allFields['title_option'];
    
    include('_header.php');
} 

//process sections
$sections = $allFields['section'];//get_field('section');

if(!empty($sections)){
    $i = 0;
        $sectionIndex = 0;

        foreach($sections as $section){
            $sectionIndex++;

            $type = $section['acf_fc_layout'];
            // var_dump($section);
            //print("<pre>".print_r($section,true)."</pre>");

            $fr_component = (object)$section[$type];
            //print("<pre>".print_r($fr_component,true)."</pre>");
            //var_dump($fr_component);
            //init settings
            $fr_settings = $section['settings'];
            $fr_settings['index'] = $sectionIndex;
            $fr_settings['background'] = '';
            $fr_settings = (object)$fr_settings;

            $fr_settings->id = !empty($fr_settings->id)?'id="'.$fr_settings->id.'"':'';

            //init padding
            $fr_settings->padding =
             (!empty($fr_settings->padding['top'])?'padding-top:'.$fr_settings->padding['top'].'px;':'')
            .(!empty($fr_settings->padding['right'])?'padding-right:'.$fr_settings->padding['right'].'px;':'')
            .(!empty($fr_settings->padding['bottom'])?'padding-bottom:'.$fr_settings->padding['bottom'].'px;':'')
            .(!empty($fr_settings->padding['left'])?'padding-left:'.$fr_settings->padding['left'].'px;':'');

            //init margin
            $fr_settings->margin =
             (!empty($fr_settings->margin['top'])?'margin-top:'.$fr_settings->margin['top'].'px;':'')
            .(!empty($fr_settings->margin['right'])?'margin-right:'.$fr_settings->margin['right'].'px;':'')
            .(!empty($fr_settings->margin['bottom'])?'margin-bottom:'.$fr_settings->margin['bottom'].'px;':'')
            .(!empty($fr_settings->margin['left'])?'margin-left:'.$fr_settings->margin['left'].'px;':'');

            //init zindex
            $fr_settings->zindex = !empty($fr_settings->zindex)?'z-index:'.$fr_settings->zindex:'';
            //init background
            $fr_settings->background =
            (!empty($fr_settings->background_image)?'background-image:url('.$fr_settings->background_image['url'].');':'').
            (!empty($fr_settings->background_color)?'background-color:'.$fr_settings->background_color.';':'');
            

            include('_'.$type.'.php');
            
        }
}