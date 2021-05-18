@include('components.myHead')

        <section class="jumbotron">
            <!-- background img -->
        </section>

        <section class="blue-row">
            <div class="img-datails-container">
                <span class="blue-label">
                    <a href=""> COMIC BOOK</a>
                </span>
                <img class="img-details-card" src="{{$item['thumb']}}" alt="">
                <span class="blue-label gallery">
                    <a href=""> VIEW GALLERY</a>
                </span>
            </div>
        </section>

        <section class="movie-details">

            <div class="movie-details-container">
                    
                    <h2 class="title-item">
                        {{$item['title']}}
                    </h2>
                    <div class="price-container">

                        <div class="price-item">

                            <span>
                                U.S. Price:
                                <span> {{$item['price']}}</span>
                            </span>

                            
                        </div>
                        <div class="price-item available">
                            <div class="border">AVAILABLE
                                <span>
                                    Check Availability
                                    <i class="fas fa-caret-down"></i>
                                </span>
                            </div>
                        </div>

                    </div>

                    <div class="description-item">
                        
                        <p>
                            {{$item['description']}}
                        </p>

                    </div>

                    <img class="flayer" src="{{ asset('/storage/images/adv.jpg') }}" alt="">
                </div>

        </section>

        <section class="more-info">

            
        </section>





@include('components.myFooter')