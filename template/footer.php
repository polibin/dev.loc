</div>

<div id="footer"></div>

</body>
</html>
<?php
$pageContents = ob_get_contents();
ob_end_clean();

$arSearch = ['<!--title-->', '<!--description-->', ];
$arReplace = [$GLOBALS['title'], $GLOBALS['description'], ];
echo str_replace($arSearch, $arReplace, $pageContents);
?>