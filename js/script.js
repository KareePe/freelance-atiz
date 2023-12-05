const isVideoPlaying = video => !!(video.currentTime > 0 && !video.paused && !video.ended && video.readyState > 2);

function playVideo() {
  const video = document.getElementById('hero-video')
  document.getElementById('myBtn').onclick = function () {
    document.getElementById('myBtn').classList.add('hidden')
      video.play();
  }

  video.onclick = function() {
    if (isVideoPlaying(video)) {
      video.pause()
      document.getElementById('myBtn').classList.remove('hidden')
    }
  }
}

window.onload = function(){
  playVideo()
}
