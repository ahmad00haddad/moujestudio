<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mouje Studio - Works</title>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    />

    <!-- css import -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/works.css" />
    <!-- java import  -->
    <script src="assets/js/script.js"></script>

    <!-- google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap"
      rel="stylesheet"
    />
    <!-- icons -->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- jQuery (يجب أن يكون قبل JavaScript لـ Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- JavaScript لـ Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
    <!-- navbar start -->
     <!-- استدعاء النافبار -->
     <?php include 'navbar.php'; ?>
    <!--  navbar end  -->

    <!-- home start -->
 

    <section class="works" id="works">
      <h1>Works Lezgo</h1>
    </section>
    <!-- home end -->
    <section class="work-filters">
    <div class="wrap">
        <!-- Filter buttons -->
        <ul class="filters-list">
            <li class="filters-list__item filters-list__item--featured" data-filter=".filter-featured">Featured</li>
            <li class="filters-list__item filters-list__item--music-for-advertising" data-filter=".filter-music-for-advertising">Music For Advertising</li>
            <li class="filters-list__item filters-list__item--music-supervision" data-filter=".filter-music-supervision">Music Supervision</li>
            <li class="filters-list__item filters-list__item--sound-and-mix" data-filter=".filter-sound-and-mix">Sound &amp; Mix</li>
            <li class="filters-list__item filters-list__item--music-for-tv-and-film" data-filter=".filter-music-for-film-and-tv">Music For Film &amp; TV</li>
            <li class="filters-list__item filters-list__item--radio-imaging" data-filter=".filter-radio-and-podcasts">Radio &amp; Podcasts</li>
            <li class="filters-list__item filters-list__item--game-trailers" data-filter=".filter-game-trailers">Game Trailers</li>
            <li class="filters-list__item filters-list__item--active" data-filter="*">Show All</li>
        </ul>
    </div>
    <div class="content-grid ">
    <div class=" content-item filter-featured filter-music-for-advertising">
        <img src="https://via.placeholder.com/300x200.png?text=Featured+Ad+1" alt="Featured Ad 1">
       
    </div>
    <div class=" content-item filter-music-supervision">
        <img src="https://via.placeholder.com/300x200.png?text=Music+Supervision+1" alt="Music Supervision 1">
       
    </div>
    <div class="content-item filter-sound-and-mix">
        <img src="https://via.placeholder.com/300x200.png?text=Sound+Mix+1" alt="Sound Mix 1">
       
    </div>
    <div class=" content-item filter-music-for-film-and-tv">
        <img src="https://via.placeholder.com/300x200.png?text=Film+TV+1" alt="Film TV 1">
      
    </div>
    <div class=" content-item filter-radio-and-podcasts">
        <img src="https://via.placeholder.com/300x200.png?text=Radio+Podcast+1" alt="Radio Podcast 1">
       
    </div>
    <div class=" content-item filter-game-trailers">
        <img src="https://via.placeholder.com/300x200.png?text=Game+Trailer+1" alt="Game Trailer 1">
       
    </div>
</div>
</section>

<!-- Content items that will be filtered -->




    
    <!-- home end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
