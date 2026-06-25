
var elem = document.getElementById('carrusel')
var testimonials = [ 
  {
    id: 1,
    name: 'Curso de Regulación del Mercado de Energía',
    text: 'El curso permite conocer las partes y los fundamentos físicos de un motor eléctrico para posteriormente entrar en el apartado de mantenimiento en sus diferentes vertientes',
    img: 'https://icc.com.pe/plataforma/img/portada_regulacion.jpg',
    company: 'ICC'
  },
  {
    id: 1,
    name: 'Especialización de Motores Eléctricos Trifásicos',
    text: 'El curso permite conocer las partes y los fundamentos físicos de un motor eléctrico para posteriormente entrar en el apartado de mantenimiento en sus diferentes vertientes',
    img: 'https://icc.com.pe/plataforma/img/motores_electricos.jpg',
    company: 'ICC'
  },
  {
    id: 1,
    name: 'Sistema de Gestión y Seguridad en el Trabajo Ley Nº29783',
    text: 'El curso permite conocer las partes y los fundamentos físicos de un motor eléctrico para posteriormente entrar en el apartado de mantenimiento en sus diferentes vertientes',
    img: 'https://icc.com.pe/plataforma/img/seguridad.jpg',
    company: 'ICC'
  },
  {
    id: 1,
    name: 'Sistema de Puesta a Tierra<br>',
    text: 'El curso permite conocer las partes y los fundamentos físicos de un motor eléctrico para posteriormente entrar en el apartado de mantenimiento en sus diferentes vertientes',
    img: 'https://icc.com.pe/plataforma/img/tierra.jpg',
    company: 'ICC'
  },
  {
    id: 1,
    name: 'Curso de Analizador de Redes',
    text: 'El curso permite conocer las partes y los fundamentos físicos de un motor eléctrico para posteriormente entrar en el apartado de mantenimiento en sus diferentes vertientes',
    img: 'https://icc.com.pe/plataforma/img/redes.jpg',
    company: 'ICC'
  },
  {
    id: 1,
    name: 'Análisis de Facturación y Tarifas Eléctricas',
    text: 'El curso permite conocer las partes y los fundamentos físicos de un motor eléctrico para posteriormente entrar en el apartado de mantenimiento en sus diferentes vertientes',
    img: 'https://icc.com.pe/plataforma/img/analisis.jpg',
    company: 'ICC'
  },
  {
    id: 1,
    name: 'Banco de Condensadores<br>',
    text: 'El curso permite conocer las partes y los fundamentos físicos de un motor eléctrico para posteriormente entrar en el apartado de mantenimiento en sus diferentes vertientes',
    img: 'https://icc.com.pe/plataforma/img/banco.jpg',
    company: 'ICC'
  },
  {
    id: 1,
    name: 'Proceso de Desalojo en la Corte Suprema',
    text: 'El curso permite conocer las partes y los fundamentos físicos de un motor eléctrico para posteriormente entrar en el apartado de mantenimiento en sus diferentes vertientes',
    img: 'https://icc.com.pe/plataforma/img/desalojo.jpg',
    company: 'ICC'
  },
  {
    id: 1,
    name: 'Curso de Obra por Impuesto',
    text: 'El curso permite conocer las partes y los fundamentos físicos de un motor eléctrico para posteriormente entrar en el apartado de mantenimiento en sus diferentes vertientes',
    img: 'https://icc.com.pe/plataforma/img/obra.jpg',
    company: 'ICC'
  },
  {
    id: 1,
    name: 'Ley de Contrataciones con el Estado',
    text: 'El curso permite conocer las partes y los fundamentos físicos de un motor eléctrico para posteriormente entrar en el apartado de mantenimiento en sus diferentes vertientes',
    img: 'https://icc.com.pe/plataforma/img/contratacion.jpg',
    company: 'ICC'
  },
  {
    id: 1,
    name: 'Curso de Derecho Ambiental<br>',
    text: 'El curso permite conocer las partes y los fundamentos físicos de un motor eléctrico para posteriormente entrar en el apartado de mantenimiento en sus diferentes vertientes',
    img: 'https://icc.com.pe/plataforma/img/ambiental.jpg',
    company: 'ICC'
  },
  {
    id: 1,
    name: 'Curso de Derecho Penal<br>',
    text: 'El curso permite conocer las partes y los fundamentos físicos de un motor eléctrico para posteriormente entrar en el apartado de mantenimiento en sus diferentes vertientes',
    img: 'https://icc.com.pe/plataforma/img/penal.jpg',
    company: 'ICC'
  },
  {
    id: 1,
    name: 'Especialización Nuevo Código Procesal Penal',
    text: 'El curso permite conocer las partes y los fundamentos físicos de un motor eléctrico para posteriormente entrar en el apartado de mantenimiento en sus diferentes vertientes',
    img: 'https://icc.com.pe/plataforma/img/procesal.jpg',
    company: 'ICC'
  },
  {
    id: 1,
    name: 'Litigación en el Nuevo Código Procesal Penal',
    text: 'El curso permite conocer las partes y los fundamentos físicos de un motor eléctrico para posteriormente entrar en el apartado de mantenimiento en sus diferentes vertientes',
    img: 'https://icc.com.pe/plataforma/img/litigacion.jpg',
    company: 'ICC'
  },
  {
    id: 1,
    name: 'Motores Eléctricos 2021',
    text: 'El curso permite conocer las partes y los fundamentos físicos de un motor eléctrico para posteriormente entrar en el apartado de mantenimiento en sus diferentes vertientes',
    img: 'https://icc.com.pe/plataforma/img/motores2021.png',
    company: 'ICC'
  },
  {
    id: 1,
    name: 'Sistema Puesta Tierra 2021',
    text: 'El curso permite conocer las partes y los fundamentos físicos de un motor eléctrico para posteriormente entrar en el apartado de mantenimiento en sus diferentes vertientes',
    img: 'https://icc.com.pe/plataforma/img/sistema-tierra-2021.png',
    company: 'ICC'
  },
]

var cards = ''

testimonials.forEach(el => {
  let template = `

    <a href=''><div class="card flex flex-col items-center shadow-lg w-2/3 bg-white p-4 m-2 text-center">
    <img src="${el.img}" class=" w-full  ">
    <p>${el.text}</p>
    <p class="font-bold mt-4">${el.name} - ${el.company}</p>
    </div></a>
  `
  
  cards += template
})

elem.insertAdjacentHTML('beforeend', cards)

// ARROWS

var right = document.getElementById('carrousel-right')

var left = document.getElementById('carrousel-left')

right.addEventListener('click', function(){
  elem.scrollLeft += 800
})

left.addEventListener('click', function(){
  elem.scrollLeft -= 800
})