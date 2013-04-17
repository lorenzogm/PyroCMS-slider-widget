<div id="{{ id }}" class="carousel slide">
    <ol class="carousel-indicators">
        {{ files:listing folder=folder type="i" }}
        <li data-target="#{{ id }}" data-slide-to="{{ helper:show_count identifier='lights' }}" {{ if { helper:show_count identifier='lights' } == '1'}}class="active"{{ endif }}></li>
        {{ helper:count identifier="lights" return="false" }}
        {{ /files:listing }}
    </ol>

    <!-- Carousel items -->
    <div class="carousel-inner">
        {{ files:listing folder=folder type="i" }}
        <div class="item {{ if { helper:show_count identifier='images' } == '1'}}active{{ endif }}">
            <img src="{{ url:site }}files/large/{{ id }}" alt="{{ alt_attribute }}" title="{{ description }}" />
            {{ if alt_attribute OR description }}
            <div class="carousel-caption">
                <h4>{{ alt_attribute }}</h4>
                <p>{{ description }}</p>
            </div>
            {{ endif }}
        </div>
        {{ helper:count identifier="images" return="false" }}
        {{ /files:listing }}
    </div>

    <!-- Carousel nav -->
    <a class="carousel-control left" href="#{{ id }}" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#{{ id }}" data-slide="next">&rsaquo;</a>
</div>