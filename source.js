new Vue({
    el: '#app',
    vuetify: new Vuetify({
      theme: { dark: true }
    }),
    data: () => ({
      drawer: true,
      items: [
        { icon: 'i', text: 'Most Popular' },
        { icon: 'i', text: 'Subscriptions' },
        { icon: 'i', text: 'History' },
        { icon: 'i', text: 'Playlists' },
        { icon: 'i', text: 'Watch Later' },
      ],
      items2: [
        { picture: 28, text: 'Julian' },
        { picture: 38, text: 'Ignacio' },
        { picture: 48, text: 'Xbox Ahoy' },
        { picture: 58, text: 'Nokia' },
        { picture: 78, text: 'MKBHD' },
      ],
    })
  })