var Vue = require('vue')
var VueResource = require('vue-resource')

Vue.use(VueResource);

// new Vue({
//     el: '#rss-feed',
//     data: {
//         origin: ''
//     },
//
//     ready: function() {
//         // GET request
//         this.$http.get('http://feeds.soundcloud.com/users/soundcloud:users:212379605/sounds.rss', function (data, status, request) {
//
//             // set data on vm
//             this.$set('origin', data)
//
//         }).error(function (data, status, request) {
//             // handle error
//         })
//     }
// })