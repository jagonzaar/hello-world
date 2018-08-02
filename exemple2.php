<?php
//Write the elements of a table.

$tableau = array(1234, "elefant", 23654, 3498, 2145, "awareness");
//We insert two elements in the end of the table
array_push($tableau,7658,"casse-noisette");

//Determine the number of table's elements 
$Nel = count($tableau);

//launch the loop to write the elements
for($i = 0; $i != $Nel; $i++)
{
	echo "element[".$i."] = $tableau[$i] </br>";
}
//Another way
echo "</br>Another way</br>";
foreach ($tableau as $key => $value) {
	echo "$key = $value </br>";
}
//Multiple arrays-------------------------------
//Define a Multiple array
<?php
$example_array = array(
array('1','John','Smith'),
array('2','Dave','Jones'),
array('3','Bob','Williams')
);
//Write an element
echo "The element (1,1) is: ".$example_array[1][1]."</br>";
echo "<table>";
//Write all the array in a table
    foreach ($example_array as $value) {
    echo "<tr><td>" . $value[0] . "</td>";
    echo "<td>" . $value[1] . "</td>";
    echo "<td>" . $value[2] . "</td></tr>";
    }

echo "</table>";

//Another way

<?php
$rows = Array(
    '0' => Array
        (
            'id' => '1',
            'firstname' => 'Firstnameone',
            'lastname' => 'Lastnameone'
        ),

    '1' => Array
        (
            'id' => '2',
            'firstname' => 'Firstnametwo',
            'lastname' => 'Lastnametwo'
        ),

    '2' => Array
        (
            'id' => '3',
            'firstname' => 'Firstnamethree',
            'lastname' => 'Lastnamethree'
        )
);
echo "<table>";
foreach ($rows as $row) {
	echo "<tr><td>".$row['id']."</td>";
	echo "<td>".$row['firstname']."</td>";
	echo "<td>".$row['lastname']."</td></tr>";
}
echo "</table>";
//Nested arrays----------------
<?php
//How to create a multiple array
$rows = Array(
    '0' => Array
        (
            'id' => '1',
            'firstname' => 'Firstname one',
            'lastname' => 'Lastname one'
        ),

    '1' => Array
        (
            'id' => '2',
            'firstname' => 'Firstname two',
            'lastname' => 'Lastname two'
        ),

    '2' => Array
        (
            'id' => '3',
            'firstname' => 'Firstname three',
            'lastname' => 'Lastname three'
        )
);

//How to write a mult. array
echo "<table>";

foreach ($rows as $row) {
	echo "<tr><td>".$row['id']."</td>";
	echo "<td>".$row['firstname']."</td>";
	echo "<td>".$row['lastname']."</td></tr>";
}
echo "</table>";

//Function to obtain an element in the M. array using dot notation

	function getValueByKey($key, array $data, $default = null)
{
    // @assert $key is a non-empty string
    // @assert $data is a loopable array
    // @otherwise return $default value
    if (!is_string($key) || empty($key) || !count($data))
    {
        return $default;
    }

    // @assert $key contains a dot notated string
    if (strpos($key, '.') !== false)
    {
        $keys = explode('.', $key);

        foreach ($keys as $innerKey)
        {
            // @assert $data[$innerKey] is available to continue
            // @otherwise return $default value
            if (!array_key_exists($innerKey, $data))
            {
                return $default;
            }

            $data = $data[$innerKey];
        }

        return $data;
    }

    // @fallback returning value of $key in $data or $default value
    return array_key_exists($key, $data) ? $data[$key] : $default;
}

//request
$result = getValueByKey('1.firstname',$rows,"ERROR");
echo "The result of your request is : $result</br>";
//Dot notation
<?php
$developer = array(
    'name'   => 'Brad Bell',
    'mood'   => 'Angry',
    'family' => array(
        'spouse'  => array(
            'name' => 'Brandon Kelly',
			'age' => '23'
        ),
        'brother' => array(
            'name' => 'That European Guy',
			'age' => '31'
        )
    ),
	'location' => 'Brussels'
);


	foreach ($developer as $innerArray => $innerArray1) {
	//  Check type
		//echo $innerArray." : ";
    if (is_array($innerArray1)){
        //  Scan through inner 1st loop
		//echo $innerArray." : ";
        foreach ($innerArray1 as $innerArray2 => $innerArray3) {
			echo "</br>".$innerArray." : ".$innerArray2." : ";
			//Check type1
			if (is_array($innerArray3)){
				//echo $innerArray3." :     ";
			//  Scan through inner 2st loop
			foreach ($innerArray3 as $value2 => $value3) {
				//echo "line 27</br>";
				echo $value2." : ".$value3.", ";
			}
    }else{
        // one, two, three
				echo "</br>".$innerArray3;
    }	
		}
        }else{
        // one, two, three
		echo "</br>".$innerArray." : ".$innerArray1;
    }
	}



function ValueByDotKey($key, array $data, $default = null)
{
    // see that $key is a non-empty string
    // test $data is a loopable array
    // otherwise return $default value
    if (!is_string($key) || empty($key) || !count($data))
    {
        return $default;
    }

    // Confirm $key contains a dot notated string
    if (strpos($key, '.') !== false)
    {
        $keys = explode('.', $key);

        foreach ($keys as $innerKey)
        {
            // Verify that $data[$innerKey] is available to continue
            // otherwise return $default value
            if (!array_key_exists($innerKey, $data))
            {
                return $default;
            }

            $data = $data[$innerKey];
        }

        return $data;
    }

    // returning $key in $data or $default value
    return array_key_exists($key, $data) ? $data[$key] : $default;
}

$result = ValueByDotKey('family.spouse.age', $developer, "Error");
echo "<br>The result of your enquire is:<br> $result";