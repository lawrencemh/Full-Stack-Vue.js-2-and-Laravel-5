<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Vuebnb</title>
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">

        <!-- inject model data for Vue -->
        <script>
            window.vuebnb_listing_model = "{!! addslashes($listing->toJson()) !!}";
        </script>
    </head>
    <body>

        <div id="toolbar">
            <img class="icon" src="{{ asset('images/logo.png') }}">
            <h1>vuebnb</h1>
        </div>

        <div id="app">

            <header-image :image-url="images[0]" @header-clicked="openModal"></header-image>

            <div class="container">

                <div class="heading">
                    <h1>@{{ title }}</h1>
                    <p>@{{ address }}</p>
                </div>

                <hr>

                <div class="about">
                    <h3>About this listing</h3>
                    <expandable-text>@{{ about }}</expandable-text>
                </div>

                <div class="lists">

                    <feature-list title="Amenities" :items="amenities">
                        <template slot-scope="amenity">
                            <i class="fa fa-lg" :class="amenity.icon"></i>
                            <span>@{{ amenity.title }}</span>
                        </template>
                    </feature-list>

                    <feature-list title="Prices" :items="prices">
                        <template slot-scope="price">
                            @{{ price.title }}: <strong>@{{ price.value }}</strong>
                        </template>
                    </feature-list>

                </div>
            </div>

            <!-- modal -->
            <modal-window ref="imageModal">
                <image-carousel :images="images"></image-carousel>
            </modal-window>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
