  
  <?php  
  error_reporting(0);
  session_start();

  $usuario=$_SESSION['username'];

  if (!isset($usuario)) {

    header("location: index.php");



  }else{





  }



  ?>


  <!doctype html>

    <html>

    <head>

      <!-- ... -->

      <meta charset="UTF-8" />

      <meta name="viewport" content="width=device-width, initial-scale=1.0" />



      <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

      <link rel="stylesheet" type="text/css" href="../../css/estilos.css">

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />

      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous" />

      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous" />







      <nav class="flex flex-wrap items-center justify-between p-1 bg-fondo">

       <img  class="w-40"  src="https://drive.google.com/uc?/export=view/file/d/1zZjGalqewXFc_aB4YsHxpgZzSPs022AP/view&id=1zZjGalqewXFc_aB4YsHxpgZzSPs022AP

       ">



       <div class="flex md:hidden">

        <button id="hamburger">

          <img class="toggle block" src="https://img.icons8.com/fluent-systems-regular/2x/menu-squared-2.png" width="40" height="40" />

          <img class="toggle hidden" src="https://img.icons8.com/fluent-systems-regular/2x/close-window.png" width="40" height="40" />

        </button>

      </div> 



      <div class="toggle hidden w-full md:w-auto md:flex text-right text-bold mt-5 md:mt-0 border-t-2 border-blue-900 md:border-none">        



        <a href="#" class="  block md:inline-block text-sm px-4 py-2 leading-none rounded text-white border-white hover:border-transparent hover:text-indigo-500 hover:bg-white mt-4 md:mt-0">Mis Promociones</a>

        <a href="#" class="  block md:inline-block text-sm px-4 py-2 leading-none rounded text-white border-white hover:border-transparent hover:text-indigo-500 hover:bg-white mt-4 md:mt-0">Blog!</a>

        <a href="../../" class="  block md:inline-block text-sm px-4 py-2 leading-none rounded text-white border-white hover:border-transparent hover:text-indigo-500 hover:bg-white mt-4 md:mt-0 lg:hidden">Cerrar Sesión</a>



      </div>





      



      <div href="#" class=" hidden md:flex w-full md:w-auto px-4 py-1 text-right  text-white md:rounded">

        

        

        <div class="container mx-auto px-4 flex items-center justify-between py-4">



          <div class="relative" x-data="{ isOpen: false}">

            <button 

            @click="isOpen = !isOpen" 

            @keydown.escape="isOpen = false" 

            class="flex items-center" 

            >

            <img src="http://www.gravatar.com/avatar?d=mm" alt="avatar" class="w-8 h-8 rounded-full">

            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M15.3 9.3a1 1 0 0 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 1.4-1.4l3.3 3.29 3.3-3.3z" class="heroicon-ui"></path></svg>

          </button>

          <ul x-show="isOpen"

          @click.away="isOpen = false"

          class="absolute font-normal bg-white shadow overflow-hidden rounded w-48 border mt-2 py-1 right-0 z-20 text-black "

          >

          <li>

            <a href="../Aula/logica/salir_aula.php" class="flex items-center px-3 py-3 hover:bg-gray-200">

              <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="text-gray-600"><path d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v2z" class="heroicon-ui"></path></svg>

              <span class="ml-2 ">Cerrar Sesion</span>

            </a>

          </li>



        </ul>

      </div>

    </div>





  </div>

</nav> 

</head>







