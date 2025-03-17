When you deal with XML files with a large number of similar elements, like products, books, etc, it's very useful to have a list of the recurring fields of those elements. 
This way you get an overview of the data present in the XML file and you can work easily through its contents.
This PHP function scans all fields (or to speed things up, the number of samples you set at $scanElements) and returns the array of the recurring fields.
