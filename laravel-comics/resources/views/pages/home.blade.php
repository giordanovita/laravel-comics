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

    
    
    </div>


@include('components.myFooter')