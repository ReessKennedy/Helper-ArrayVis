# ArrayVis


## What ⚡
Output a compact, text-based view of any array where all keys are shown but no values and rows are limited to just one with a summary of total number of rows. 
## Why 🤷‍♂️
If you work with arrays or apis you need a method to quickly understand just he structure of the array and keys. Using `print_r` or `var_dump` can be confusing as it shows you everything. 
## How 📋
Just pass any array to the function and voila!

```php
ArrayVis($thearray)
```

## Before and After
It just returns the keys and not values. 
### Before
```php
Array
(
    [Rock] => Array
        (
            [Artists] => Array
                (
                    [The Beatles] => Array
                        (
                            [Members] => Array
                                (
                                    [0] => John Lennon
                                    [1] => Paul McCartney
                                    [2] => George Harrison
                                    [3] => Ringo Starr
                                )
                            [Albums] => Array
                                (
                                    [0] => Array
                                        (
                                            [Name] => Abbey Road
                                            [Released] => 1969
                                        )
                                    [1] => Array
                                        (
                                            [Name] => Let It Be
                                            [Released] => 1970
                                        )
                                )
                        )
                    [Led Zeppelin] => Array
                        ...
                )
        )
    [Jazz] => Array
        ...
)

```

### After
```php
1 ▶️ Rock
....2 ▶️ Artists
..........3 ▶️ The Beatles
................4 ▶️ Members
................4 ▶️ Albums
..........3 ▶️ Led Zeppelin
................4 ▶️ Members
................4 ▶️ Albums
1 ▶️ Jazz
....2 ▶️ Artists
..........3 ▶️ Miles Davis
................4 ▶️ Instruments
................4 ▶️ Albums

```

## Resources 🌐
Add some resources here ... 