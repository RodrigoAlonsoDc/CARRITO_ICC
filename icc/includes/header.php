 
<?php
error_reporting(0);

  ?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ICC</title>
  <meta name="author" content="name">
  <meta name="description" content="description here">
  <meta name="keywords" content="keywords,here">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<script src="https://cdn.tailwindcss.com"></script>
  <!--Replace with your tailwind.css once created-->
  <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
  <!--Totally optional :) -->

<!--Regular Datatables CSS-->
<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
<!--Responsive Extension Datatables CSS-->
<link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

  <style type="">
    <style>

  /*Overrides for Tailwind CSS */
  
  /*Form fields*/
  .dataTables_wrapper select,
  .dataTables_wrapper .dataTables_filter input {
    color: #4a5568;       /*text-gray-700*/
    padding-left: 1rem;     /*pl-4*/
    padding-right: 1rem;    /*pl-4*/
    padding-top: .5rem;     /*pl-2*/
    padding-bottom: .5rem;    /*pl-2*/
    line-height: 1.25;      /*leading-tight*/
    border-width: 2px;      /*border-2*/
    border-radius: .25rem;    
    border-color: #edf2f7;    /*border-gray-200*/
    background-color: #edf2f7;  /*bg-gray-200*/
  }

  /*Row Hover*/
  table.dataTable.hover tbody tr:hover, table.dataTable.display tbody tr:hover {
    background-color: #ebf4ff;  /*bg-indigo-100*/
  }
  
  /*Pagination Buttons*/
  .dataTables_wrapper .dataTables_paginate .paginate_button   {
    font-weight: 700;       /*font-bold*/
    border-radius: .25rem;      /*rounded*/
    border: 1px solid transparent;  /*border border-transparent*/
  }
  
  /*Pagination Buttons - Current selected */
  .dataTables_wrapper .dataTables_paginate .paginate_button.current {
    color: #fff !important;       /*text-white*/
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);  /*shadow*/
    font-weight: 700;         /*font-bold*/
    border-radius: .25rem;        /*rounded*/
    background: #667eea !important;   /*bg-indigo-500*/
    border: 1px solid transparent;    /*border border-transparent*/
  }

  /*Pagination Buttons - Hover */
  .dataTables_wrapper .dataTables_paginate .paginate_button:hover   {
    color: #fff !important;       /*text-white*/
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);   /*shadow*/
    font-weight: 700;         /*font-bold*/
    border-radius: .25rem;        /*rounded*/
    background: #667eea !important;   /*bg-indigo-500*/
    border: 1px solid transparent;    /*border border-transparent*/
  }
  
  /*Add padding to bottom border */
  table.dataTable.no-footer {
    border-bottom: 1px solid #e2e8f0; /*border-b-1 border-gray-300*/
    margin-top: 0.75em;
    margin-bottom: 0.75em;
  }
  
  /*Change colour of responsive icon*/
  table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before, table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
    background-color: #667eea !important; /*bg-indigo-500*/
  }
  
</style>

  </style>

</head>

