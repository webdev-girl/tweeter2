
new Vue({
    el: '#demo-class',
    data: {
        buttonGreen: true
        },
            methods: {
            toggleButton() {
                this.buttonGreen = !this.buttonGreen;
        }
    }
});
