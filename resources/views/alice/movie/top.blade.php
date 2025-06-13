<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>アリスの映画紹介サイト | 映画予告編制作</title>
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
    <header>
      <div class="container">
      <div class="header-title-area">
      <h1 id="logo">アリスの映画紹介サイト</h1>
      </div>
        <ul class="header-navigation">
          <li><a href="#">TOP</a></li>
          <li><a href="#">ranking</a></li>
          <li><a href="#">year</a></li>
          <li><a href="#">genre</a></li>
        </ul>
      </div>
    </header>
    <fugure id="key">
    </figure>
    <div id="key-in" class="wrapper">
      <img src="{{ asset('image/top-key.jpg') }}" class=""></div>
    </div>
    <div class="main"> 
      <div class="wrapper">
        <div class="loops">
          <div class="row type-works">
            <div class="col x2 match" style="height 1377:">
              <figure class="teaser-image">
                <div class="popup">
                  <span class="image">
                    <div class="card-contents">
                      <div class="movie-list">
                        <div class="movie-img"><img src="{{ asset('image/image01.jpg') }}" class=""></div>
                      </div>
                    </div>
                  </span>
                </div>
              </figure>
                <span class="text-title">バックインアクション</span>
                <div class="teaser-date">
                  <span class="year">2025</span>
                  <span class="date">1/17</span>
                </div>
              </div>
            
              <div class="col x2 match" style="height 1377:">
                <figure class="teaser-image">
                 <div class="popup">
                 <span class="image">
                   <div class="card-contents">
                      <div class="movie-list">
                        <div class="movie-img"><img src="{{ asset('image/image02.jpg') }}" class=""></div>
                      </div>
                    </div>
                  </span>
                </figure>
                <span class="text-title">ミステリと言うなかれ</span>      
                <div class="teaser-date">
                  <span class="year">2023</span>
                  <span class="date">9/15</span>
                </div>
              </div>

              <div class="col x2 match" style="height 1377:">
                <figure class="teaser-image">
                  <div class="popup">
                   <span class="image">
                    <div class="card-contents">
                      <div class="movie-list">
                        <div class="movie-img"><img src="{{ asset('image/image03.jpg') }}" class=""></div>
                        </div>
                      </div>
                    </div>
                  </span> 
                </figure>
                <span class="text-title">ジュラシックワールド</span>     
                <div class="teaser-date">
                  <span class="year">2025</span>
                  <span class="date">1/17</span>
                </div>
              </div>

              <div class="col x2 match" style="height 1377:">
                    <figure class="teaser-image">
                      <div class="popup">
                        <span class="image">
                          <div class="card-contents">
                            <div class="movie-list">
                              <div class="movie-img"><img src="{{ asset('image/image04.jpg') }}" class=""></div>
                              </div>
                            </div>
                          </span> 
                      </div>
                    </figure>
                    <span class="text-title">翔んで埼玉</span>
                  <div class="teaser-date">
                    <span class="year">2019</span>
                    <span class="date">2/22</span>
                  </div>
              </div>
            
              <div class="col x2 match" style="height 1377:">
                <figure class="teaser-image">
                  <div class="popup">
                    <span class="image">
                      <div class="card-contents">
                        <div class="movie-list">
                          <div class="movie-img"><img src="{{ asset('image/image05.jpg') }}" class=""></div>
                        </div>
                      </div>
                    </span>   
                  </div>
                </figure>
                <span class="text-title">死霊館</span>       
                  <div class="teaser-date">
                    <span class="year">2019</span>
                    <span class="date">2/22</span>
                  </div>
             </div>

                <div class="col x2 match style="hight: 1377px;>
                  <figure class="teaser-image">
                    <div class="popup">
                      <span class="image">
                        <div class="card-contents">
                          <div class="movie-list">
                            <div class="movie-img"><img src="{{ asset('image/image06.jpg') }}" class=""></div>
                          </div>
                        </div>
                      <span>
                    </div>
                  </figure>
                  <span class="text-title">シンデレラ</span>
                  <div class="teaser-date">
                    <span class="year">2015</span>
                    <span class="date">1/17</span>
                  </div>
                </div>
            </div>
          </div>
        </div>
     </div>
  </body>
</html>