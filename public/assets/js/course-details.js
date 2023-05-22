let videoList = document.querySelectorAll('.video-list-container nav .list');

videoList.forEach(vid =>{
   vid.onclick = () =>{
      videoList.forEach(remove =>{remove.classList.remove('active')});
      vid.classList.add('active');
      let src = vid.querySelector('.list-video').src;
      let title = vid.querySelector('.list-title').innerHTML;
      document.querySelector('.main-video-container .main-video').src = src;
      //document.querySelector('.main-video-container .main-video').play();
      document.querySelector('.main-video-container .main-vid-title').innerHTML = title;
   };
});
(function() {
   // Bind Click event to the drop down navigation button
   $('.nav-button').on('click',function(){
      this.parentNode.parentNode.classList.toggle('closed')
   })
   // document.querySelectorAll('.nav-button').addEventListener('click', function() {
   //   /*  Toggle the CSS closed class which reduces the height of the UL thus 
   //       hiding all LI apart from the first */
   //   this.parentNode.parentNode.classList.toggle('closed')
   // }, false);
   
 })();