<!-- @author kingdev1026 -->

<html>
   <head>
      <title>VueJs Instance</title>
      <script type = "text/javascript" src = "js/vue.js"></script>
   </head>
   <body>
      <style>
         .fade-enter-active, .fade-leave-active {
            transition: opacity 2s
         }
         .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
            opacity: 0
         }
      </style>
      <div id = "databinding">
         <button v-on:click = "show = !show">Click Me</button>
         <transition name = "fade">
            <p v-show = "show" v-bind:style = "styleobj">Animation Example</p>
         </transition>
      </div>
      <script type = "text/javascript">
         var vm = new Vue({
            el: '#databinding',
            data: {
               show:true,
               styleobj :{
                  fontSize:'30px',
                  color:'red'
               }
            },
            methods : {
            }
         });
      </script>
   </body>
</html>