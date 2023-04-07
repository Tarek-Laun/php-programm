# PHP Aufgabe 

## Aufgabe:

You need to find a string which has exactly K positions in it such that the character at that position comes 
alphabetically later than the character immediately after it. If there are many such strings, print the one which 
has the shortest length. If there is still a tie, print the string which comes the lexicographically earliest (would 
occur earlier in a dictionary).

## Main Programm (index.php):

### Input (Post Body):

```json
{
    "input" : 2 // Intiger
}
```
### Output

```
cba
```

## Test Programm (test.php)

Sends 20 Requests to the main program with random values and returns the result as JSON.

### Output

```json
[
    {
        "input": 27,
        "output": "ba"
    },
    {
        "input": 89,
        "output": "lkjihgfedcba"
    },
    {
        "input": 82,
        "output": "edcba"
    },
    {
        "input": 88,
        "output": "kjihgfedcba"
    },
    {
        "input": 14,
        "output": "onmlkjihgfedcba"
    },
    {
        "input": 78,
        "output": "zyxwvutsrqponmlkjihgfedcba"
    },
    {
        "input": 1,
        "output": "ba"
    },
    {
        "input": 57,
        "output": "fedcba"
    },
    {
        "input": 27,
        "output": "ba"
    },
    {
        "input": 67,
        "output": "ponmlkjihgfedcba"
    },
    {
        "input": 2,
        "output": "cba"
    },
    {
        "input": 1,
        "output": "ba"
    },
    {
        "input": 93,
        "output": "ponmlkjihgfedcba"
    },
    {
        "input": 22,
        "output": "wvutsrqponmlkjihgfedcba"
    },
    {
        "input": 36,
        "output": "kjihgfedcba"
    },
    {
        "input": 73,
        "output": "vutsrqponmlkjihgfedcba"
    },
    {
        "input": 5,
        "output": "fedcba"
    },
    {
        "input": 28,
        "output": "cba"
    },
    {
        "input": 93,
        "output": "ponmlkjihgfedcba"
    },
    {
        "input": 88,
        "output": "kjihgfedcba"
    }
]
```