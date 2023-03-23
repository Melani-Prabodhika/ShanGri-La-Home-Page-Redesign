
$('#side-menu-area').on('click', 'span.side-menu-trigger', function () {

   let $this = $(this),
       wraper = $(this).parents('body').find('>.wraper');
   if ($this.hasClass('open')) {
       document.getElementById('mySidenav').style.width = '0';
       $this.removeClass('open').find('i.fa').removeClass('fa-bars').addClass('fa-bars');
       wraper.removeClass('open');
   } else {
       wraper.addClass('open');
       $this.addClass('open').find('i.fa').removeClass('fa-bars').addClass('fa-bars');
       document.getElementById('mySidenav').style.width = '350px';
   }

});

$('#mySidenav').on('click', '.closebtn', function (e) {
   e.preventDefault();
   let $this = $(this),
       wraper = $(this).parents('body').find('>.wraper');
   wraper.removeClass('open');
   document.getElementById('mySidenav').style.width = '0';
   $('#side-menu-area span.side-menu-trigger').removeClass('open').find('i.fa').removeClass('fa-times').addClass('fa-bars');

});


// Slider
{
  let counter = 1;
  setInterval(function(){
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if(counter > 3){
      counter = 1;
    }
  }, 5000);
}
