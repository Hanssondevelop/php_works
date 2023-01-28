<?php
    $str = 'ahb acb aeb aeeb adcb axeb';
    echo "1) ".preg_replace('#a.b#', '*', $str).'<br>';

    $str = 'aa aba abba abbba abca abea';
    echo "2) ".preg_replace('#ab*a#', '*', $str).'<br>';

    $str = 'aa aba abba abbba abca abea';
    echo "3) ".preg_replace('#ab?a#', "*", $str)."<br>";

    $str = 'ab abab abab abababab abea';
    echo "4) ".preg_replace('#ab+#', "*", $str)."<br>";

    $str = '23 2+3 2++3 2+++3 345 567';
    echo "5) ".preg_replace('#2\+{1,3}3#', "*", $str)."<br>";

    $str = 'aa aba abba abbba abbbba abbbbba';
    echo "6) ".preg_replace('#ab{4,5}a#', "*", $str)."<br>";