# Summary

          | NUC i5 | VB on NUC i5 | VMware on i7-4790K | Virtual on Xeon X5675  | Virtual on Xeon X3440
----------|--------|--------------|--------------------|------------------------|----------------------
General   | 61     | 107          | 42                 | 18                     | 142  
Strings   | 104    | 144          | 152                | 52                     | 134
Arrays    | 79     | 86           | 51                 | 56                     | 129
Time (sec)| 245    | 338          | 246                | 126                    | 407

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

# Virtual Server on Xeon X5675
Virtual LAMP Server on the Intel(R) Xeon(R) CPU X5675  @ 3.07GHz
````
[GENERAL]
 1/10 Cycles (if, while, do)  ...................... 9.69s
 2/10 Generate Random Numbers  ..................... 3.55s
 3/10 Objects  ..................................... 5.15s
Time: .. 18.39

[STRINGS]
 4/10 Simple Strings Functions  ................... 12.96s
 5/10 Explode/Implode  ............................ 15.95s
 6/10 Long Strings  ................................ 5.65s
 7/10 String Hash  ................................ 17.98s
Time: .. 52.54

[ARRAYS]
 8/10 Fill arrays  ................................ 17.20s
 9/10 Array Sort (Integer Keys and Values)  ....... 21.03s
10/10 Array Sort (String Keys and Values)  ........ 17.59s
Time: .. 55.83

TOTAL TIME: . 126.75
````
Excelent result!

# Virtual Server on Xeon X3440
Virtual LAMP Server, OpenVZ, on the Intel(R) Xeon(R) CPU X3440  @ 2.53GHz
````
[GENERAL]
 1/10 Cycles (if, while, do)  ..................... 76.12s
 2/10 Generate Random Numbers  .................... 40.10s
 3/10 Objects  .................................... 26.65s
Time: . 142.87

[STRINGS]
 4/10 Simple Strings Functions  ................... 42.85s
 5/10 Explode/Implode  ............................ 32.25s
 6/10 Long Strings  ............................... 33.35s
 7/10 String Hash  ................................ 26.35s
Time: . 134.81

[ARRAYS]
 8/10 Fill arrays  ................................ 50.65s
 9/10 Array Sort (Integer Keys and Values)  ....... 42.52s
10/10 Array Sort (String Keys and Values)  ........ 36.25s
Time: . 129.43

TOTAL TIME: . 407.10
````

