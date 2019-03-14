<?php
//$data = Array();
//$data=[]; //Standard Practice
////$data=10;
//$data[0]=10;
//$data[1]=20;
//$data[3]=30;
//
//$data["name"]="Minhaj";
//$data["city"]="Dhaka";
//$data["country"]="Bangladesh";


//$data=[10,20,30,"Minhaj","Dhaka","Bangladesh"];
//$data=
//    [
//        "name"=>"Minhaj",
//        "city"=>"Dhaka",
//        "country"=>"Bangladesh",
//        "phone"=>"124567",
//        "gender"=>"Male"
//    ];

//echo $data["name"];


//echo $data["mobile"];

//foreach ($data as $datum)
//{
//    echo $datum."<br>";
//}

//echo "<pre>";
//print_r($value);

//echo "<pre>";
//var_dump($data);


//$data=[];

//$data[0][0]=10;
//$data[0][1]=20;
//$data[0][2]=30;
//
//$data[1][0]=40;
//$data[1][1]=50;
//$data[1][2]=60;
//
//$data[2][0]=70;
//$data[2][1]=80;
//$data[2][2]=90;
//
//$data[3][0]=100;
//$data[3][1]=110;
//$data[3][2]=120;
//
//foreach ($data as $value)
//{
////    echo $datum[0]." ".$datum[1]." ".$datum[2]."<br>";
//    foreach ($value as $v_value)
//    {
//        echo $v_value." ";
//    }
//    echo "<br>";
//}


//function demo($firstName=null, $lastName=null)
//{
////    echo "Hello World";
////    $firstName="Minhaj";
////    $lastName="Khan";
//    $fullName=$firstName." ".$lastName;
////    echo $fullName;
//    return $fullName;
//}
//echo "<br>......................<br>";
////demo("Minhaj","Khan");
//echo demo("Minhaj","Khan");
//echo "<br>......................<br>";
////demo("Risul");
//$res=demo("risul");
//echo "Full Name is:".$res;
//echo "<br>......................<br>";
////demo("Omar","Shajib");
//$res=demo("Omar","Shajib");
//echo "<h1>".$res."</h1>";


class Demo
{

    public $name="Minhaj Khan";
    public $city="Dhaka";

    function add()
    {
        echo "In add";
    }

    function hello()
    {
        echo "In hello";
    }
}

//add();
//echo $name;

$demo=new Demo();
$demo->hello();
echo "<br>";
$demo->add();
echo "<br>";
echo $demo->name;
echo "<br>";
echo $demo->city;