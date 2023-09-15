<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  MovieVel</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="shortcut icon" href="img/computer.jpg" type="image/x-icon">
</head>
<body>
   <header>
    <div class="nav container">

    <a href="movievel-home.php" class="logo">
        Movie<span>Vel</span>
    </a>
   <a href="movie-adding.php"> <div class="add"></div></a>
    <div class="search-box">
      <input type="search" name="" id="search-input" placeholder="search movie">  
      <svg class="bx bx-search" width="20" height="16" viewBox="0 0 16 16"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><path d="m11.25 11.25l3 3"/><circle cx="7.5" cy="7.5" r="4.75"/></g></svg>
    </div>

    <a href="#" class="user">
        <img src="img/user.jpg" class="user-img" alt="">
    </a>
    <div class="navbar">
        <a href="#home" class="nav-link nav-active">
        <svg  width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586l6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z"/></svg>
        <div class="nav-link-title">Home</div>
    </a>
    <a href="#popular" class="nav-link">
    <svg  width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M16.5 8c0 1.5-.5 3.5-2.9 4.3c.7-1.7.8-3.4.3-5c-.7-2.1-3-3.7-4.6-4.6c-.4-.3-1.1.1-1 .7c0 1.1-.3 2.7-2 4.4C4.1 10 3 12.3 3 14.5C3 17.4 5 21 9 21c-4-4-1-7.5-1-7.5c.8 5.9 5 7.5 7 7.5c1.7 0 5-1.2 5-6.4c0-3.1-1.3-5.5-2.4-6.9c-.3-.5-1-.2-1.1.3"/></svg>
        <div class="nav-link-title">trending</div>
    </a>
    <a href="#movies" class="nav-link">
    <svg  width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 10.9c-.61 0-1.1.49-1.1 1.1s.49 1.1 1.1 1.1c.61 0 1.1-.49 1.1-1.1s-.49-1.1-1.1-1.1zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2zm2.19 12.19L6 18l3.81-8.19L18 6l-3.81 8.19z"><animateTransform id="eosIconsCompass0" attributeName="transform" attributeType="XML" begin="0;eosIconsCompass2.end" dur="1s" from="-90 12 12" to="0 12 12" type="rotate"/><animateTransform id="eosIconsCompass1" attributeName="transform" attributeType="XML" begin="eosIconsCompass0.end" dur="1s" from="0 12 12" to="-90 12 12" type="rotate"/><animateTransform id="eosIconsCompass2" attributeName="transform" attributeType="XML" begin="eosIconsCompass1.end" dur="1s" from="-90 12 12" to="270 12 12" type="rotate"/></path></svg>
        <div class="nav-link-title">explore</div>
    </a>
    <a href="play-page.php" class="nav-link">
    <svg   width="24" height="24" viewBox="0 0 500 500"><path fill="currentColor" d="m132.992 48.756l-9.984 14.976l77.287 51.524c4.32-4.192 9.542-8.012 15.703-11.162l-83.006-55.338zm246.016 0l-83.006 55.338c6.16 3.15 11.383 6.97 15.703 11.162l77.287-51.524l-9.984-14.976zM256 113.244c-22 0-35.334 7.06-43.637 15.363c-4.703 4.704-7.58 9.97-9.316 14.637h105.906c-1.736-4.668-4.613-9.933-9.316-14.637c-8.303-8.303-21.637-15.363-43.637-15.363zm-191.936 48c-5.044 0-11.106 2.784-15.697 7.37c-4.59 4.584-7.367 10.63-7.367 15.63v279h430V184.2c.026-5.457-2.764-11.393-7.227-15.87c-4.463-4.477-10.346-7.086-14.826-7.086H64.064zm30.295 23h257.745c10.374 0 20.79 6.818 26.776 16H112c-16 0-32 16-32 32v160c25.924-162.54 145.877-185.697 299.016-191.795c3.106 4.836 4.984 10.315 4.984 15.794v192c0 16-16 32-33.88 32H95.35c-15.35 0-31.35-16-31.35-32v-192c0-16 16-32 30.36-32zm328.663 7c13.7 0 25 11.3 25 25s-11.3 25-25 25s-25-11.3-25-25s11.3-25 25-25zm-23.023 144h48v18h-48v-18zm0 32h48v18h-48v-18zm0 32h48v18h-48v-18z"/></svg>
        <div class="nav-link-title">movies</div>
    </a>
    <a href="#home" class="nav-link">
    <svg  width="24" height="24" viewBox="0 0 14 14"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="m7 12.45l-5.52-5c-3-3 1.41-8.76 5.52-4.1c4.11-4.66 8.5 1.12 5.52 4.1Z"/></svg>
        <div class="nav-link-title">favourite</div>
    </a>
    </div>
    </div>
   </header>
