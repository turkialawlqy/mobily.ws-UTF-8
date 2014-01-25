<form>
    <textarea name="x"></textarea>
    <input type="submit" />
</form>
<hr />
<?php
include 'functionUnicode.php';
    function utf8($str)
    {
        return iconv(mb_detect_encoding($str), 'UTF-8//IGNORE', $str);
    }
    echo convertToUnicode(utf8(@$_GET['x'])). '<BR>';
?>
