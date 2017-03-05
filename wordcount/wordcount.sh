#!/bin/sh
#统计单词出现次数
hadoop jar /usr/local/hadoop-2.6.4/share/hadoop/tools/lib/hadoop-streaming-2.6.4.jar \
-input /user/input \
-output /user/output \
-mapper scripts/wordcount_map.php \
-reducer scripts/wordcount_reduce.php \
-file scripts/wordcount_map.php \
-file scripts/wordcount_reduce.php 
