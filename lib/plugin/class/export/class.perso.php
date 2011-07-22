<?php

class perso {
    
    public function export($stock, $export) {
        
        $stats['add'] = 0;
        $stats['maj'] = 0;
        $stats['del'] = 0;
        
        $smarty = new smarty();
        $smarty->template_dir = TEMPLATE.'/flux/';
        $smarty->compile_dir  = CACHE.'/flux/';
        
        $autos = array();
        while($stock->next()):
            $auto = new auto($stock);
            $auto->getSite();
            if(is_array($auto->get('photo'))):
                foreach($auto->get('photo') as $photo):
                    if(file_exists(WEBROOT.'/images/auto/'.$photo)):
                        copy(WEBROOT.'/images/auto/'.$photo, WEBROOT.'/file/export/tmp/'.$photo);
                    endif;
                endforeach;
            elseif($auto->get('photo')):
                if(file_exists(WEBROOT.'/images/auto/'.$auto->get('photo'))):
                    copy(WEBROOT.'/images/auto/'.$auto->get('photo'), WEBROOT.'/file/export/tmp/'.$auto->get('photo'));
                endif;
            endif;

            // Choose MAJ or ADD
            if($auto->get('time') > $export->get('time')):
                $stats['add']++;
            else:
                $stats['maj']++;
            endif;

            array_push($autos, $auto->get());
        endwhile;

        $smarty->assign('autos', $autos);
        $return = $smarty->fetch('perso/'.slug($export->get('title')).'.tpl');

        $fp = fopen(WEBROOT.'/file/export/tmp/'.slug($export->get('title')).'.xml', "w");
        fputs($fp, $return);
        fclose($fp);
        
        return $stats;
    }
}

?>
