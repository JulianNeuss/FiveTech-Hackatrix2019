<!DOCTYPE html>
<html>

<head>
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
</head>
<body>
    <div id="app">
        <v-app id="inspire">
          <v-navigation-drawer v-model="drawer" app clipped>
            
            <v-subheader class="mt-5 white--text text--darken-1">Davor Vindis</v-subheader>  
            <v-list dense>
              <v-list-item v-for="item in items" :key="item.text" @click="">
                <v-list-item-action>
                    
                  <v-icon>{{ item.icon }}</v-icon>
                </v-list-item-action>
                <v-list-item-content>
                  <v-list-item-title>{{ item.text }}</v-list-item-title>
                </v-list-item-content>
              </v-list-item>
              <v-subheader class="mt-3 grey--text text--darken-1">PACIENTES</v-subheader>
              <v-list>
                <v-list-item v-for="item in items2" :key="item.text" @click="">
                  <v-list-item-avatar>
                    <img :src="`https://randomuser.me/api/portraits/men/${item.picture}.jpg`" alt="">
                  </v-list-item-avatar>
                  <v-list-item-title v-text="item.text"></v-list-item-title>
                </v-list-item>
            </v-list>
            </v-list>

          </v-navigation-drawer>
      
          <v-app-bar app clipped-left color="#A71930" height="100" dense>
            <v-toolbar-title class="mr-5 align-center">
                                               
                <!-- <v-img aspect-ratio="1" contain="true" src="../resources/memento.png"></v-img>-->
              <span class="title">memento</span>
            </v-toolbar-title>

            <v-spacer></v-spacer>
            <v-layout row align-center style="max-width: 650px">
              <v-text-field
                :append-icon-cb="() => {}" placeholder="Search..." single-line color="white"hide-details></v-text-field>
                    <v-btn icon>
                       <v-icon>mdi-magnify</v-icon>
                    </v-btn>
                    <v-btn icon>
                      <v-icon>mdi-account</v-icon>
                  </v-btn>
                  <v-btn icon>
                      <v-icon>mdi-dots-vertical</v-icon>
                  </v-btn>
            </v-layout>
          </v-app-bar>
      
          <v-content>
            <v-container fill-height>
              <v-layout justify-center align-center>
                
              </v-layout>
            </v-container>
          </v-content>

        </v-app>
      </div>


    <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
    <script src="../source.js"></script>      
</body>
</html>