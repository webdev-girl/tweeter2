
new Vue({
    el: '#demo-1',
    data: {
        profile: {
            name: 'Leeroy Jenkins',
            avatar: 'images/leeroy-jenkins.jpg',
            bio: 'Leeeeeeeeerrrrrrrooooyyyyyy Jenkins'
        }
    }
});

new Vue({
    el: '#demo-2',
    data: {
        profile: {
            name: 'Leeroy Jenkins',
            avatar: 'images/wow.jpg',
            bio: 'Leeeeeeeeerrrrrrrooooyyyyyy Jenkins'
        }

    }
});

new Vue({
    el: '#demo-3',
    data: {
        profile: {
            name: 'Leeroy Jenkins',
            avatar: 'images/wow.jpg',
            bio: 'Leeeeeeeeerrrrrrrooooyyyyyy Jenkins'
        }
    },
        methods: {
        changePicture() {
        this.profile.avatar = '/images/singers.jpg';
        }
    }
});
