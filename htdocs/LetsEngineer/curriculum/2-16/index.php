<!-- http://localhost/LetsEngineer/curriculum/2-16/index.php -->
<?php
    // 書き込み
    $testFile = "test.txt";
    $contents = "書き込み専用";

    if(is_writable($testFile)){
        $fp = fopen($testFile,"w");
        fwrite($fp,$contents);
        fclose($fp);
        echo"書き込み成功";
    }else{
        echo"書き込み失敗";
        exit;
    }
    echo "<br>";
    // 読み込み
    $test_File = "test2.txt";
    
    if (is_readable($test_File)) {
        $fp = fopen($test_File,"r");
        while($line = fgets($fp)){
            echo $line.'<br>';
        }
        fclose($fp);    
    } else {
        echo "not writable!";
        exit;
    }