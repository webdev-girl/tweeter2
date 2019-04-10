new Vue({
    el: '#title',
    data:{
        title: 'Welcome to Vue.js-Mounted'
    },
    mounted(){
        this.title = "Hello Class";
        alert("This is my first alert");
    }
})
var myjournal = new Vue({
    el: '#my-journal',
    data:{
        journalTitle: 'Input journal entry',
        myJournalEntry: 'I ate fries today'
    }
})
alert("This is my second alert");
title.title = "Hello Go Away";
title.title = "Hello Come Back";
console.log(title);

title.title = "Hello Come Back";
