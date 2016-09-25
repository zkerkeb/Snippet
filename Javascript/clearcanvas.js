// petite fonction qui recupere le canvas et le supprime, a ameliorer.

function clearcanvas(){
    canvas  = document.querySelector('#canvas'),
    context = canvas.getContext("2d");
    canvas.width = width ;
    canvas.height = height;
    context.clearRect(0,0,width,height);
    // sauvegarder.removeAttribute('href');
  }

