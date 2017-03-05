#!/usr/bin/env php
<?php
/**
 * WordCount Reduce
 *
 * @package    wordcount
 * @author     JasyDong
 */
 
$lastkey = '';
$count = 0;

//¶ÁÈëÁ÷
while (($line = fgets(STDIN)) !== false) {
    if (!empty($line)) {
        $fields = explode(",", $line);
        if ($lastkey != $fields[0]) {
            if (!empty($lastkey)) {
                echo "{$lastkey}, {$count}\n";
            }
            $count = 1;
        } else {
            $count += intval($fields[1]);
        }
        $lastkey = $fields[0];
    }
}
