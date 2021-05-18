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

            <div class="info-container">
                <div class="info-left-side">
                    <div class="first-row">
                        <h4>
                            Talent
                        </h4>
                    </div>

                    <div class="mini-row">
                        <div class="mini-title">
                            Art by:
                        </div>

                        <div class="mini-content">
                            @foreach ($item['artists'] as $artist)
                                @if ($loop->last)
                                    <a href="" >
                                        {{$artist}}
                                    </a>
                                @else 
                                    <a href="" >
                                        {{$artist}}
                                    </a>
                                    ,
                                @endif
                            @endforeach
                        
                        </div>
                    </div>

                    <div class="mini-row">
                        <div class="mini-title">
                            Written by:
                        </div>

                        <div class="mini-content">
                            @foreach ($item['writers'] as $writers)
                                @if ($loop->last)
                                    <a href="" >
                                        {{$writers}}
                                    </a>
                                @else 
                                    <a href="" >
                                        {{$writers}}
                                    </a>
                                    ,
                                @endif
                            @endforeach
                        
                        </div>
                    </div>
                </div>


               
                <div class="info-right-side">
                    <div class="first-row">
                        <h4>
                            Specs
                        </h4>
                    </div>

                    <div class="mini-row">
                        <div class="mini-title">
                            Series:
                        </div>

                        <div class="mini-content">
                           <a href="">
                                {{strtoupper($item['series'])}}
                            </a>
                        </div>
                    </div>

                    <div class="mini-row">
                        <div class="mini-title">
                            U.S. Price:
                        </div>
                    
                        <div class="mini-content"> 
                            {{$item['price']}}
                        </div>
                    </div>
                        <div class="mini-row">

                            <div class="mini-title">
                                On Sale Date: 
                            </div>
                       

                        
                            <div class="mini-content">
                                {{$item['sale_date']}}
                            </div>
                        </div>
                        
                    </div>
                    </div>
                </div>
            </div>

            <div class="seller-grey-row">
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
            </div>
    
        </section>





@include('components.myFooter')