<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('/fontawesome/font/css/all.css') }}">
    <title>Music Player</title>
</head>
<body>
    <div class="app-player">

        <div class="player-container">  

            <div class="player-left">
                <div class="player-left-top">
                    <div class="cd">
                        <div class="cd-thumb">
    
                        </div>
                    </div>
                    <!-- <img src="{{ url('/img/music-avatar.jpg') }}" alt="" class="album-art"> -->
                </div>
                
                <div class="player-left-bottom">
                    <div class="time-container">        
                        <input id="progress" class="progress" type="range" value="0" step="1" min="0" max="100">
                        <audio id="audio" src=""></audio>
                        <div class="timer">
                            <div class="current-time">01:00</div>
                            <div class="duration-time">03:20</div>

                        </div>
                    </div>
                    
                    <div class="control-container">
                        <div class="btn btn-repeat">
                            <i class="fas fa-redo"></i>
                        </div>
                        <div class="btn btn-prev">
                            <i class="fas fa-step-backward"></i>
                        </div>
                        <div class="btn btn-toggle-play">
                            <i class="fas fa-pause icon-pause"></i>
                            <i class="fas fa-play icon-play"></i>
                        </div>
                        <div class="btn btn-next">
                            <i class="fas fa-step-forward"></i>
                        </div>
                        <div class="btn btn-random">
                            <i class="fas fa-random"></i>
                        </div>
                    </div>

                    <footer>
                        <h4>Now playing:</h4>
                        <h2 class="song-name">String 57th & 9th</h2>
                        <h2 class="singer">String 57th & 9th</h2>
                    </footer>
                </div>
            </div>

            <div class="player-right">
                <div class="play-list">
                    <!-- <div class="song">
                        <div class="thumb" 
                            style="background-image: url('/img/music-avatar.jpg')">
                        </div>
                        <div class="body">
                            <h3 class="title">Music name</h3>
                            <p class="author">Singer</p>
                        </div>
                        <div class="option">
                            <i class="fas fa-ellipsis-h"></i>
                        </div>
                    </div>    -->
                </div>
            </div>
         
        </div>
    </div>
    <script src="{{ url('/js/script.js') }}"></script>
</body>
</html>