When you deal with XML files with a large number of similar elements, like products, books, etc, it's very useful to have a list of the recuring fields of those elements. 
This way you get an overview of the data present in the xml and you can work easily through its contents.
The PHP function scans all fields (or to speed things up, the number of samples you set at $scanElements) and returns the array of the fields.
