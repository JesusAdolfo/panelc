@extends('layout.main')
@section('title'){{  ' Menus | Bleu Sky Catering'}}@endsection
@section('content')
  @include('layout.partials.main-menu')



  <header id="header_menu">
    <div class="blur">
      <div id="title">
        <h1>Menus</h1>
      </div>
      <div id="subtitle">
        <h2><i class="fa fa-book fa-2x"></i></h2> 
        <h4>
          <br>
            Check out what we've got for you!
        </h4>
      </div>
    </div>
  </header>
  
     <div class="container">
       <div class="well text-center">
        <h4>Minimum order 10 persons. Service and delivery fee may apply</h4>
      </div>
     </div>
  

  <div class="row-fluid">
    <div class="container">
      <div class="center jumbotron">
        <ul class="nav nav-tabs">

          {{-- Breakfast Menu --}}
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
              Breakfast <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li class=""><a href="#breakfast1" data-toggle="tab" aria-expanded="false">Menu Catering Breakfast</a></li>
              <li class="divider"></li>
              <li class=""><a href="#breakfast2" data-toggle="tab" aria-expanded="false">Menu Catering Breakfast Sandwiches</a></li>
            </ul>
          </li>




          {{-- Lunch Menu --}}
          <li class=""><a href="#lunch1" data-toggle="tab" aria-expanded="false">Lunch</a></li>

          {{-- Snacks Menu --}}
          <li class=""><a href="#Snacks" data-toggle="tab" aria-expanded="false">Snacks</a></li>
          {{-- Desserts Menu --}}
          <li class=""><a href="#Desserts" data-toggle="tab" aria-expanded="false">Desserts</a></li>
          {{-- Saladas Menu --}}
          <li class=""><a href="#Salads" data-toggle="tab" aria-expanded="false">Salads</a></li>
          <li class=""><a href="#hors" data-toggle="tab" aria-expanded="false">Hors d’Oeuvres</a></li>
          


        </ul>


        {{-- Contenido --}}
        <div id="myTabContent" class="tab-content">
          <div class="tab-pane fade text-center" id="breakfast1">
            <p>
              <h2>Menu Catering Breakfast</h2>
              <strong>
                All breakfast options include coffee (organic Sumatra), Tea (assorted), utensils, plates and napkins. <br>
                All eggs (hormone & steroid free) acquired from Paisley Farms N.Y. <br>
                All items made fresh & in-house
              </strong>
              <br>
              <h3>Option One (10$)</h3>
              <p>Croissants, Pan Au Chocolate, Cranberry Scones, Mini Pumpkin Seed Muffins</p>
              <br>
              <h3>Option Two (13$)</h3>
              <p>
                Croissants, Pan Au Chocolate, Cranberry Scones, Mini Pumpkin Seed Muffins <br>
                Individual Parfaits - Cottage Cheese (Low fat), fresh Peaches, Sugar in the Raw, fresh Mint <br>
                Classic French Toast filled with Cream Cheese & fresh Strawberries <br>
              </p>
              <br>
              <h3>Option Three (15$)</h3>
              <p>Croissants, Pan Au Chocolate, Cranberry Scones, Mini Pumpkin Seed Muffins</p>
              <h4>Choice</h4> 
                Individual Parfaits - Cottage Cheese (Low fat), fresh Peaches, Sugar in the Raw, fresh Mint <br>
                Or <br>
                Greek Yogurt (Low fat), Pumpkin Seed Granola, Strawberries, Blackberries & Mint
              <h4>Choice</h4>
                Roasted Vegetable Frittata’s - Organic Zucchini, Yellow Squash & Red Bell Peppers<br>
                Or<br>
                4 Cheese Omelets (Open Faced) Asiago, Gouda, Cheddar & Mozzarella Cheeses
                Egg Whites available – Additional $2 charge per person
              <h4>Choice</h4>
                In-House Smoked Black Peppercorn Crusted Pork Bacon<br>
                Or<br>
                Equinox Farms Turkey Bacon
                <br><br>
                
                <strong>
                  Fresh Fruit Salad of the Season Available for any breakfast option – Additional $4 per person
                  Assorted Juices & bottled waters (Fiji) – Additional $2 per person
                </strong> 
              <br>

            </p>
          </div>

          <div class="tab-pane fade text-center" id="breakfast2">
            <p>
              <h2>Menu Catering Breakfast Sandwiches</h2>
              <strong>
                All breakfast options include coffee (organic Sumatra), Tea (assorted), utensils, plates and napkins. <br>
                All eggs (hormone & steroid free) acquired from Paisley Farms N.Y. <br>
                All items made fresh & in-house
              </strong>
              <br>
              <br>
              <h3>Breakfast Egg Sandwiches  &#171;Option Four&#187; (8$)</h3>
              <br><h4>Choose 4</h4>
                <p>
                  <i class="fa fa-square-o"></i> Egg & American Cheese <br><br>
                  <i class="fa fa-square-o"></i> Pork Bacon – Egg & American Cheese <br><br>
                  <i class="fa fa-square-o"></i> Turkey Bacon - Egg & American cheese <br><br>
                  <i class="fa fa-square-o"></i> Vegan! Roasted Organic Zucchini, Yellow Squash, Red Bell Pepper  <br><br>
                  <i class="fa fa-square-o"></i> Pork Sausage – Egg & American cheese <br><br>
                  <i class="fa fa-square-o"></i> Turkey Sausage – Egg & Provolone Cheese <br><br>
                  <i class="fa fa-square-o"></i> Roasted Pepper, Spinach, Egg White & Provolone Cheese <br><br>
                  <i class="fa fa-square-o"></i> Cherry Tomato, Basil, Egg White & Mozzarella Cheese <br><br>
                  <i class="fa fa-square-o"></i> Andouille Sausage, Hot Cherry Pepper, Egg & Gouda <br><br>
                </p>                
                <strong>
                  Fresh Fruit Salad of the Season Available for any breakfast option – Additional $4 per person
                  Assorted Juices & bottled waters (Fiji) – Additional $2 per person
                </strong> 
              <br>

            </p>
          </div>



          <div class="tab-pane fade text-center active in" id="lunch1">
            
            <h2>Option 1: $14 per person</h2>
            <h5>Service & delivery fee may apply</h5>
            <h3>Cold Sandwich Platter, All served with Iceberg Lettuce & Lucky Tomatoes (choose 3)</h3>
            <p class="">
              <i class="fa fa-square-o"></i> Albacore Tuna, cottage cheese, fresh dill <br>
              <i class="fa fa-square-o"></i> Poached Chicken Breast, mayonnaise, celery, roasted red peppers<br>
              <i class="fa fa-square-o"></i> Vegan – Bell Peppers, Olives, Roma Tomato Confit, Cremini Mushrooms, Lettuce, Zucchini Ribbons<br>
              <i class="fa fa-square-o"></i> Poached Sockeye Salmon, capers, fresh dill, red onion, citrus aioli<br>
              <i class="fa fa-square-o"></i> Roasted Lemon-Thyme Turkey Breast, Aged Provolone<br>
              <i class="fa fa-square-o"></i> Peppercorn Crusted Roast Beef, American cheese, Burgundy Aioli<br>
              <i class="fa fa-square-o"></i> House Smoked Local Ham, Muenster Cheese<br>
              <br><br><u>Cold Sandwich Platter includes:</u><br>
              Assorted Dressings & Vinaigrettes <br>
              Gherkins <br>
              Mixed Green Salad<br>
              Whole Wheat Pasta Salad<br>
              Assorted Juices, Sodas & Waters<br>
              <br><br>
              <h2>Option 2: $16 per person</h2>
              <h5>Service & delivery fee may apply</h5>
            <h3>Hot Sandwiches (choose 3)</h3>
            <p class="">

              <i class="fa fa-square-o"></i> Grilled Chicken Breast, Roasted Peppers, Aged Provolone, Basil <br>  
              <i class="fa fa-square-o"></i> Pulled Pork, Tamarind BBQ Sauce, Caramelized Onion, Pickled Jalapeno<br>  
              <i class="fa fa-square-o"></i> Hot Vegetarian - Bell Peppers, Olives, Roma Tomato Confit, Cremini Mushrooms, Lettuce, Hot Cherry Peppers, Melted - aged Provolone<br>  
              <i class="fa fa-square-o"></i> Grilled Japanese Eggplant, Sundried Tomatoes, Sautéed Spinach, shaved Parmigiano Reggiano Cheese<br>  
              <i class="fa fa-square-o"></i> Panko Crusted Chicken Breast, tomato Confit, basil & Fresh Mozzarella<br>  
              <i class="fa fa-square-o"></i> Classic Cuban<br>  
            </p>
            <br><br>
            <h2>Option 3: 19$ per person</h2>
            <h3>Entrees: Choose 3</h3>
            <h5>Service & delivery fee may apply</h5>
            <p class="">
              <i class="fa fa-square-o"></i> Smoked Long Island Duck & Date Meatballs, roasted red pearl onions, tri color baby carrots, celery root, butternut squash, fresh sage, fresh thyme <br><br>
              <i class="fa fa-square-o"></i> Braised Beef Short Rib, Pinot Noir-Juniper-Demi Glace’ <br><br>
              <i class="fa fa-square-o"></i> Chicken Roulade filled with, sautéed baby spinach, chevre, sundried tomatoes, roasted chicken jus <br><br>
              <i class="fa fa-square-o"></i> Oven Roasted Pork Loin, dried apricots, prosciutto, sherry-tarragon sauce <br><br>
              <i class="fa fa-square-o"></i> Lobster Mac n 4 cheese sauce <br><br>
              <i class="fa fa-square-o"></i> Country Style Mac n Cheese <br><br>
              <i class="fa fa-square-o"></i> Grilled Lemon-Thyme Turkey Breast, Meyer lemon-Pinot Grigio Sauce <br><br>
              <i class="fa fa-square-o"></i> Chicken Breast, kalamatta olives, grape tomatoes, roasted garlic, sherry-cream sauce <br><br>
              <i class="fa fa-square-o"></i> Classic Beef Burgundy, roasted root vegetables of the season <br><br>
              <i class="fa fa-square-o"></i> Sockeye Salmon, soy-maple glaze, toasted panko <br><br>
              <i class="fa fa-square-o"></i> Chatham Cod (Fresh Herb Crusted), Heirloom tomato salsa  <br><br>
              <i class="fa fa-square-o"></i> Soba Noodles, Asian vegetables, spicy soy-maple sauce <br><br>
              <i class="fa fa-square-o"></i> Sodas & bottled waters (Fiji) – Additional $2 per person  <br><br>
            </p>

              <br><strong>"For pricing information, please contact us at order@bleuskyycatering.com"  </strong>
            </p>
          </div>





          <div class="tab-pane fade text-center" id="Snacks">
            <h2>Snacks</h2>
              
            <strong>Priced Per Person</strong><br><br><br>
              <i class="fa fa-square-o"></i> Coffee & Tea $3 <br><br>
              <i class="fa fa-square-o"></i> Juices Sodas & Waters $3 <br><br>
              <i class="fa fa-square-o"></i> Candy $3 <br><br>
              <i class="fa fa-square-o"></i> Cakes & Danishes $5 <br><br>
              <i class="fa fa-square-o"></i> Nuts n Dried Fruits $5 <br><br>
              <i class="fa fa-square-o"></i> Cheese Platter with Fresh Berries $8 <br><br>
              <i class="fa fa-square-o"></i> Cookies $4 <br><br>
              <i class="fa fa-square-o"></i> Whole fruit $4 <br><br>
              <i class="fa fa-square-o"></i> Chips & Dips $3 <br><br>
              <i class="fa fa-square-o"></i> Crudité $4 <br><br>
              <i class="fa fa-square-o"></i> Flat Breads $4 <br><br>
              <i class="fa fa-square-o"></i> Tea Sandwiches $3 <br><br>
          </div>
          <div class="tab-pane fade text-center" id="Desserts">
              <h2>Bleu Skyy Desserts</h2>
              <h4>Whole Cakes Serve 12 people</h4>
              <br>
              <i class="fa fa-square-o"></i> Biscotti Crusted Cheesecake - $30<br><br>
              <i class="fa fa-square-o"></i> Gluten Free Chocolate Torte - $32<br><br>
              <i class="fa fa-square-o"></i> Gluten Free Carrot & Cranberry Cake - $26<br><br>
              <i class="fa fa-square-o"></i> Tart Tartine (Caramelized Pear Cake) - $30<br><br>
              <i class="fa fa-square-o"></i> Banana Walnut Cake - $27<br><br>
              <i class="fa fa-square-o"></i> Tiramisu - $30<br><br>
              <i class="fa fa-square-o"></i> Decadent Triple Chocolate Cake - $35<br><br>
              <i class="fa fa-square-o"></i> Cupcakes - $2 per<br><br>
              <i class="fa fa-square-o"></i> Almond Torte - $32<br><br>
              <i class="fa fa-square-o"></i> Coconut Crème Cake - $32<br><br>
              <i class="fa fa-square-o"></i> Individual Crème Brule’  - $4 per<br><br>
              <i class="fa fa-square-o"></i> Individual Flan - $4 per<br><br>
              <i class="fa fa-square-o"></i> Individual Panna Cotta - $4 per<br><br>
              <i class="fa fa-square-o"></i> Individual Butter Scotch Pudding - $3<br><br>
              <i class="fa fa-square-o"></i> Individual Valrhona Chocolate Mousse - $4<br><br>
              <i class="fa fa-square-o"></i> Individual White Chocolate Cake - $5<br><br>
              <i class="fa fa-square-o"></i> Dobos Torta (7 layer cake) hazelnut cream - $42<br><br>
              <i class="fa fa-square-o"></i> Petite Fours  - $5 per four<br><br>
              <br/><br/>
              Organic Sumatra Coffee, Assorted Teas, Water & Milk - $3 per person<br><br>
              <br><strong>"For pricing information, please contact us at order@bleuskyycatering.com"  </strong>
          </div>

          <div class="tab-pane fade text-center" id="Salads">
            <h2>Salads </h2><br>
            <i class="fa fa-square-o"></i> Mixed Baby Greens (Tot Soi, romaine, red oak, frisee) <br><br>
            <i class="fa fa-square-o"></i> Classic Caesar, Garlic croutons, shredded Parmigiano <br><br>
            <i class="fa fa-square-o"></i> Garden Salad (grape tomato, English cucumber, shredded carrot, red onion) <br><br>
            <i class="fa fa-square-o"></i> Asian (Mizuna greens, tot soi greens, daikon radish, sesame seed) <br><br>
            <i class="fa fa-square-o"></i> Turkey Cobb (bleu cheese, bacon, hard-boiled egg, grape tomato, avocado, grilled turkey breast) <br><br>
            <i class="fa fa-square-o"></i> Baby Arugula, red onion, roasted peppers, fresh mozzarella <br><br>
            <i class="fa fa-square-o"></i> Red Quinoa, walnuts, dried cranberries, fresh mint <br><br>
            <i class="fa fa-square-o"></i> Whole wheat penne, black olives, sundried tomato, English cucumber, red bell pepper <br><br>
            <i class="fa fa-square-o"></i> Israeli couscous, feta cheese, artichoke hearts, kalamatta olives, pimiento peppers, grilled zucchini <br><br>
            <i class="fa fa-square-o"></i> Vine ripe tomato, red onion, fresh basil, fresh oregano <br><br>
            <br><strong>"For pricing information, please contact us at order@bleuskyycatering.com"  </strong>
          </div> 
          
          <div class="tab-pane fade text-center" id="hors">
            <h2>Hors d’Oeuvres </h2><br>
            <h4>
              $4 each per person <br>
              Wait staff available, service fee to apply 

            </h4><br><br>
            <i class="fa fa-square-o"></i> Mini biscuits, quail egg, black diamond cheddar, turkey bacon<br><br>
            <i class="fa fa-square-o"></i> Tuna Tartar, Szechuan wonton chips, avocado, jalapeno, daikon sprouts <strong>+$2</strong><br><br>
            <i class="fa fa-square-o"></i> Marjoram-Ginger crusted dry sea scallop, soy maple dipping sauce <strong>+$2</strong><br><br>
            <i class="fa fa-square-o"></i> Duck & Date meatball skewers<br><br>
            <i class="fa fa-square-o"></i> Lobster “cream puffs”, tarragon cream <strong>+$2</strong><br><br>
            <i class="fa fa-square-o"></i> Poached Tiger shrimp, English cucumber & red radish relish<br><br>
            <i class="fa fa-square-o"></i> Filet Mignon tips, caramelized onion, Maytag bleu cheese, baguette slices <strong>+$2</strong><br><br>
            <i class="fa fa-square-o"></i> Asian Vegetable & roasted cashew spring rolls, sweet n sour dipping sauce<br><br>
            <i class="fa fa-square-o"></i> Mini potato & chive croquettes, black diamond cheddar fondue<br><br>
            <i class="fa fa-square-o"></i> Tso’s chicken skewers, plum vinegar dipping sauce<br><br>
            <i class="fa fa-square-o"></i> Goat cheese & fresh thyme fritters<br><br>
            <i class="fa fa-square-o"></i> Chatham cod skewers, soy tamarind glaze <strong>+$2</strong><br><br>
            <i class="fa fa-square-o"></i> Black bean & Jersey corn fritters, chipotle aioli<br><br>
            <i class="fa fa-square-o"></i> Peppercorn crusted sliced NY strip, horseradish cream<br><br>
            <i class="fa fa-square-o"></i> Crab Imperial, roasted corn & avocado relish<br><br>
            <i class="fa fa-square-o"></i> Tuna Roll, Cali Roll, Vegetable roll<br><br>
            <i class="fa fa-square-o"></i> House made Mozzarella - cherry tomato skewers, basil oil<br><br>
            <i class="fa fa-square-o"></i> Spring Vegetable tartlet, pearl onion jam<br><br>
            <i class="fa fa-square-o"></i> Crab Rangoon, red plum sauce <strong>+$2</strong><br><br>
            <i class="fa fa-square-o"></i> Mini biscuits, chicken sausage & gravy<br><br>
            <i class="fa fa-square-o"></i> Maitake mushroom & goat cheese strudel<br><br>
        
          </div>
          

        </div>
      </div>
    </div>
  </div>
  @include('layout.partials.footer')
@stop