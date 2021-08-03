<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>
<?php
$ch= curl_init();
$url="https://remotive.io/api/remote-jobs?category=software-dev";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$resp=curl_exec($ch);
if($error=curl_error($ch)){
echo $error;
}
else{
$decode=json_decode($resp,true);
$decode=[$decode];

$row=$decode[0]['jobs'];
$countOf=count($row);
// echo $countOf;
// print_r($row);
$i=0;
// while($i<=$countOf){
    foreach($row as  $value){
        // print_r($value). '<br>';
$id= $value['id'];
$url=      $value  ['url'];
$title=  $value['title'];
$company=$value ['company_name'] ;
$category=$value ['category'] ;
$job= $value['job_type'];
$pub=$value['publication_date'] ;
$cand=$value['candidate_required_location'];
$salary=$value['salary'];
$desc=$value ['description'] ;

?>
<div class="container">
<div class="row">
<div class="col-xs-12">
<small> <?php echo $id;?></small>
<h2> <?php echo $title ;?></h2>
<small><a target="self" href="<?php echo $url; ?>">Apply</a></small>
<p> <a href="?q=<?php echo $url ?>"><?php echo $url; ?></a></p>

<p> <?php echo $company; ?></p>

<article> <?php echo $category ;?></article>
<p> <?php echo $job; ?></p>
<p> <?php echo $pub ; ?></p>
<p> <?php echo $cand ; ?></p>
<p> <?php echo $salary ; ?></p>
<p> <?php echo $desc ;?></p>

</div>
</div>

</div>

<?php


    }
    
    

}













// for($i=0; $i<$countOf; $i++){
//     // echo $i . '<br>';
 
// }<!-- // print_r($decode[0]['jobs']); -->











// }






?>
</body>
</html>




