new Vue({
    el: '#app',
    vuetify: new Vuetify({
      theme: { dark: true }
    }),
    data: () => ({
      drawer: true,
      items: [
        { icon: 'mdi-account-circle', text: 'Informacion' },
        { icon: 'mdi-equalizer', text: 'Estadisticas' },
        { icon: 'mdi-calendar-multiselect', text: 'Actividades' },
      ],
      itemStat: [
        { title: 'Last Day', image:'casa' },
        { title: 'Last Month', image:'logo1'  },
        { title: 'Activities: Family', image:'casa.jpg'  },
      ],
      items2: [
        { picture: 28, text: 'Julian Gonzalez' },
        { picture: 38, text: 'Ignacio Godoy' },
        { picture: 48, text: 'Mariana Ahoy' },
        { picture: 68, text: 'Nokia Milcien' },
        { picture: 78, text: 'Karina Estevez' },
      ],
        info: [
          {
            name: 'NAME ',
            calories: 'Pedro Zaragoza',
          },
          {
            name: 'AGE',
            calories: 54,
          },
          {
            name: 'GENDER',
            calories: 'Male',
          },
          {
            name: 'DNI',
            calories: 17605011,
          },
          {
            name: 'PHONE',
            calories: 42152936,
          },
          {
            name: 'EMERGENCY CONTACT NAME',
            calories: 'Maria Lopez',
          },
          {
            name: 'EMERGENCY CONTACT PHONE',
            calories: 48058865,
          },
        ],
    })
  })