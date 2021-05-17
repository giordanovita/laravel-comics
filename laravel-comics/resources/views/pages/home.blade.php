@include('components.myHead')


<!-- parte main -->
    <div class="container">
        <section class="jumbotron">
            <!-- background img -->
        </section>
    
        <section class="movies-list">

            <div class="current-label">
                CURRENT SERIES
            </div>
           <ul>
            
                @foreach ($data as $movie)

                  <li>  
                        <a href="">
                            <img src="{{$movie['thumb']}}" alt="">
                            <span>
                                {{strtoupper($movie['series'])}}

                            </span>
                         </a>
                  </li>


                @endforeach

            </ul>
            
            <div class="b-container">
                <button class="b-more">LOAD MORE</button>
            </div>
        </section>

        <section class="seller-row">
            <ul class="sell-items">
                
                <li>
                    <a href="">

                        <img class="digitalImg" src="{{ asset('/storage/images/buy-comics-digital-comics.png') }}" alt="">
                        <span>DIGITAL COMICS</span>
                    </a>
                </li>

                <li>
                    <a href="">

                        <img class="mercImg" src="{{ asset('/storage/images/buy-comics-merchandise.png') }}" alt="">
                        <span>DC MERCHANDISE</span>
                    </a>
                </li>

                <li>
                     <a href="">

                        <img class="subImg" src="{{ asset('/storage/images/buy-comics-subscriptions.png') }}" alt="">
                        <span>SUBSCRIPTION</span>
                    </a>
                </li>

                <li>
                    <a href="">

                        <img class="posImg" src="{{ asset('/storage/images/buy-comics-shop-locator.png') }}" alt="">  
                        <span>COME SHOP LOCATION</span>
                    </a>
                </li>

                <li>
                    <a href="">

                         <img class="visaImg" src="{{ asset('/storage/images/buy-dc-power-visa.svg') }}" alt="">  
                         <span>DC POWER VISA</span>
                    </a>
                </li>
            </ul>
        </section>

    
    
    </div>


@include('components.myFooter')