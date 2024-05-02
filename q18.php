<html>
<head>
 <title>Calculate Area & Volume of Cylinder</title>
</head>
<body style="font-size:20px;">
 <form action="" method="POST">
 <pre>
 Enter radius of cylinder: <input type="number" name="radius">
 Enter height of cylinder: <input type="number" name="height">
 <input type="radio" name="choice" value="1"> Calculate Area
 <input type="radio" name="choice" value="2"> Calculate Volume
 <input type="radio" name="choice" value="3"> Calculate Both Area & Volume
 <input type="submit" value="Calculate">
 </pre>
 </form>
<?php
if($_POST){
 $r=$_POST['radius'];
 $h=$_POST['height'];
 $ch=$_POST['choice'];
 define('PI',3.14);
 interface Shape{
 public function area();
 public function volume();
 }
 class Cylinder implements Shape{
 private $r;
 private $h;
 public function __construct($r, $h){
 $this->r = $r;
 $this->h = $h;
 }
 public function area(){
 $area= 2 * PI * $this->r * ($this->r + $this->h);
 echo $area;
 }
 public function volume(){
 $vol = PI * $this->r * $this->r * $this->h;
 echo $vol;
 }
 }
 $cy = new Cylinder($r, $h);
 if($ch == 1){
 $cy->area();
 }
 else if($ch == 2){
 $cy->volume();
 }
 else if ($ch == 3){
 $cy->area();
 $cy->volume();
 }
 else{
 echo "choose correct operation";
 }
}
?>
</body>
</html>