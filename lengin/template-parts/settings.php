<?php 
$fields = get_fields();

$themeStyle = $fields['theme_style'];

$nameTheme = '';
if($themeStyle == 'dark'){
    $nameTheme = 'darkTheme';
}else if($themeStyle == 'light'){
    $nameTheme = 'lightTheme';
}else{
    $nameTheme = ''; 
}

$padding = $fields['padding'];
$sPaddingTop = $padding['top'];
$sPaddingBottom = $padding['bottom'];

$sPadding = '';
if($sPaddingTop == 'sptmain' && $sPaddingBottom == 'spbmain'){
    $sPadding = '';
}else if($sPaddingTop != 'sptmain' && $sPaddingBottom == 'spbmain'){
    $sPadding = $sPaddingTop;
}else if($sPaddingTop == 'sptmain' && $sPaddingBottom != 'spbmain'){
    $sPadding = $sPaddingBottom;
}else if($sPaddingTop != 'sptmain' && $sPaddingBottom != 'spbmain'){
    $sPadding = $sPaddingTop . ' ' . $sPaddingBottom;
}

?>