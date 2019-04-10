new Vue({
    el: '#pofile',
    data: {
        newHref: '',
        newSrc: '',
    },
    methods:{
        changePic(){
            alert(this.newHref);
        }
    }
});

// new Vue({
//     el: '#demo-2',
//     data: {
//         profile: {
//             name: 'Leeroy Jenkins',
//             avatar: 'images/wow.jpg',
//             bio: 'Leeeeeeeeerrrrrrrooooyyyyyy Jenkins'
//         }
//
//     }
// });
//
// new Vue({
//     el: '#demo-3',
//     data: {
//         profile: {
//             name: 'Leeroy Jenkins',
//             avatar: 'images/wow.jpg',
//             bio: 'Leeeeeeeeerrrrrrrooooyyyyyy Jenkins'
//         }
//     },
//         methods: {
//         changePicture() {
//         this.profile.avatar = 'images/leeroy-jenkins.jpg';
//         }
//     }
// });
