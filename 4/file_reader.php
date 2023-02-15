<? 
    $file = fopen("file.txt", "r");
    while(!feof($file))
{
    $str = htmlentities(fgets($file));
    echo $str;
}
fclose($file);