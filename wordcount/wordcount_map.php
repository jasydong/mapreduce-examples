#!/usr/bin/env php
<?php
/**
 * WordCount Map
 *
 * @package    wordcount
 * @author     JasyDong
 */
 
//������
while (($line = fgets(STDIN)) !== false) {
    if (!empty($line)) {
        $word = trim($line);
        echo "{$word}, 1\n";
    }
}
