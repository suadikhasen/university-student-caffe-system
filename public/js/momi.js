Vue.component('blog-post',{
  props:['post'],
  template:`
  <div class="blog-post">
    <button v-html="post.tittle" v-on:click="$emit('enlarge')"></button>
    <p v-html="post.content">
      
    </p>

  </div>
`
})

var hasen = new Vue({
  el:"#hasen-app",
  data:{
    postsize:0.5,
    redcolor:"red",
    posts:[
   {id:1,tittle:"hasen",content:"hasen suadik alemu"},
   {id:2,tittle:"muhammed",content:"muhammed oumer"},
   {id:3,tittle:"merem",content:"merem suadik alemu"},
    ]
  }
})