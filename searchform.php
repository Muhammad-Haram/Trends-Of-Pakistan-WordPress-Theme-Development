<form action="/" method="get">

    <div class="search-container">
        <input type="text" name="s" id="search" class="search-input" placeholder="Search here" value="<?php the_search_query();?>">
        <button type="submit" class="search-button"><img src="<?= get_template_directory_uri().'/images/search-icon.png'?>" class="img-fluid" alt="" srcset=""></button>
    </div>

</form>