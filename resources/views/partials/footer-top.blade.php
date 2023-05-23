<footer>
    <div class="footer-top">
      <div class="container d-flex justify-content-between align-items-center">
        <div class="left">
            @foreach($links_footer as $link)
          <section>
            <h2>{{$link['sectionTitle']}}</h2>
            <ul>
              <li>
                @foreach($link['option'] as $option)
                <div>
                <a href="">{{$option}}</a>
            </div>
                @endforeach
            
              </li>
            </ul>
          </section>
          @endforeach
        </div>
        <div class="right">
          <img src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="">
        </div>
          
      </div>
    </div>
