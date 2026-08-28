<section class="category">
   <h1>Mes categories</h1>
    <ul>
       <li>Category </li>
       <li>Category </li>
       <li>Category </li>
       <li>Category </li>
       <li>Category </li>
    </ul>


    <div class="category-list">
       <?php foreach($categories as $category){ ?>
         <div class="card">
             <h3><?= $category['title'] ?></h3>
             <button class="btn-primary">Voir</button>
         </div>
       <?php } ?>
    </div>
</section>