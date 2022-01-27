
<div>
<section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded bg-light">
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">Coming Soon</span>
                <span class="section-heading-lower">Vos réalisations</span>
              </h2>
              <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                  
<?php
$array = [
['Stéphane' ,  'Razafia','https://razafiasimanana.needemand.com/'],
['Yen Nhi' ,  'Ho Tong Minh','https://hotongminh.needemand.com/'],
['Baudino' ,  'Pierre-Olivier','https://pierre-olivierb.github.io'],
['Kim' ,  'Young Hee','https://kim.needemand.com/'],
['Cochonneau' ,  'Laurent','https://cochonneau.needemand.com/'],
['Hernandez' ,  'Raul','https://hernandez.needemand.com/'],
['Patrick' ,  'Arnaud','https://arnaud.needemand.com/'],
['Jean-Bernard' ,  'Briois','https://briois.needemand.com/'],
['Sylvie' ,  'Linxe','https://linxe.needemand.com/'],
['Thibault' ,  'Mourichon','https://mourichon.needemand.com/'],
['Julien' ,  'Grossi','https://grossi.needemand.com/'],
];  

// $hero $realname  <a href='$portFolio'> Portfolio</a>     <br>

foreach ($array as [$hero, $realname, $portFolio ]) {
    echo "
    <li class='list-unstyled-item list-hours-item d-flex justify-content-between'>
    $hero $realname
    <a class='ml-auto bs-blue' href='$portFolio'>Portfolio</a>
    </li>";
}
?>

<h2> Promo 2020-2021 </h2>
<h4> Concepteurs & développeurs d'application </h4>

<span>Needemand </span>

</section>
</div>