<section class="home container" id="home">
  <img src="img/home.jpeg" alt="" class="play-img">
    <div class="home-text">
        <h1 class="home-title"> blue beetle <br> 2023 ‧ Action/Adventure ‧ 2h 7m</h1>
    <p>Releasing 12 nov  </p>
    <a href="play-page.php" class="watch-btn">
    <svg  width="24" height="24" viewBox="0 0 16 16"><path fill="currentColor" d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0ZM1.5 8a6.5 6.5 0 1 0 13 0a6.5 6.5 0 0 0-13 0Zm4.879-2.773l4.264 2.559a.25.25 0 0 1 0 .428l-4.264 2.559A.25.25 0 0 1 6 10.559V5.442a.25.25 0 0 1 .379-.215Z"/></svg>
    <span>Watch The trailer</span> 
</a>
    </div>
</section>
<section class="popular container" id="popular">
    <div class="heading">
        <h2 class="heading-title">Popular Movies</h2>
        <div class="swiper-btn">
          <div class="swiper-button-prev"></div>        
           <div class="swiper-button-next"></div>
        </div>
    </div>
     <div class="popular-content swiper">
       <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="movie-box">
            <img src="img/casts/7 kings must die/7 lings must die.jpg" alt="" class="movie-box-img">
           <div class="box-text">
              <h2 class="movie-title">The Last Kingdom: Seven Kings Must Die</h2>
                 <span class="movie-type">2023 ‧ Action/Drama ‧ 1h 51m</span>
                   <a href="#" class="watch-btn play-btn">
                       <svg  width="24" height="24" viewBox="0 0 16 16"><path fill="currentColor" d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0ZM1.5 8a6.5 6.5 0 1 0 13 0a6.5 6.5 0 0 0-13 0Zm4.879-2.773l4.264 2.559a.25.25 0 0 1 0 .428l-4.264 2.559A.25.25 0 0 1 6 10.559V5.442a.25.25 0 0 1 .379-.215Z"/></svg>
                    </a>
            </div>
           </div>
       </div> 
      <div class="swiper-slide">
        <div class="movie-box">
            <img src="img/casts/my foult/john wick/jonh wick 4.jpg" alt="" class="movie-box-img">
         <div class="box-text">
         <h2 class="movie-title">john wick</h2>
         <span class="movie-type">Action/Drama</span>
         <a href="#" class="watch-btn play-btn">
    <svg  width="24" height="24" viewBox="0 0 16 16"><path fill="currentColor" d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0ZM1.5 8a6.5 6.5 0 1 0 13 0a6.5 6.5 0 0 0-13 0Zm4.879-2.773l4.264 2.559a.25.25 0 0 1 0 .428l-4.264 2.559A.25.25 0 0 1 6 10.559V5.442a.25.25 0 0 1 .379-.215Z"/></svg>
    
</a>
         </div>
        </div>
      </div> 
      <div class="swiper-slide">
        <div class="movie-box">
            <img src="img/popur3.jpg" alt="" class="movie-box-img">
         <div class="box-text">
         <h2 class="movie-title">fast-x: return</h2>
         <span class="movie-type">Action</span>
         <a href="#" class="watch-btn play-btn">
    <svg  width="24" height="24" viewBox="0 0 16 16"><path fill="currentColor" d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0ZM1.5 8a6.5 6.5 0 1 0 13 0a6.5 6.5 0 0 0-13 0Zm4.879-2.773l4.264 2.559a.25.25 0 0 1 0 .428l-4.264 2.559A.25.25 0 0 1 6 10.559V5.442a.25.25 0 0 1 .379-.215Z"/></svg>
    
</a>
         </div>
        </div>
      </div> 
      <div class="swiper-slide">
        <div class="movie-box">
            <img src="img/home.jpeg" alt="" class="movie-box-img">
         <div class="box-text">
         <h2 class="movie-title">blue beetle</h2>
         <span class="movie-type">Action / sci-fi</span>
         <a href="#" class="watch-btn play-btn">
    <svg  width="24" height="24" viewBox="0 0 16 16"><path fill="currentColor" d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0ZM1.5 8a6.5 6.5 0 1 0 13 0a6.5 6.5 0 0 0-13 0Zm4.879-2.773l4.264 2.559a.25.25 0 0 1 0 .428l-4.264 2.559A.25.25 0 0 1 6 10.559V5.442a.25.25 0 0 1 .379-.215Z"/></svg>
    
</a>
         </div>
        </div>
      </div> 
    </div>

    </div>
</section>

<section class="movies container" id="movies">
<div class="heading">
        <h2 class="heading-title">Movies And Shows</h2>
    </div>
    <div class="movies-content">
      </div>
</section>
 
<!-- next page -->
<div class="next-page">
  <a href="#" class="next-btn">Next page</a>
</div>
<!--  copyright  -->
<div class="copyright">
   <p>&#169; gilsupertuyambaze all right reserved</p>
</div>






<script src="js/movie.js"></script>
  <script src="js/swiper-bundle.min.js"></script>
 <script src="js/main.js"></script>
</body>
</html>