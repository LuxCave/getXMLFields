function getXMLFields(SimpleXMLElement $xml)
{
    $elements = [];
    foreach ($xml->children() as $child) {
            $items[][$child->getName()] = (Array) $child;
           isset($elements[$child->getName()]) ?  $elements[$child->getName()]++ : $elements[$child->getName()] = 1;
    }
    krsort($elements);
    $key = array_key_first($elements);
    if ($elements[$key] > 1) {
        $data = array_column($items, $key);

        // create an array with 10 random elements from the data array
        $randomdata = array_rand($data, 10);
        $fields = [];
        foreach ($randomdata as $value) {
            $fields = array_merge($fields, array_keys($data[$value]));
        }
        $fields = array_unique($fields);
        return $fields;
    } else {
        echo "No multiple elements found";
        return null;
    }
}
