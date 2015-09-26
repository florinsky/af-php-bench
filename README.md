# AF's PHP Benchmark tool
This simple script allows you to quickly measure the php performance on the server. It measures the performance of the CPU by using the different php functions.

# Usage
Just download the latest phar build: 
https://github.com/florinsky/af-php-bench/raw/master/build/phpbm.phar

Run:
>chmod +x phpbm.phar

>./phpbm.phar

# Result Example
````
[GENERAL]
 1/10 Cycles (if, while, do)  ..................... 28.83s
 2/10 Generate Random Numbers  .................... 20.01s
 3/10 Objects  .................................... 12.49s
Time: .. 61.33

[STRINGS]
 4/10 Simple Strings Functions  ................... 26.47s
 5/10 Explode/Implode  ............................ 25.84s
 6/10 Long Strings  ............................... 30.04s
 7/10 String Hash  ................................ 22.08s
Time: . 104.43

[ARRAYS]
 8/10 Fill arrays  ................................ 25.22s
 9/10 Array Sort (Integer Keys and Values)  ....... 26.16s
10/10 Array Sort (String Keys and Values)  ........ 27.53s
Time: .. 78.91

TOTAL TIME: . 244.66
````

[See Real Result](RESULTS.md)

# Author
Alexey Florinsky
idc@inbox.ru

Feel free to send me your result with hardware description!

Thank you!




