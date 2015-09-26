# NUC i5
Intel(R) Core(TM) i5-4250U CPU @ 1.30GHz
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

# VirtualBox Server based on NUC i5
Full CPU usage 100% (Intel(R) Core(TM) i5-4250U CPU @ 1.30GHz)
````
[GENERAL]
 1/10 Cycles (if, while, do)  ..................... 29.04s
 2/10 Generate Random Numbers  .................... 66.24s
 3/10 Objects  .................................... 12.68s
Time: . 107.96

[STRINGS]
 4/10 Simple Strings Functions  ................... 63.56s
 5/10 Explode/Implode  ............................ 26.18s
 6/10 Long Strings  ............................... 32.35s
 7/10 String Hash  ................................ 22.22s
Time: . 144.31

[ARRAYS]
 8/10 Fill arrays  ................................ 25.28s
 9/10 Array Sort (Integer Keys and Values)  ....... 30.06s
10/10 Array Sort (String Keys and Values)  ........ 30.88s
Time: .. 86.22

TOTAL TIME: . 338.49
````

You can see the slow random generator and simple string functions. On other tests there is about 10% overhead.

# VMware Player on Core i7
Virtual Ubuntu server on Core i7-4790K 4.00Ghz
````
[GENERAL]
 1/10 Cycles (if, while, do)  ..................... 18.41s
 2/10 Generate Random Numbers  .................... 16.13s
 3/10 Objects  ..................................... 8.07s
Time: .. 42.60

[STRINGS]
 4/10 Simple Strings Functions  ................... 20.57s
 5/10 Explode/Implode  ............................ 16.17s
 6/10 Long Strings  .............................. 102.61s
 7/10 String Hash  ................................ 13.39s
Time: . 152.74

[ARRAYS]
 8/10 Fill arrays  ................................ 16.90s
 9/10 Array Sort (Integer Keys and Values)  ....... 16.79s
10/10 Array Sort (String Keys and Values)  ........ 17.68s
Time: .. 51.37

TOTAL TIME: . 246.72
````

Good result except Long String test (concatenation of long strings). It is a strange behavoir of VMware player.

