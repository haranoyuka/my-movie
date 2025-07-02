@extends('layouts.alice')
@section('title', '映画のtop')

@section('content')
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
        <h1 class="logo">アリスの映画紹介サイト</h1>
        </div>
          <ul class="header-navigation">
            <li><a href="#">TOP</a></li>
            <li><a href="#">Ranking</a></li>
            <li><a href="#">Year</a></li>
            <li><a href="#">Genre</a></li>
          </ul>
        </div>
      </header>
      <figure id="key">
        <div id="key-in" class="wrapper">
          <img src="{{ asset('image/top-key.jpg') }}" class="">
        </div>
      </figure>
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
                    </div>
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
                            <div class="movie-img"><img src="{{ asset('image/image003.png') }}" class=""></div>
                          </div>
                        </div>
                      </span> 
                    </div> 
                  </figure>
                  <span class="text-title">ジュラシックワールド</span>     
                  <div class="teaser-date">
                    <span class="year">2015</span>
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
                          <div class="movie-img"><img src="{{ asset('image/image006.png') }}" class=""></div>
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
      </main>
      <footer>
        <section id="profile">
          <div class="wrapper">
            <div class="d-flex">
              <div class="con-l">
                <h2 class="hd-main">PROFILE</h2>
                  <dl class="d-flex">
                    <dt>サイト名</dt>
                    <dd>アリスの映画紹介サイト</dd>
                    <dt>サイト管理者</dt>
                    <dd>yuka</dd>
                    <dt>お問い合わせ先</dt>
                    <dd>01-0000-0101</dd>
                  </dl>
              </div>
              <div class="con-r">
                <div class="footer-img">
                <img src="{{ asset('image/image07.png') }}" class="map-image">  
              </div>
            </div>
          </div>
        </section>
        <div class="copyright">
          <small> 2023 alice movie-intro </small>
        </div>
      </footer>
    </body>
  </html>
@endsection