<body>



  <div class="flex-col w-full md:flex md:flex-row md:min-h-screen">
    <div @click.away="open = false"
      class="flex flex-col flex-shrink-0 w-full text-gray-700 bg-white md:w-64 dark-mode:text-gray-200 dark-mode:bg-gray-800"
      x-data="{ open: false }">
      <!--TEXTO PRINCIPAL  LOGO :) -->
      <div class="flex flex-row items-center justify-between flex-shrink-0 px-8 py-4">
        <a href="#"
          class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Administrador</a>
        <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
          <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
            <path x-show="!open" fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
              clip-rule="evenodd"></path>
            <path x-show="open" fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <!--TEXTO PRINCIPAL  LOGO :) -->

      <!-- BOTONES DE BARRA LATERAL -->
      <nav :class="{'block': open, 'hidden': !open}" class="flex-grow px-4 pb-4 md:block md:pb-0 md:overflow-y-auto">

 <li class="flex mb-5 bg-white rounded-lg shadow-sm ">
          <div x-data="{show: false}" @click.away="show = false">
            <button @click="show = ! show"
              class="px-6 py-2 mt-2 overflow-hidden text-sm border-0 rounded-lg focus:outline-none focus:border-white hover:bg-indigo-400">
              <div class="flex w-40">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span class="py-1 ml-4 ">Cursos</span>
              </div>
            </button>
            <div x-show="show" class="justify-between py-2 mt-2 bg-white rounded-lg shadow-xl">
              <a href="registrar_cursos.php" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white"><span
                  class="text-sm">Registrar Cursos</span></a>

            </div>
          </div>

        </li>





        <li class="flex mb-5 bg-white rounded-lg shadow-sm ">
          <div x-data="{show: false}" @click.away="show = false">
            <button @click="show = ! show"
              class="px-6 py-2 mt-2 overflow-hidden text-sm border-0 rounded-lg focus:outline-none focus:border-white">
              <div class="flex w-40">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span class="py-1 ml-4 ">Estudiantes</span>
              </div>
            </button>
            <div x-show="show" class="justify-between py-2 mt-2 bg-white rounded-lg shadow-xl">
              <a href="registrar_estudiante.php" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white"><span
                  class="text-sm">Ingresar estudiante</span></a>
              <a href="listar_estudiante.php" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white"><span
                  class="text-sm">Lista de estudiante</span></a>

            </div>
          </div>

        </li>

        <li class="flex mb-5 bg-white rounded-lg shadow-sm ">
          <div x-data="{show: false}" @click.away="show = false">
            <button @click="show = ! show"
              class="px-6 py-2 mt-2 overflow-hidden text-sm border-0 rounded-lg focus:outline-none focus:border-white">
              <div class="flex w-40">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span class="py-1 ml-4 ">Inscribir Usuario</span>
              </div>
            </button>
            <div x-show="show" class="justify-between py-2 mt-2 bg-white rounded-lg shadow-xl">
              <a href="inscripcion.php" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white"><span
                  class="text-sm">Inscribir</span></a>
              <a href="lista_inscritos.php" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white"><span
                  class="text-sm">Lista de inscritos</span></a>

            </div>
          </div>
        </li>
      </nav>


    </div>
    <!-- BOTONES DE BARRA LATERAL -->

    <!-- CONTENIDO LATERAL IZQUIERDO  -->

    <main class="flex flex-col flex-grow p-5 transition-all duration-150 ease-in">
      <div class="px-4 py-4 bg-white shadow-lg ">
        <div class="flex flex-row items-center">

          <div class="relative hidden md:flex">
            <div class="absolute top-0 left-0 inline-flex items-center justify-center w-10 h-full text-gray-400">
              <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                viewBox="0 0 24 24" stroke="currentColor">
                <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
              </svg>
            </div>
            <input id="search" type="text" name="search"
              class="w-full h-10 pl-10 pr-4 text-sm placeholder-gray-500 border border-gray-300 rounded-lg sm:text-base md:w-96 focus:outline-none focus:border-indigo-400"
              placeholder="Search..." />

          </div>
          
          <div class="flex ml-auto">
           

      


            <div class="flex flex-row items-center">
              <div x-data="{show: false}" @click.away="show = false">
                <button @click="show = ! show"
                  class="px-6 py-2 mt-2 overflow-hidden text-sm border-0 rounded-lg focus:outline-none focus:border-white">
                  <div class="flex flex-col-2">
                    <img src="https://pbs.twimg.com/profile_images/378800000298815220/b567757616f720812125bfbac395ff54_normal.png"
                      alt class="w-10 h-10 bg-gray-200 border rounded-full" />
            
                      <span class="flex flex-col ml-2">
                        <span class="w-20 font-semibold leading-none tracking-wide truncate">John Doe</span>
                        <span class="w-20 mt-1 text-xs leading-none text-gray-500 truncate">Manager</span>
                      </span>
                  </div>
            
            
            
                </button>
                <div x-show="show" class="justify-between py-1 mt-1 bg-white rounded-lg shadow-xl">
                  <a href="logica/salir.php" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white"><span
                      class="text-sm">Cerrar Sesion</span></a>
                  <a href="listar_estudiante.php" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white"><span
                      class="text-sm">Lista de estudiante</span></a>
                </div>
              </div>
            
            
            
            </div>

      
    
          </div>
        </div>

      </div>