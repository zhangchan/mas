<?php if (!defined('THINK_PATH')) exit(); if(!empty($_thead)): ?><table class="<?php echo ((isset($_table_class) && ($_table_class !== ""))?($_table_class):""); ?>">
    <thead>
        <tr>
<?php
$operator=array(); $i=1; foreach ($_thead as $key => $th){ if( isset($th['condition']) ){ $c = @eval( 'return '.addslashes($th['condition']).';' ); if (!$c){ unset($_thead[$key]); continue; } } if( isset($th['_th']) ){ $class = $th['_th']; } if ( $i==1 && strpos($key,'_')!==false ) { $class .= ' row-selected'; }else{ $class=''; } $class = 'class="'.$class.'"'; echo "<th $class>"; if ( !is_array($th) ) { echo "$th"; }else if( strpos($key,'_')===0 ){ echo $th['th']; }else if( isset($th['_title'] )){ echo $th['_title']; if ( !isset($th['tag']) ) { $_thead[$key]['tag'] = 'a'; } }else{ echo $key; $operator[$key]=$th; } echo '</th>'; $i++; } ?>
        </tr>
    </thead>
    <?php if(!empty($_list)): ?><tbody>
        <?php if(is_array($_list)): foreach($_list as $key=>$row): ?><tr>
            <?php if(is_array($row)): foreach($row as $key=>$td): if(array_key_exists($key,$_thead)): ?><td>
<?php
 if( strpos($key,'_')===0 ){ $td = preg_replace_callback('/\$([a-zA-Z_]+)/',function($matches) use($row) { return ($row[$matches[1]]); },$td); echo $td; }else if( is_array($_thead[$key]) ) { $td = strip_tags($td); if ( array_key_exists('func',$_thead[$key]) ) { $_bool=true; $_func = preg_replace_callback('/\$([a-zA-Z_]+)/',function($matches) use($row,&$_bool) { if ($row[$matches[1]]===null || !is_scalar($row[$matches[1]])) { $_bool = false; } return ('\''. addcslashes($row[$matches[1]],"'").'\''); },$_thead[$key]['func']); if ($_bool) { if ( substr($_func,-1)!=';' ) { $_func.=';'; } @eval('$td ='.$_func ); }else{ $td=''; } } $Doc = new DOMDocument('1.0','utf-8'); if ( preg_match('/\/.*?\.(:?jpg|jpeg|gif|png)$/i',$td) && isset($_thead[$key]['_img']) ) { $img = $Doc->createElement('img'); $img->setAttribute('src',$td); $ele = $Doc->createElement($_thead[$key]['tag']); $ele->appendChild($img); }else{ $ele = $Doc->createElement($_thead[$key]['tag'],$td); } foreach ($_thead[$key] as $k=>$v) { if(strtolower($k)!='_title' && strtolower($k)!='_img' &&strtolower($k)!='tag' && strtolower($k)!='func'){ $_bool = true; $_v = preg_replace_callback('/\$([a-zA-Z_]+)/',function($matches) use($row,&$_bool) { if ($row[$matches[1]]===null || !is_scalar($row[$matches[1]])) { $_bool = false; } return ($row[$matches[1]]); },$v); if ($_bool) { if( strtolower($k)=='url' || strtolower($k)=='href' ){ $_v = U($_v); } }else{ $_v=''; } $ele->setAttribute($k,$_v); } } $Doc->appendChild($ele); echo $Doc->saveHTML(); }else{ echo $td; } ?>
                    </td><?php endif; endforeach; endif; ?>
            <?php if(is_array($operator)): foreach($operator as $key=>$op): ?><td>
<?php
 foreach ($op as $k=>$v){ if(is_array($v)){ if( !isset($v['tag']) ){ $v['tag']='a'; } $Doc = new DOMDocument('1.0','utf-8'); $ele = $Doc->createElement($v['tag'],$k); foreach ($v as $attr=>$value){ $_bool = true; $_value = preg_replace_callback('/\$([a-zA-Z_]+)/',function($matches) use($row,&$_bool,$attr) { if ($row[$matches[1]]===null || !is_scalar($row[$matches[1]])) { $_bool=false; } return ($row[$matches[1]]); },$value); if( strtolower($attr)=='condition' ){ if ( $_bool ) { $_c = @eval( 'return '.addslashes($_value).';' ); if (!$_c){ continue 2; } }else{ continue 2; } } if( strtolower($attr)!='tag' && strtolower($attr)!='condition' ){ if( strtolower($attr)=='url' || strtolower($attr)=='href' ){ $_value = U($_value); } $ele->setAttribute($attr,$_value); } } $Doc->appendChild($ele); echo $Doc->saveHTML(); }else{ $_v = preg_replace_callback('/\$([a-zA-Z_]+)/',function($matches) use($row) { return ($row[$matches[1]]); },$v); $_v = U($_v); echo "<a href='$_v'>".$k.'</a>'.PHP_EOL; } } ?>
                </td><?php endforeach; endif; ?>
        </tr><?php endforeach; endif; ?>
    </tbody>
    <?php else: ?>
    <tbody>
        <td colspan="<?php echo count($_thead);?>" class="text-center"> aOh! 暂时还没有内容! </td>
    </tbody><?php endif; ?>
</table><?php endif; ?>
<?php if(!empty($_use_tip)): ?><script type="text/javascript" src="/Public/static/qtip/jquery.qtip.min.js"></script>
<link rel="stylesheet" type="text/css" href="/Public/static/qtip/jquery.qtip.min.css" media="all">
<script type="text/javascript">
$('td').children().each(function(){
            $(this).qtip({
                content: {
                    text: $(this).attr('title'),
                },
                position: {
                    my: 'top left',
                    at: 'bottom left',
                    target: $(this)
                },
                style: {
                    classes: 'qtip-dark',
                    tip: {
                        corner: true,
                        mimic: false,
                        width: 10,
                        height: 10
                    }
                }
            });
        });
</script><?php endif; ?>