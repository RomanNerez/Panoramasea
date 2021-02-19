
window.Vue = require('vue');


import { TweenLite, ScrollToPlugin } from 'gsap/all';
import { Hooper, Slide } from 'hooper';
import App from './components/panoramasea/App.vue';
window.axios = require('axios').default;


Vue.component('hooper', Hooper);
Vue.component('slide', Slide);

var app = new Vue({
	el:'#page__wrapper',

	data:{
		toScroll: null
	},
	components:{
		App
	},
	watch:{
		'toScroll': function() {
            if ( this.toScroll ) {
                var target = document.getElementById(this.toScroll),
                    points = target.getBoundingClientRect();

                TweenLite.to(window, .75, {
                    scrollTo: {y: points.y, autoKill: false},
                    onComplete: () => {
                        this.toScroll = null;
                    }
                });
            }
        },
	},
	computed:{
		
	},
	methods:{

	}
});
console.log(app)